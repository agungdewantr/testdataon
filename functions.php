<?php 
$conn = mysqli_connect('localhost', 'root','','test_dataon');

function query($query){
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while($row = mysqli_fetch_assoc($result)){
        $rows[] = $row; 
    }
    return $rows;
}

function add($data){
    global $conn;
    
$distributor_name = htmlspecialchars($data['distributor_name']);
$city = htmlspecialchars($data['city']);
$state_region = htmlspecialchars($data['state_region']);
$country = htmlspecialchars($data['country']);
$phone = htmlspecialchars($data['phone']);
$email = htmlspecialchars($data['email']);

$query = "INSERT INTO distributor VALUES ('','$distributor_name','$city','$state_region','$country','$phone','$email')";
mysqli_query($conn, $query);
return mysqli_affected_rows($conn);
}

function edit($data){
    global $conn;
    $id = $data['id'];
$distributor_name = htmlspecialchars($data['distributor_name']);
$city = htmlspecialchars($data['city']);
$state_region = htmlspecialchars($data['state_region']);
$country = htmlspecialchars($data['country']);
$phone = htmlspecialchars($data['phone']);
$email = htmlspecialchars($data['email']);
$query = "UPDATE distributor SET distributor_name = '$distributor_name', city = '$city',state_region = '$state_region', country ='$country', phone = '$phone', email ='$email' where id = '$id'";
mysqli_query($conn, $query);
return mysqli_affected_rows($conn);
}

function upload($data){
    global $conn;
    
$title = htmlspecialchars($data['title']);
$document_file = $data['document_file'];
$author = htmlspecialchars($data['author']);
// $name_file    = $_FILES[$document_file]['name'];
$query = "INSERT INTO upload VALUES ('','$title','$document_file','$author')";
mysqli_query($conn, $query);
return mysqli_affected_rows($conn);
}
?>