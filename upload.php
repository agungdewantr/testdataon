<?php 
require 'functions.php';
session_start();
if(!isset($_SESSION["login"])){
    header("location : login.php");
    exit;
}
if(isset($_POST['submit'])){



if(upload($_POST) > 0) {
    header("location: add_distributor.php");

}else {
    header("location: add_distributor.php");
} 
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catalog</title>
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
<form action="" method="post">
        <ul>
            <li><label for="name">Title: </label><input id="" type="text" name="title"></li>
            <li><label for="name">Document File: </label><input id="document_file" type="file" name="document_file"></li>
            <li><label for="name">author: </label><input id="author" type="text" name="author"></li>
      
        </ul>
        <button type="submit" name="submit">Upload</button>
    </form>

<footer><?=  date('F d, Y'); ?></footer>
</body>
</html>