<!DOCTYPE html>
<html lang="nl">
<head>
	<title>Kamer 2 | Quiz vraag</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<div id=kamer2body>
<center>
<?php
if(isset($_COOKIE["toegang"])) {

echo "<h2>Dit is een quiz vraag, als je het antwoord goed beantwoord mag je doorgaan naar de nieuwe pagina.</h2><br>";
echo "Wat is de naam van de SLBer van klas 1WDV2?";

} else {
    header("Location: ingang.php");
}
?>
<form method="post">
  <input type="text" name="answer" placeholder="Vul hier uw antwoord in">
  <br>
  <input type="submit" name="verstuur">
<?php
    $antwoord = "Martijn Kunstman";
    $admincode = "admin123";

    if(isset($_POST["verstuur"])){
        $ingevuld_antwoord = $_POST["answer"];

        if($ingevuld_antwoord == $antwoord || $ingevuld_antwoord == $admincode){
            header("location: kamer3.php");
        }
    }
?>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<h2>83</h2>
</center>
</div>
</body>
</html>