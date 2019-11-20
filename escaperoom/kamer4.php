<!DOCTYPE html>
<html lang="nl">
<head>
	<title>Kamer 4 | 6-Cijfer slot</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<div id=kamer4body>
<?php
if(isset($_COOKIE["toegang"])){

echo "<center>Gefeliciteerd, u bent er bijna!</center>";
echo "<center><h2>In elke kamer stonden 2 nummers genoteerd, deze vormen samen een 6-cijferige code, vul deze in om de escape room te verlaten.</h2></center><br>";

} else {
    header("Location: ingang.php");
}
?>
<center>
    <!-- het antwoord is 128394 -->
<form method="post">
  <input type="number" name="answer" placeholder="Vul hier de 6-cijferige code in">
  <br>
  <input type="submit" name="verstuur">
</center>
<?php
    $antwoord = "128394";
    $admincode = "admin123";

    if(isset($_POST["verstuur"])){
        $ingevuld_antwoord = $_POST["answer"];

        if($ingevuld_antwoord == $antwoord || $ingevuld_antwoord == $admincode){
            header("location: uitgang.php");
        }
    }
?>
</div>
</body>
</html>