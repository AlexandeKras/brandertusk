<?php
$mysqli = new mysqli('localhost', 'root', '', 'brander');
echo 'Тимлид был в бешенстве столько раз';
$q = mysqli_query($mysqli, "SELECT  COUNT(*) FROM company WHERE nastroy = '1'");

while($row = mysqli_fetch_row($q)){
    echo $row[0];
}

?>