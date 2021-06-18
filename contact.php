<html lang="en">
<head>
<link rel="shortcut icon" href="pictures/example1.png" />
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://kit.fontawesome.com/4edc7af1ed.js" crossorigin="anonymous"></script>
<!-- fonts -->
<link href="https://fonts.googleapis.com/css2?family=PT+Sans&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Sriracha&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Amaranth:wght@700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&display=swap" rel="stylesheet"		
	<!--bootstrap-->	
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="contact.css">
<title> CV Solutions Inc.</title>
</head>
<body>
<div class="loader">
<img src="pictures/example1.png">
</div>
	<?php
include 'navi.php';
?>
<!--cover photo-->
  <div class="container">
<div class="coverphoto-contact">

<p class="coverphotoinfo"><span class="monday">Contact Us :</span> <br>Monday to Friday<br>7AM - 5PM</p>
  </div>
</div>
<!--cover photo-->	
	
<!--body-->
  <div class="container">
<div class="body-contact">
<div class="body-contact1">
<ul class="contact-list">
<li class="addresss1"><span class="mainsite">Main Site :</span><br>No. 18 Argentina Street, Barangay Don Bosco,Better Living, 1700 Paranaque City,
Metro Manila, Philippines <span class="othersite"><br><br>Other Site(s)</span><br>	KDN Building, Rosa Sanz Extension,
Barangay 14-B Poblacion District,
Barrio Obrero, Davao City, Philippines <br><br></li>
<li>
<br>
<a href="" class=" link1"><img class=" fb1" src="pictures/fb1.png" height="40px" width="40px"></a>
<a href="" class=" link1"><img class=" twitter1" src="pictures/twitter1.png" height="40px" width="40px"></a>
<a href="" class=" link1"><img class=" instagram1" src="pictures/instagram1.png" height="40px" width="40px"></a>
<a href="" class=" link1"><img class=" linkedin1" src="pictures/linkedin1.png" height="40px" width="40px"></a>
<br><br>
</li>
<li style="font-size:30px; font-weight: bold; font-family: 'Abril Fatface', cursive; letter-spacing:5px; ">+632-73587811<br>+632-85462466</li>
<li class="addresss1"><br><span class="email">E-Mail : &nbsp;</span>inquire@cvsolutionsinc.net<br><br></li>
<li><br>Complete the contact form and someone will be in contact with you soon. We look forward to speaking with you!<br><br></li><br>
<li><span CLASS=style="font-size:20px;">Map | Direction:</span><div class="gmap_canvas"><iframe style="width:330; height:300;" id="gmap_canvas" 
src="https://maps.google.com/maps?q=1709%2018%20Argentina,%20Para%C3%B1aque,%201709%20Kalakhang%20Maynila&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no"></iframe>
</li>
</ul>

</div>
<div class="getintouch">
<p>MESSAGE US!</p>

<div class="formdiv">
<form action="process.php" method="post">
  <label for="name">Full name:&nbsp;&nbsp;<span class="important">*</span></label><br>
  <input type="text" id="name" name="name" size="30" maxlength="30" required ><br><br>
  <label for="mail">E-mail Address:&nbsp;&nbsp;<span class="important">*</span></label><br>
  <input type="email" id="mail" name="mail" size="30" maxlength="30" required ><br><br>
  <label for="subject">Subject:&nbsp;&nbsp;<span class="important">*</span></label><br>
  <input type="text" id="subject" name="subject" size="30" maxlength="30" required><br><br>
  <label for="message">Message:&nbsp;&nbsp;<span class="important">*</span></label><br>
  <textarea  rows="6" cols="30" name="message" id="message" required></textarea><br><br>
  <button id="submit" type="submit" name="submit">Send Message</button>
</form>
</div>

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
