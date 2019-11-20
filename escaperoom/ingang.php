<!DOCTYPE html>
<html>
<head>
	<title>Escape room</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
<div id=ingangbody>
<center>
<form method="post">
    <input type="text" name="toegangscode" placeholder="Vul hier de toegangscode in">
    <input type="submit" name="verstuur">
</center>
<?php
$toegangscode = "#JZ4P+hm";
$admincode = "admin123";

if(isset($_POST['verstuur'])){

    $ingevulde_toegangscode = $_POST['toegangscode'];

    if($ingevulde_toegangscode == $toegangscode || $ingevulde_toegangscode == $admincode){
        setcookie("toegang", "ja", time()+180);
        setcookie("speeltijd", date('H:i:s'), time()+180);
        header("Location: kamer1.php");
    }
}
?>
</div>
</body>
</html>