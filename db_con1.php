<?php
$conn = mysqli_connect("localhost", "root", "", "covid");
if(!$conn){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>