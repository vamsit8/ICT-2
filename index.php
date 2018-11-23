<!doctype html>
<html>
<head>
	  <title>Golden Lor</title>
<?php include("include/head.inc") ?>
</head>
<body>
<!--- navigation -->
<?php include("include/nav.inc") ?>
<!---slider images-->
<div id="myCarousel" class="carousel slide" data-ride="carousel">
		<ol class= "carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"> </li>
			<li data-target="#myCarousel" data-slide-to="1"> </li>
			<li data-target="#myCarousel" data-slide-to="2"> </li>
		</ol>
		<div class="carousel-inner" role="listbox">
			<div class ="item active"> 
				<img src ="img/slide1.jpeg">
				<div class="carousel-caption"> 
					<h1> Golden Lor<h1>
					<br>
					<button type="button" class="btn btn-default">Freshly cooked food</button>
				</div>
			</div>
		
			<div class="item">
				<img src="img/slide3.jpg">
			</div>
			<div class="item">
				<img src="img/slide3.jpg">
			</div>
		</div>
		<a class="left carousel-control" href="#myCarousel" role = "button" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#myCarousel" role = "button" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>
	<!--- glphicon chervron is the arrow for left side aria-hidden is the class for true-->

</div>
</div>

<div class ="container text-center">
		<h2> Our new Pizza trends </h2>
		<div class="row">
			<div class="col-sm-4">
				<img src="img/pizza2.jpg" id="icon">
				<h4>Hawaiian Pizza</h4>
			</div>
			<div class="col-sm-4">
							</div>
			<div class="col-sm-4">
				<img src="img/aaa.jpg" id="icon">
				<h4>Pepporoni Pizza</h4>
			</div>
		</div>
	</div>
<!--- end of slider------>
<div class="container-fluid padding">
<div class="row welcome text-center">
<div class="col-12">
<h1 class="display-4"> we undertake catering as well</h1>
</div>
<hr>
<div class="col-12">
 <img src="img/catering.jpg" class="img-fluid" style="width:100%">
<p class="lead">Our Responsibilities</p>
</div>
</div>
</div>
<div class="container-fluid padding">
<div class="row text-center padding">
<div class="col-xs-12 col-sm-6 col-md-4">
 <i class="fa fa-shopping-cart fa aria-hidden=true"> Order online</i>
 </div>
 <div class="col-xs-12 col-sm-6 col-md-4">
 <i class="fa fa-clock-o fa aria-hidden=true"> On time</i>
 </div>
 <div class="col-xs-12 col-sm-6 col-md-4">
 <i class="fa fa-thumbs-up aria-hidden=true"> Quality food</i>
 </div>
</div>

<div class="container">
<div class="row text-center padding">
<div class="col-12">
<h2>Connect with us</h2>
</div>
<a href="https://www.facebook.com/goldenlor.yarrabilba"><i class="fa fa-facebook-official aria-hidden=true"></i></a>
<a href="goldenloryarrabilba"><i class="fa fa-twitter-square aria-hidden=true"></i></a>
<a href="goldenloryarrabilba"><i class="fa fa-instagram aria-hidden=true"></i></a>
<a href="goldenloryarrabilba"><i class="fa fa-youtube aria-hidden=true"></i></a>
</div>
</div>
</div>
<?php include ("include/footer.inc") ?>
</body>
</html>
