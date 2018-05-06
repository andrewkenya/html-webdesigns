<?php
include('config.php');

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset ="UTF-8">
  <meta name="viewport" content="width=device-width">
  <meta name="description" content="Affordable and professional web design">
  <meta name="keywords" content="web design,Affordable web design,professional,design">
  <meta name="author" content="Andrew Thiarara">
  <title>Cube| Home </title>
  <link rel="stylesheet" href="./css/style.css">
</head>
<body>
  <header>
   <div class="container">
    <div id ="branding">
      <h1><span class="highlight">Cube</span>Designs</h1>
     </div>
      <nav>
      	 <ul>
      	 	<li class="current"><a href="index.html">Home</a></li>
      	 	<li><a href="about.html">About</a></li>
      	 	<li><a href="services.html">Services</a></li>
      	 </ul>
      </nav>
     </div>
</header>
<section id="showcase">
	<div class="container">
	  <h1>Affordable Professinal web design </h1>
	  <p>Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel</p>
	</div>
</section>

<section id="newsletter">
 <div class="container">
 	<h1>Subscribe to Our Newsletter</h1>
<?php

if(!empty($_POST['emails'])) {
	$email = mysqli_real_escape_string($conn, $_POST['emails']);
	$sql = "INSERT INTO emails (email)
	VALUES('$email')";
	
	if($conn->query($sql)=== TRUE)
	{
		echo 'Subscribe successfully added.';
	}
	
}

?>
 
    <form action="" method="POST">
    <input type="email"  name="emails" placeholder="Add Email...">
    <button type="submit" class="button1">Subscribe</button>
    </form>
 </div>
</section>

<section id="boxes">
 <div class="container">
   <div class="box">
    <img src="./img/logo_html.png">
    <h3>HTML5 Markup</h3>
    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</p>
    </div>
    <div class="box">
    <img src="./img/logo_css.png">
    <h3>CSS3 Styling</h3>
    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</p>
    </div>
    <div class="box">
    <img src="./img/logo_brush.png">
    <h3>Graphic Design</h3>
    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</p>
    </div>
    </div>
   </section>

	<footer>
	<p>Cube designs,Copyright &copy; 2017</p>
	</footer>
</body> 
</html>
