 <?php
 

 session_start(); 
include_once('include/config.php'); 

 if(isset($_POST["add_to_cart"]))  
 {  
      if(isset($_SESSION["order_menu"]))  
      {  
           $item_array_id = array_column($_SESSION["order_menu"], "product_id");  
           if(!in_array($_GET["id"], $item_array_id))  
           {  
                $count = count($_SESSION["order_menu"]);  
                $item_array = array(  
                     'product_id'               =>     $_GET["id"],  
                     'pname'               =>     $_POST["hidden_name"],  
                     'product_price'          =>     $_POST["hidden_price"],  
                     'item_quantity'          =>     $_POST["quantity"]  
                );  
                $_SESSION["order_menu"][$count] = $item_array;  
           }  
           else  
           {  
                echo '<script>alert("Remove the item from the list and then add it")</script>';  
                echo '<script>window.location="menu.php"</script>';  
           } 
      }  
      else  
      {  
           $item_array = array(  
                'product_id'               =>     $_GET["id"],  
                'pname'               =>     $_POST["hidden_name"],  
                'product_price'          =>     $_POST["hidden_price"],  
                'item_quantity'          =>     $_POST["quantity"]  
           );  
           $_SESSION["order_menu"][0] = $item_array;  
      }  
 }   
 if(isset($_GET["action"]))  
 {  
      if($_GET["action"] == "delete")  
      {  
           foreach($_SESSION["order_menu"] as $keys => $values)  
           {  
                if($values["product_id"] == $_GET["id"])  
                {  
                     unset($_SESSION["order_menu"][$keys]);  
                     echo '<script>alert("Item Removed")</script>';  
                     echo '<script>window.location="menu.php"</script>';  
                }  
           }  
      }  
 }  
 ?> 
 <!DOCTYPE html>  
 <html>  
      <head>  
        
         <?php include("include/head.inc")?>
         <?php include("include/nav.inc")?>

          
      </head>  
      <body>  
           <br />  
           <div class="container" style="width:700px;">  
            <div class="row">
                <h3 align="center">Our food is prepared for rder</h3><br />  
                <?php  
                $query = "SELECT * FROM products ORDER BY product_id ASC";  
                  $connect =db_connect(); 
                $result = mysqli_query($connect, $query);  
                if(mysqli_num_rows($result) > 0)  
                {  
                     while($row = mysqli_fetch_array($result))  
                     {  
                ?>  
                
                <div class="col-md-6 " style="padding: 25px;">  
                     <form method="post" action="menu.php?action=add&id=<?php echo $row["product_id"]; ?>">  
                          <div style="border:1px solid #333; background-color:#f1f1f1; border-radius:5px; padding:25px;text-align: center;">  
                               <img src="<?php echo $row["image"]; ?>" class="img-responsive" style="height: 250px;max-width: auto;" /><br />  
                               <h4 class="text-info"><?php echo $row["pname"]; ?></h4>  
                               <h4 class="text-danger">$ <?php echo $row["product_price"]; ?></h4>
                               <h4 class="text-info"><?php echo $row["description"]; ?></h4> 
                               <input type="text" name="quantity" class="form-control" value="1" />  
                               <input type="hidden" name="hidden_name" value="<?php echo $row["pname"]; ?>" />  
                               <input type="hidden" name="hidden_price" value="<?php echo $row["product_price"]; ?>" />  
                               <input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Add to Cart" />  
                          </div>  
                     </form>  
                </div>  
                <?php  
                     }  
                }  
                ?>  
               <div style="clear:both"></div> 
                <br />  
                <h3>Order Details</h3>  
                <div class="table-responsive">  
                     <table class="table table-bordered">  
                          <tr>  
                               <th width="40%">Item Name</th>  
                               <th width="10%">Quantity</th>  
                               <th width="20%">Price</th>  
                               <th width="15%">Total</th>  
                               <th width="5%">Action</th>  
                          </tr>  
                          <?php   
                          if(!empty($_SESSION["order_menu"]))  
                          {  
                               $total = 0;  
                               foreach($_SESSION["order_menu"] as $keys => $values)  
                               {  
                          ?>  
                          <tr>  
                               <td><?php echo $values["pname"]; ?></td>  
                               <td><?php echo $values["item_quantity"]; ?></td>  
                               <td>$ <?php echo $values["product_price"]; ?></td>  
                               <td>$ <?php echo number_format($values["item_quantity"] * $values["product_price"], 2); ?></td>  
                               <td><a href="menu.php?action=delete&id=<?php echo $values["product_id"]; ?>"><span class="text-danger">Remove</span></a></td>  
                          </tr>  
                          <?php  
                                    $total = $total + ($values["item_quantity"] * $values["product_price"]);  
                               } 
                               $_SESSION["totalcost"]=$total; 
                          ?>  
                          <tr>  
                               <td colspan="100" align="right">Total</td>  
                               <td align="right">$ <?php echo number_format($total, 2); ?></td> 
                               <td></td>  
                          </tr>  
                          <?php  
                          }  
                          ?>  
                     </table> 

                      <!--submit button start-->
        <div>
        <div class="input-field col s12">
          <form class="formValidate" id="formValidate" method="post" action="cart.php" novalidate="novalidate">
                              <button class="btn cyan waves-effect waves-light right" type="submit" name="action">Order
                                <i class="mdi-content-send right"></i>
                              </button>
                            </div>
            </div> 
          </form>
          <?php

           
          ?>
            <!--submit button end-->  
                </div>  
           </div>  </div>
           <br />  
      </body> 
  <?php include("include/footer.inc") ?>
 </html>