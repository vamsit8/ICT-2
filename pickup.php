<!DOCTYPE html>
<?php
date_default_timezone_set ("Australia/Brisbane");
include("include/config.php");
$conn=db_connect();
?>
<html>
<head>
<meta charset="utf-8"/>
<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
</head>
<body>
<form> 
  
 <!-- <button type="button" onclick="addTime()">click here and choose a pickup time</button>-->
   Pickup Time:
  <select id="pickUpTime" name="pickUpTime" id="pickUpTime">
   <option disabled selected> Please Select </option>
   <?php
      $date = new DateTime();
      //$date->modify('+15 minute');
      $timeslots = "select * from timeslots where timeslots Between'".$date->format('H:i')."' AND '";
      $date->modify('+60 minute');
      $timeslots = $timeslots.$date->format('H:i')."'";
      //echo $timeslots;
      $gettimes = mysqli_query($conn,$timeslots);
      while ($time = mysqli_fetch_assoc($gettimes)){
        $slot = strtotime ($time["timeslots"]);
        $hour = date('H', $slot);
        $minute = date('i', $slot);
        $date->setTime($hour, $minute, 0, 0);
        $sql = "select count(*) AS 'count' from orders where date = '".$date->format('y-m-d H:i')."'";
        echo $sql;
       $result = mysqli_query($conn,$sql);
       $row = mysqli_fetch_assoc($result);
        echo $conn->error; 
        if ($row["count"]<3){
        ?>
        <option value = "<?php echo $date->format('y-m-d H:i'); ?>"><?php echo $time["timeslots"];?> </option>
        
      <?php
    }
      
    }
        ?>
  </select>
  
  
  <script>
 
   
function addTime(){

  /*
    var x = document.getElementById("pickUpTime");
	console.log(x.options.length);
   if (x.options.length > 1 ) {
   document.getElementById('pickUpTime').options.length = 0;  
   }
   
   var hours, minutes, ampm, additional;   
   var userInput =  moment().format("HH:mm");      
   var splitted = userInput.split(":"); 
   
   if (parseInt(splitted[1])%5 >= 1) {
     additional = 5-parseInt(splitted[1])%5;
   }    
   var startMinToCal = parseInt(splitted[0]*60) + parseInt(splitted[1]);  
  
   startMinToCal = startMinToCal + additional;
   
   console.log("After additional: "+ startMinToCal);
   startMinToCal = startMinToCal + 15;   
   var endMinToCal = startMinToCal+180 ;
   
   for(var i = startMinToCal; i <= endMinToCal; i += 15){
	 hours = Math.floor(i / 60);
        minutes = i % 60;
        if (minutes < 10){
            minutes = '0' + minutes; // adding leading zero
        }
        ampm = hours % 24 < 12 ? 'AM' : 'PM';
        hours = hours % 12;
        if (hours === 0){
            hours = 12;
        }
		if (hours < 10){
            hours = '0' + hours; // adding leading zero
        }
		  var option = document.createElement("option");
		   option.text =hours + " : " + minutes + " "+ ampm;
		   x.add(option);
	 }	
  
   }*/
</script>

<input type="submit">



</form>




</body>
</html>