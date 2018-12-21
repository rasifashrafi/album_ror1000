<?php
include("connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Document</title>
</head>
<body>
<div id="top_bar">
    <ul>
        <li><h1>STAMP COLECTOR</h1></li>
        <li>
            <img style="height: 10vh; width: 10vw" src="./images/logo.png" alt="logo">
        </li>
        <input style="float:right;" type="button" value="LOGIN" class="homebutton" id="btnHome" onClick="Javascript:window.location.href = 'admin.php';" />
        <li style="float:right;">
            FOLOW US ON: <br>
                <span>
                <a href="www.facebook.com"><img style="height: 2.5vh; width: 2.5vw; border-radius: 50%;" src="./images/fb.png" alt="FACEBOOK"></a>
                <a href="www.twiter.com"><img style="height: 2.5vh; width: 2.5vw;border-radius: 50%;" src="./images/twitwer.png" alt="TWITER"></a>
                <a href="www.instragram.com"><img style="height: 2.5vh; width: 2.5vw;border-radius: 50%;" src="./images/instragram'.png" alt="INSTRAGRAM"></a>
                </span>
        </li>
    </ul>
</div>
<!-- drop down category manu -->
<!-- <div id="category-search">
<select id="country-selector">
    <optgroup label="COUNTRY">
       <option value="usa">USA</option>
       <option value="bangladesh">BANGLADESH</option>
       <option value="australia">AUSTRALIA</option>
       <option value="england">ENGLAND</option>
    </optgroup>
</select>
<div id="search-container">
        <form action="/action_page.php">
          <input type="text" placeholder="Search.." name="search">
          <button type="submit">Submit</button>
        </form>
      </div>
</div> -->
<!-- nav bar -->
<div id="nav-bar">
    <ul id="nav-list">
        <li><a href="../index.php">HOME</a></li>
        <li><a href="year.php">YEAR</a></li>
        <li><a href="glued.php">GLUED</a></li>
        <li><a href="notglued.php">NOT GLUED</a></li>
        <li><a href="count.php">COUNT</a></li>
    </ul>
</div>
<?php
 $query = "SELECT * FROM products ORDER BY year";
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
        echo "</tr>";
        }
    echo "</table>";
    }
?>
</body>
</html>