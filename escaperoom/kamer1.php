<!DOCTYPE html>
<html>
<head>
	<title>Kamer 1 | Dobbelen</title>
    <link rel="stylesheet" href="kamer1/dobbelsteen.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<div id=kamer1body>
<center>
<?php
if(isset($_COOKIE["toegang"])) {
    echo "Gooi de dobbelsteen met de 'F5' toets. Als u 6 gooit mag u doorgaan naar kamer 2<br>";

function dobbelsteen() {
        $i = rand(1, 6);
        $a = "<img src=\"kamer1/img/dobbelsteen_$i.jpg\">";
        echo "<div class=\"dobbelsteen\">$a</div>";
        
        if($i == "6") {
            echo "Gefeliciteerd! U heeft 6 gegooid, druk op deze knop om door te gaan";
            echo "<br> <button type=\"button\" onclick=\"location='kamer2.php'\"> Klik hier om naar kamer 2 te gaan </button>";
            // header("Location: kamer2.php");
        } else {
            echo "Helaas! U heeft geen 6 gegooid, probeer het opnieuw!";
        }
    }

  dobbelsteen();

} else {
    header("Location: ingang.php");
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
<h2>12</h2>
</center>
</div>
</body>
</html>