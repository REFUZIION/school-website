<!-- PHP gedeactiveerd omdat de webhost een outdated PHP versie heeft. -->
<!DOCTYPE html>
<html>

<head>
  <title>Docenten Login</title>
    <link rel="shortcut icon" href="../favicon/favicon.ico" >
    <link rel="icon" type="image/gif" href="../favicon/animated_favicon1.gif" >
    <link href="../css/style.css" rel="stylesheet"/>
    <link href="../css/social.css" rel="stylesheet"/>
    <link href="css/style.css" rel="stylesheet"/>
    <link href="css/login.css" rel="stylesheet"/>
    <link href="../css/responsive.css" rel="stylesheet"/>

    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
	  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	  <meta name="HandheldFriendly" content="true">
</head>
<body>
	<div id="container">
		<div id="header">
    <center>
      <a href="../index.html"><button class="btn" title="Klik hier om naar de home pagina te gaan" href="index.html">Index</button></a>
			<a href="../creations.html"><button class="btn" title="Klik hier om naar de creations pagina te gaan" href="creations.html">Creations</button></a>
      <a href="../contact.html"><button class="btn" title="Klik hier om naar de contact pagina te gaan">Contact</button></a>
    </center>
		</div>
		<br>
		<div id="content">
    <br><br><br><br><br>
<center>
		<div class="loginscreen">
  <form method="POST" action="docenten-index.php">
  <div class="row">
    <div class="col-25">
      <label for="gebruikersnaam">Gebruikersnaam*</label>
    </div>
    <div class="col-75">
      <input type="text" id="gebruikersnaam" name="gebruikersnaam" placeholder="Gebruikersnaam" required>
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="password">Wachtwoord*</label>
    </div>
    <div class="col-75">
      <input type="password" id="password" name="password" placeholder="Wachtwoord" required>
    </div>
  </div>
  <div class="row">
    <input type="submit" value="versturen">
  </div>
  </form>
</div>
</center>

<?php
$user = "docent";
$wachtwoord = "KhGCxI7";
$admin = "Diederik";
$adminwachtwoord = "admin123";

if(isset($_POST['verstuur'])){

    $ingevulde_user = $_POST['gebruikersnaam'];
    $ingevulde_wachtwoord = $_POST['password'];

    if($ingevulde_wachtwoord == $wachtwoord && $ingevulde_user == $user || $ingevulde_wachtwoord == $adminwachtwoord && $ingevulde_user == $admin){
      echo "<script type=\"text/javascript\"> window.location.href = 'http://u533473.gluweb.nl/docent/docenten-index.php';</script>";
    }
}
?>
		</div>
		<br>
		<div id="footer">
      <br>
      <a href="docenten-login.php"><button class="footerbtn" title="Klik hier om naar de docenten login pagina te gaan.">Docenten Login</button></a>
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