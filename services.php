<html lang="en">
<head>
<meta charset="UTF-8">
<link rel="shortcut icon" href="pictures/example1.png" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://kit.fontawesome.com/4edc7af1ed.js" crossorigin="anonymous"></script>
<!-- fonts -->
	<link href="https://fonts.googleapis.com/css2?family=Arvo:wght@700&display=swap" rel="stylesheet"> 

<!--bootstrap-->	
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="services.css">
<title> CV Solutions Inc.</title>
</head>
<div class="loader">
<img src="pictures/example1.png">
</div>

<?php
include 'navi.php';
?>

<body>

	
<div class="container">
<div class="servicescover">
<ul>
<li>Lorem Ipsum</li>
<li>Lorem Ipsum</li>
<li>Lorem Ipsum</li>
</ul>
<div class="loremain">
<a class="lorem" id="weew1" href="">Lorem Ipsum</a>
<a class="lorem" id="weew2" href="">Lorem Ipsum</a>
</div>
<img src="pictures/barrel.png">

</div>
</div>
<!-- Nav tabs -->
	<div class="container">

<ul id="nav" class="nav nav-tabs">
  <li class="nav-link"><a data-toggle="tab" href="#featured">Featured</a></li>
  <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Programs</a>
			<div id="dropdown" class="dropdown-menu">
				<a class="dropdown-item" data-toggle="tab" href="#watertreatmentt">Water Treatment</a>
				<a class="dropdown-item" data-toggle="tab" href="#fruits">Fruit and Vegetables Post-Harvest</a>
				<a class="dropdown-item" data-toggle="tab" href="#meat">Piggery,Chicken,Fish</a>
			</div>
 </li>
 <li class="nav-link"><a data-toggle="tab" href="#equipment">Equipments</a></li>
 <li class="nav-link"><a data-toggle="tab" href="#product" role="tab">Products</a></li>
</ul>
</div>

<div class="tab-content">
  <div class="tab-pane fade" id="watertreatmentt" role="tabpanel">
  <div class="container">
  <div class="body1">
	<div class="box">
		<div class="boiling pic"></div>
			<div class="insidebox"><p>Boiling Water Treatment</p></div>
	</div>
	<div class="box">
		<div class="cooling pic"></div>
			<div class="insidebox"><p>Cooling Water Treatment</p></div>
	</div>
	<div class="box">
		<div class="potable pic"></div>
			<div class="insidebox"><p>Potable Water Treatment</p></div>
	</div>
	<div class="box">
			<div class="waste pic"></div>
		<div class="insidebox"><p>Waste Water Treatment</p></div>
	</div>
		<div class="box">
			<div class="solid pic"></div>
		<div class="insidebox"><p>Solid/Liquid Separation</p></div>
	</div>
  </div>
  </div>
  </div>
  <div class="tab-pane fade"  id="fruits" role="tabpanel">
    <div class="container">
  <div class="body1">
	<div class="box">
		<div class="ripening pic"></div>
			<div class="insidebox"><p>Ripening Retardants</p></div>
	</div>
	<div class="box">
		<div class="washing pic"></div>
			<div class="insidebox"><p>Washing and Disinfection</p></div>
	</div>
	<div class="box">
		<div class="water pic"></div>
			<div class="insidebox"><p>Water Recycle</p></div>
	</div>
	  </div>
	  </div>
  </div>
    <div class="tab-pane fade" id="meat" role="tabpanel">
     <div class="container">
 <div class="body1">

	<div class="box">
		<div class="poultry pic"></div>
			<div class="insidebox"><p>Poultry Farm Biosecurity</p></div>
	</div>
	<div class="box">
		<div class="pig pic"></div>
			<div class="insidebox"><p>Piggery Biosecurity</p></div>
	</div>
	<div class="box">
		<div class="chicken pic"></div>
			<div class="insidebox"><p>Chicken Dressing Plant/<br> Abatoire Biosecurity</p></div>
	</div>
	<div class="box">
			<div class="fish pic"></div>
		<div class="insidebox"><p>Fish</p></div>
  </div>
  </div>
  </div>
  </div>
  
  
  
  
  
  
  
  
  
  
  
  
  
  <div class="tab-pane fade-in active" id="featured">
  	  <div class="container">
    <div class="featuredbody">
	
	

	<!--slider-->
<div class="container">
<div id="demo" class="carousel slide" data-ride="carousel" data-interval="5000" >

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>

  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="pictures/chem.png"  class="tales">
	    <div  id="caption1" class="carousel-caption ">
        <h5>CETREIN 50</h5>
        <p>Citrein 50 is an acidic sequestering and cleaning agent of 50% citric acid for chemo thermal disinfection and decalcification of hemodialysis machine.</p>

      </div>
	  
    </div>
    <div class="carousel-item">
      <img src="pictures/chem.png" class="tales">
	  <div  id="caption2" class="carousel-caption">
        <h5>CETREIN 50</h5>
        <p>Citrein 50 is an acidic sequestering and cleaning agent of 50% citric acid for chemo thermal disinfection and decalcification of hemodialysis machine.</p>
		<p id="learnmore2"><a href="#">More Info..</a></p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="pictures/chem.png"  class="tales">
	  	  <div  id="caption3" class="carousel-caption">
        <h5>Why CV Solutions?</h5>
        <p>Despite being a relatively young company, CVSI personnel have the knowledge, expertise and experience to fully address customer needs and expectations as 
		it provides value to their business. CVSI aspires to develop mutually beneficial Business Partnering Relationships with every customer that it serves.</p>
		<p id="learnmore3"><a href="#">Learn More</a></p>
      </div>
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
</div>
	
	
	
	
	
	
	
