<?php 

require('connection.php');

if(isset($_SESSION['USER_LOGIN']) && $_SESSION['USER_LOGIN']!= '' )
//preventing URL manipulation to enter any page directly
{

}
else
{
    header('location:index.php');
    die();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        /* Add a black background color to the top navigation */
.topnav {
  background-color: #333;
  overflow: hidden;
}

/* Style the links inside the navigation bar */
.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

/* Change the color of links on hover */
.topnav a:hover {
  background-color: #ddd;
  color: black;
}

/* Add a color to the active/current link */
.topnav a.active {
  background-color: #04AA6D;
  color: white;
}
    </style>
  
</head>

<body>
<div class="topnav">
     <a  href="category.php">Categories of product</a>
     <a  href="products.php">Products Showcase</a>
     <a  href="logout.php">Logout</a>

  
</div>
</body>
</html>