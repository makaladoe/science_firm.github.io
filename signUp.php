<?php
$con = mysqli_connect('localhost' ,'root' ,'' ,'login_dba');

$Name = $_POST ['Name'];
$Email = $_POST ['Email'];
$Password = $_POST ['Password'];

$sql = "INSERT INTO  `users` (`Name` , `Email` ,`Password`)  
VALUES ('$Name' , '$Email' ,'$Password')";
$rs =mysqli_query($con , $sql);
if ($rs) {
    echo "Welcome to Skies science firm";
}
?>