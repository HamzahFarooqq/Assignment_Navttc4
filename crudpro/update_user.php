<?php 
include 'connection.php';
$id = $_GET['updateid'];

$sql = "SELECT * FROM user_data WHERE id=$id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

$name= $row['name'];
$age= $row['age'];
$cell= $row['cell'];



if($_SERVER['REQUEST_METHOD']== 'POST') {
    $name = $_POST["name"];
    $age = $_POST["age"];
    $cell = $_POST["cell"];


$sql = "UPDATE user_data SET name='$name', age=$age, cell=$cell WHERE id=$id";
$result = $conn->query($sql);

if($result) {
    header ('location:read_user.php');
    
} else {
    die(mysqli_error($conn));
}

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user</title>
</head>

<body>

<form action="" method="POST">
    <label for="">name</label><br>
    <input type="text" name="name" value=<?php echo $name ?>><br>
    <label for="">age</label><br>
    <input type="number" name="age" value=<?php echo $age ?>><br>
    <label for="">cell</label><br>
    <input type="number" name="cell" value=<?php echo $cell ?>><br>
    <button name="update">Update</button>

</form>
    
</body>
</html>