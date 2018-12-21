<?php
// error_reporting(0);
session_start();
include("connection.php");
?>
<style>
body{
    margin:0;
    padding:0;
    background-color: black;
}
.form{
    background-color:grey;
    text-align:center;
    margin-top: 40vh;
    font-size:40px;    
}
.login{
    font-size: 40px;
}
</style>

<form action="" method="post" class="form">
Username: <input type="text" name="username" value=""/><br><br>
Password: <input type="password" name="password" value=""/><br><br>
<input type="submit" name="submit" value="Login" class="login">
</form>

<?php
if(isset($_POST['submit'])){
  $user=$_POST['username'];
  $pwd=$_POST['password'];
  $query = "SELECT * FROM admin WHERE email='$user' && password='$pwd' ";
   $data = mysqli_query($conn,$query);
   $total = mysqli_num_rows($data);
   if($total==1){
       $_SESSION['username']=$user;
       header('location:admin.php');
   }
   else{
       echo "Login faild";
   }
}
?>