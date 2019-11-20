<!DOCTYPE html>
<html lang="nl">
<head>
	<title>Kamer 3 | Zoek de link</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<div id=kamer3body>
<?php
if(isset($_COOKIE["toegang"])) {

    echo "<center><H2>Zoek de werkende link naar de volgende pagina toe.</H2></center>";

    for ($x = 0; $x <= 20; $x++) {
        echo "<center><a href=kamer3.php title=\"Dit is niet de juiste link\">Welke link zou het zijn?</a><br></center>";

        if ($x == 8) {
            echo "<center><a href=kamer4.php title=\"GEFELICITEERD DIT IS DE JUISTE LINK, KLIK HIER OM DOOR TE GAAN NAAR DE VOLGENDE KAMER\">Welke link zou het zijn?</a><br></center>";
        }
    }
} else {
    header("Location: ingang.php");
}
?>
<br>
<br>
<center><h2>94</h2></center>
</div>
</body>
</html>