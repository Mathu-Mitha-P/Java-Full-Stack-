<?php
include("config.php");
extract($_POST);
$sql = "INSERT INTO ContactForm(name,email, phone, message) VALUES ('".$name."','".$email."',".$phone."','".$message."')";
$result = $mysqli->query($sql);
if(!$result){
    die("Data Submission Failed: ".$mysqli->error);
}
echo "Thank You For Contacting Us ";
$mysqli->close();
?>