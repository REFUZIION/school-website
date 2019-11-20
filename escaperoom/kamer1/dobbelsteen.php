<style>
   .dobbelsteen {
       border: 2px solid #000;
       width: 361px;
       height: 361px;
   }
</style>

  <div class='dobbelsteen'>

<?php

function dubblesteen() {
    $i = rand(1, 6);
    $i = "<img src=\"img/dubblesteen_$i.jpg\">";
    echo "<div class=\"dubblesteen\">$i</div>";
}

dubblesteen();

echo "<br>";


function dagtijd(){
if (date("H") < 12) {
    $welcome = 'Goede morgen het is nu ';
} else if (date('H') > 11 && date("H") < 18) {
    $welcome = 'Goede middag het is nu ';
} else if(date('H') > 17) {
    $welcome = 'Goede avond het is nu ';
}
echo $welcome;
echo date(' H:i:s');

}

dagtijd();

?>
</div>