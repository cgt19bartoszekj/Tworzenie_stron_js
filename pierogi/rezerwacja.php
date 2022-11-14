<?php
$ile = $_POST['ile'];
$tel = $_POST['tel'];
echo "Zarezerwowano $ile miejsc dla $tel <br><hr>";
if (isset($_POST['zgoda'])) $zgoda = 1;
else $zgoda = 0;
echo $zgoda ."<br>";
?>