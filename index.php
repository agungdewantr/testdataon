<?php 
require 'functions.php';
session_start();
if(!isset($_SESSION["login"])){
    header("location : login.php");
    exit;
}

$bean = query('SELECT beans.id, beans.bean_name, beans.description, daily_bean.sale_price
FROM beans
INNER JOIN daily_bean ON beans.id=daily_bean.id_bean;')[0];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <a href="logout.php">Logout</a> <br>
    <img src="img/logo.jpg" width="100px" alt="">
<h1 style="color :#964b00;"><i>Coffe Valley</i></h1>
<h4><i>Lorem ipsum dolor sit amet.</i></h4>
<p>Jl. Soekarno Hatta No 45 <br> Jakarta, Indonesia</p>
<header>
<table>
    <tr style="background-color: red; ">
        <td><a href="index.php">Home</a></td>
        <td><a href="catalog.php">Catalog</a></td>
        <td><a href="odrer_status.php">Order Status</a></td>
        <td><a href="distributors.php">Disributors</a></td>
        <td><a href="upload.php">Upload</a></td>
        <td><a href="logout.php">Logout</a> <br></td>
    </tr>
</table>
</header>
<h4>Bean of The Day</h4>
<p><?= $bean['bean_name']; ?></p>
<h4>Sale Price</h4>
<p>$ <?= $bean['sale_price']; ?></p>
<h4>Description</h4>
<p><?= $bean['description']; ?></p>
<footer><?= date('F d, Y'); ?></footer>
</body>
</html>