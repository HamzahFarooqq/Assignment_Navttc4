<?php 
include "connection.php";

// to insert data in DB

if(isset($_POST['submit'])) {
$name = $_POST["name"];
$age = $_POST["age"];
$cell = $_POST["cell"];



// $sql = "INSERT INTO user_data(name, age, cell)
//         VALUES('$name','$age','$cell')";

$stmt = $conn->prepare ("INSERT INTO user_data(name, age, cell)
VALUES(?,?,?)");

$stmt->bind_param('sii',$name, $age, $cell);
$stmt->execute();

// echo 'new record saved';
header('location:read_user.php');
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
    <input type="text" name="name"><br>
    <label for="">age</label><br>
    <input type="number" name="age"><br>
    <label for="">cell</label><br>
    <input type="number" name="cell"><br>
    <button name='submit'>submit</button>

</form>
    
</body>
</html>