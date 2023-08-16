<?php 
require 'functions.php';
session_start();
if(!isset($_SESSION["login"])){
    header("location : login.php");
    exit;
}
$id = $_GET["id"];
// echo $id;
$edit = query("SELECT * FROM distributor WHERE id = $id")[0];

if(isset($_POST['submit'])){



if(edit($_POST) > 0) {
    header("location: distributors.php");

}else {
    header("location: distributors.php");
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
            <input type="hidden" name="id" value="<?=$edit['id']?>">
            <li><label for="name">Distributor Name: </label><input id="distributor_name" type="text" name="distributor_name" value="<?=$edit['distributor_name']?>"></li>
            <li><label for="name">City: </label><input id="city" type="text" name="city" value="<?=$edit['city']?>"></li>
            <li><label for="name">State Region: </label><input id="state_region" type="state_region" value="<?=$edit['state_region']?>" name="state_region"></li>
            <li><label for="name">Country: </label>
        <select name="country" id="country">
            <option value="Australia" <?php echo ($edit['country'] == 'Australia') ? 'selected' : ''; ?>>Australia</option>
            <option value="Indonesia" <?php echo ($edit['country'] == 'Indonesia') ? 'selected' : ''; ?>>Indonesia</option>
        </select>    
        </li> <li><label for="name">Phone: </label><input id="phone" type="phone" value="<?=$edit['phone']?>" name="phone"></li>
        <li><label for="name">email: </label><input id="email" type="email" value="<?=$edit['email']?>" name="email"></li>
        
        </ul>
        <button type="submit" name="submit">Edit</button>
    </form>

<footer><?=  date('F d, Y'); ?></footer>
</body>
</html>