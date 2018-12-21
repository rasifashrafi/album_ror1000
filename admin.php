<?php 
// error_reporting(0);
session_start();
include("connection.php");
if(!isset($_SESSION['username'])){
header("location:login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<input type="button" value="INSERT STAMP" class="homebutton" id="btnHome" 
    onClick="document.location.href='insert.php'">
<input type="button" value="logout" class="homebutton" id="btnHome" 
    onClick="document.location.href='logout.php'">
    <?php
 $query = "SELECT * FROM products";
 $data = mysqli_query($conn, $query);
 $result = mysqli_num_rows($data);
    if($result!=0){
    echo "<table border= '1'>
        <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>YEAR</th>
            <th>SIZE</th>
            <th>GLUED/NOT GLUED</th>
            <th>NO. OF STAMP</th>
            <th>PICTUE</th>
        </tr>";
    while($result = mysqli_fetch_assoc($data))
        {
        echo "<tr style='text-align:center;'>";
        echo "<td>".$result['id']."</td>";
        echo "<td>".$result['name']."</td>";
        echo "<td>".$result['year']."</td>";
        echo "<td>".$result['size']."</td>";
        echo "<td>".$result['glue']."</td>";
        echo "<td>".$result['count']."</td>";
        echo "<td><a href='$result[picture]'><img src='".$result['picture']."'height='100' width='100' /></a></td>";
        echo "<td><a href='update.php?rn=$result[id]&sn=$result[name]&cl=$result[year]&sz=$result[size]&gl=$result[glue]&cn=$result[count]&pc=$result[picture]'>Edit</td>";
        echo "<td><a href='delete.php?rn=$result[id]&sn=$result[name]&cl=$result[year]&sz=$result[size]&gl=$result[glue]&cn=$result[count]&pc=$result[picture]' onclick='return checkdelete()'>delete</td>";
        echo "</tr>";
        }
    echo "</table>";
    }


    ?>
    </body>
</html>
<script>
function checkdelete()
{
   return confirm('are u sure');
}
</script>