</div> </div>

<div class="featuredbody1"></div>
</div>





  <div class="tab-pane fade" id="equipment">
  	  <div class="container">
    <div class="body1">

	<div class="box">
		<div class="coconut pic"></div>
			<div class="insidebox"><p>Screw Press for Coconut Milk</p></div>
	</div>
	<div class="box">
		<div class="expellers pic"></div>
			<div class="insidebox"><p>Expellers for Coconut Oil</p></div>
	</div>
	<div class="box">
		<div class="screwpress pic"></div>
			<div class="insidebox"><p>Screw Press</p></div>
</div></div> </div></div>
 <div class="tab-pane fade" id="product">
   <div class="container">
     <div class="body1">

	<div class="box">
		<div class="calcium pic"></div>
			<div class="insidebox"><p>Calcium Hypochlorite</p></div>
	</div>
	<div class="box">
		<div class="citrein pic"></div>
			<div class="insidebox"><p>CITREIN 50</p></div>
	</div>
	<div class="box">
		<div class="ethylene pic"></div>
			<div class="insidebox"><p>Ethylene Absorber</p></div>
</div>
<a href="peradesin.php" style="text-decoration:none;">
	<div class="box">
		<div class="peradesin pic"></div>
			<div class="insidebox" ><p>Peradesin</p></div>

</div>
</a>
	<div class="box">
		<div class="chlorine pic"></div>
			<div class="insidebox"><p>Stabilized Chlorine Dioxide</p></div>
</div>
	<div class="box">
		<div class="scalefree pic"></div>
			<div class="insidebox"><p>Scale Free 2000</p></div>
</div>
	<div class="box">
		<div class="surfapel pic"></div>
			<div class="insidebox"><p>Surfapel XLS</p></div>
</div>
	<div class="box">
		<div class="profleet1 pic"></div>
			<div class="insidebox"><p>Profleet 169</p></div>
</div>
	<div class="box">
		<div class="profleet2 pic"></div>
			<div class="insidebox"><p>Profleet 170 RTU</p></div>
</div>
	<div class="box">
		<div class="bighorn pic"></div>
			<div class="insidebox"><p>Big Horn CH325</p></div>
</div>
<a href="sterilox5a.php" style="text-decoration:none;">
	<div class="box">
		<div class="sterilox5a pic"></div>
			<div class="insidebox"><p>Sterilox 5A</p></div>

</div>
</a>
<a href="sureclear.php" style="text-decoration:none;">
	<div class="box">
		<div class="sureclear pic"></div>
			<div class="insidebox"><p>SURECLEAR 11688</p></div>
</div>
</a>
<a href="sureclear1.php" style="text-decoration:none;">
<div class="box">
		<div class="sureclear1 pic"></div>
			<div class="insidebox"><p>SURECLEAR 11680</p></div>

</div>
</a>
<a href="sterilox5.php" style="text-decoration:none;">
<div class="box">
		<div class="sterilox5 pic"></div>
			<div class="insidebox"><p>Sterilox 5</p></div>
</div>
</a>
<a href="sureclear2.php" style="text-decoration:none;">
<div class="box">
		<div class="sureclear2 pic"></div>
			<div class="insidebox"><p>SURECLEAR 7754</p></div>
</div>
</a>
<a href="scalefree2068.php" style="text-decoration:none;">
<div class="box">
		<div class="scalefree2068 pic"></div>
			<div class="insidebox"><p>SCALEFREE 2068</p></div>
</div>
</a>
<a href="memcare.php" style="text-decoration:none;">
<div class="box">
		<div class="memcare pic"></div>
			<div class="insidebox"><p>MEMCARE 5100RO</p></div>

</div>
</a>
<a href="rustfree.php" style="text-decoration:none;">
<div class="box">
		<div class="rustfree pic"></div>
			<div class="insidebox"><p>B.W.T. Rust Free 2069</p></div>
</div>
</a>
<a href="scalefree3000.php" style="text-decoration:none;">
<div class="box">
		<div class="scalefree3000 pic"></div>
			<div class="insidebox"><p>SCALEFREE 3000</p></div>
</div>
</a>
<a href="sterilox10.php" style="text-decoration:none;">
<div class="box">
		<div class="sterilox10 pic"></div>
			<div class="insidebox"><p>Sterilox 10</p></div>
</div>
</a>
<a href="bioshield.php" style="text-decoration:none;">
<div class="box">
		<div class="bioshield pic"></div>
			<div class="insidebox"><p>BIO-SHIELD RED</p></div>
</div>
</a>
<a href="stabilox5a.php" style="text-decoration:none;">
<div class="box">
		<div class="stabilox5a pic"></div>
			<div class="insidebox"><p>Stabilox 5A</p></div>
</div>
</a>
<a href="primefresh.php" style="text-decoration:none;">
<div class="box">
		<div class="primefresh pic"></div>
			<div class="insidebox"><p>PRW40 PrimeFresh</p></div>
</div>
</a>
<a href="dichlox.php" style="text-decoration:none;">
<div class="box">
		<div class="dichlox pic"></div>
			<div class="insidebox"><p>Dichlox 15</p></div>
</div>
</a>

</div> 
  </div>
</div>
</div>



<?php
include 'footer.php';
?>

<script>
	setTimeout(function(){
	$('.loader').fadeToggle();
},000);
</script>



</body>
</html>
