<?php
$user = "docent";
$wachtwoord = "KhGCxI7";
$admin = "Diederik";
$adminwachtwoord = "admin123";

if(isset($_POST['verstuur'])){

    $ingevulde_user = $_POST['gebruikersnaam'];
    $ingevulde_wachtwoord = $_POST['password'];

    if($ingevulde_wachtwoord == $wachtwoord && $ingevulde_user == $user || $ingevulde_wachtwoord == $adminwachtwoord && $ingevulde_user == $admin){
        
    }else {
		?>
		<script type="text/javascript">
		window.location.href = 'http://u533473.gluweb.nl/docent/docenten-login.php';
		</script>
		<?php
	}
}
?>
<!DOCTYPE html>
<html>

<head>
	<title>REFUZiON | Foto gallerij</title>
	<link rel="shortcut icon" href="../favicon/favicon.ico" >
    <link rel="icon" type="image/gif" href="../favicon/animated_favicon1.gif" >
	<link href="../css/style.css" rel="stylesheet"/>
	<link href="../css/social.css" rel="stylesheet"/>
	<link href="css/style.css" rel="stylesheet"/>
	<link href="../css/responsive.css" rel="stylesheet"/>

	<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="HandheldFriendly" content="true">
</head>
<body>

	<div id="container">

		<div id="header">
		<center>
			<a href="../index.html"><button class="btn" title="Klik hier om naar de home pagina te gaan">Index</button></a>
			<a href="../creations.html"><button class="btn" title="Klik hier om naar de creations pagina te gaan">Creations</button></a>
			<a href="../contact.html"><button class="btn" title="Klik hier om naar de contact pagina te gaan">Contact</button></a>
		</center>
		</div>
		<br>
		<div id="content">
<center>
<a href=fotogallerij1.php><img src= "img/foto1.jpg"></a>
<a href=fotogallerij2.php><img src= "img/foto2.jpg"></a>
<a href=fotogallerij3.php><img src= "img/foto3.jpg"></a>
<a href=fotogallerij4.php><img src= "img/foto4.jpg"></a>
</center>
</header>
<container>
    <center>
<img src="img/foto1-groot.jpg" >
</center>
</container>
		</div>
		<br>
		<div id="footer">
			<br>
			<a href="../docent/docenten-index.php"><button class="footerbtn" title="Klik hier om naar de docenten Index pagina te gaan.">Docenten Index</button></a>
			<div id="social">
					<div class="footer-social-icons">
						<ul class="social-icons">
							<li><a href="https://www.facebook.com/diederik.veenstra.1" class="socialbutton"> <i class="fa fa-facebook"></i></a></li>
							<li><a href="https://twitter.com/DiederikVeenst1" class="socialbutton"> <i class="fa fa-twitter"></i></a></li>
							<li><a href="https://www.youtube.com/channel/UCY5z0755EfZ0Ao6nVxxY01A?sub_confirmation=1" class="socialbutton"> <i class="fa fa-youtube"></i></a></li>
							<li><a href="https://github.com/REFUZiON312" class="socialbutton"> <i class="fa fa-github"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>

</body>
</html>