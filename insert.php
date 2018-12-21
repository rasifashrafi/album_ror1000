<?php
session_start();
include("connection.php");
if(!isset($_SESSION['username'])){
header("location:login.php");
}
?>
<html>
<head>
</head>
<body>
<form action="" method="post" enctype="multipart/form-data">
       id <input type="text" name="id" value=""><br><br>
       Name <input type="text" name="name" value=""><br><br>
       year <input type="text" name="year" value=""><br><br>
       size <input type="text" name="size" value=""><br><br>
       <input type="file" name="uploadfile" value=""><br><br>
       count <input type="text" name="count" value=""><br><br>
       glued <input type="text" name="glued" value=""><br><br>

       <input type="submit" name="submit" value="submit">
   </form>
<?php
if(isset($_POST['submit'])){
   $rn=$_POST['id'];
   $sn=$_POST['name'];
   $cl=$_POST['year'];
   $sz=$_POST['size'];
   $cn=$_POST['count'];
   $gl=$_POST['glued'];
   $filename = $_FILES["uploadfile"]["name"];
   $tempname = $_FILES["uploadfile"]["tmp_name"];
   $folder = "images/".$filename;
// echo $folder;
   move_uploaded_file($tempname,$folder);

   if($rn!="" && $sn!="" && $cl!="" && $filename!=""){
       $query = "INSERT INTO products VALUES ('$rn','$sn','$cl','$sz','$folder','$gl','$cn')";
       $data = mysqli_query($conn, $query);

       if($data){
       ?>
           <META HTTP-EQUIV="Refresh" CONTENT="0; URL=admin.php">
       <?php
       }
   }else{
       echo "all field are requred";
   }
}

?>
</body>
</html>