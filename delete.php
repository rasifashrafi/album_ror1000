<?php
session_start();
include("connection.php");
if(!isset($_SESSION['username'])){
   header("location:login.php");
   }
$id = $_GET['rn'];
$query = "DELETE FROM products WHERE id ='$id'";
$data = mysqli_query($conn, $query);
if($data){
   echo "<script>alert('record deleted')</script>";
   ?>
   <META HTTP-EQUIV="Refresh" CONTENT="0; URL=admin.php">
   <?php
}
else{
   echo "delete failed";
}
?>