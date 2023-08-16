<?php 
session_start();
if(isset($_SESSION["Login"])){
    header("location: index.php");
    exit;
}


require 'functions.php';
if(isset($_POST["login"])){
   $user_id = $_POST["user_id"];
   $password = $_POST["password"];

   $result = mysqli_query($conn, "SELECT * FROM logins where user_id = '$user_id'");
   if(mysqli_num_rows($result) === 1){
    $row = mysqli_fetch_assoc($result);
    if(password_verify($password, $row['password'])){
        $_SESSION["login"] = true;

        header("location: index.php");
        exit;
    };
   }
   $error = true;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
   
</head>
<body>
<img src="img/logo.jpg" width="100px" alt="">
<h1 style="color :#964b00;"><i>Coffe Valley</i></h1>
<?php if(isset($error)): ?>
    <p style="color: red;">username/password salah</p>
    <?php endif ?>
<h4><i>Lorem ipsum dolor sit amet.</i></h4>
<p>Jl. Soekarno Hatta No 45 <br> Jakarta, Indonesia</p>
<form action="" method="POST">
    <table>
        <tr>
            <td><label for="">User ID </label></td>
            <td>:</td>
            <td> <input type="text" name="user_id"></td>
        </tr>
        <tr>
            <td><label for="">Password </label></td>
            <td>:</td>
            <td> <input type="password" name="password" id=""></td>
        </tr>
    </table>
    <button type="submit" name="login">Login</button>
    <br>
    
</form>
</body>
</html>