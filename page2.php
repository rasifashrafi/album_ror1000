<?php 
include_once("connetion.php");
session_start();
if(!isset($_SESSION['UserData']['Email'])){
header("location:login.php");
}
?>
<html>
<body>
    <h1>page 2</h1>
    <p>this is page 2</p><br>
    <a href="index.php">page 1</a>
    <br>
    <a href="logout.php">log out</a>
</body>
</html>