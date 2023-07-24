<?php
include "connection.php";

// to read/display data from db

$sql = "SELECT * FROM user_data";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>display</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>

<div class="container">
<table class="table table-dark container ">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">name</th>
      <th scope="col">age</th>
      <th scope="col">cell</th>
      <th scope="col">operation</th>
      
    </tr>
  </thead>
  <tbody>

  <?php

if($result -> num_rows>0) {

    while ($rows= $result->fetch_assoc()) {
        
        echo "<tr>
        <td><b>". $rows['id']."</b></td>
        <td>". $rows['name']."</td>
        <td>". $rows['age']."</td>
        <td>".$rows['cell']."</td>
        <td><button class='btn btn-primary'><a class='text-light' href='update_user.php?updateid=".$rows['id']."'>Update</a></button>
<button class='btn btn-danger'><a class='text-light' href='delete_user.php?deleteid=".$rows['id']."'>Delete</a></button></td>
        </tr>";

    }
} else {
    echo '0 results';
}

?>


 
  </tbody>
</table>

<button ><a href="create_user.php">Create</a></button>

</div>
  
</body>
</html>