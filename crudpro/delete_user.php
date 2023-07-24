<?php 
include 'connection.php';

$id = $_GET['deleteid'];

$sql = "DELETE FROM user_data WHERE id= $id";
$result = $conn->query($sql);

if($result) {
    header ('location:read_user.php');
} else {
    die(mysqli_error($conn));
}




?>