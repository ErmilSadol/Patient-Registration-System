<?php
include 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Client Information System</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="display.css">
</head>
<body>
    <header>
        <h1>Patient Information</h1>
    </header>
    <div class="container">
        <button class="btn btn-primary my-5"><a href="user.php" class="text-light">Register Patient</a></button>
        <table class="table">
        <button class="btn btn-primary my-5">
    <a href="search.php" class="text-light">Search Patients</a>
</button>
  <thead class="thead-dark">
    <tr>
      <th scope="col">Hospital ID</th>
      <th scope="col">Name</th>
      <th scope="col">Contact Number</th>
      <th scope="col">Address</th>
      <th scope="col">Remarks</th>
      <th scope="col">Modify</th>
    </tr>
  </thead>
  <tbody>

  <?php

    $sql="Select * from `patient`";
    $result=mysqli_query($con,$sql);
    if($result){
        while($row=mysqli_fetch_assoc($result)){
            $id=$row['id'];
            $name=$row['name'];
            $contact=$row['contact'];
            $address=$row['address'];
            $remarks=$row['remarks'];
            echo '<tr>
            <th scope="row">'.$id.'</th>
            <td>'.$name.'</td>
            <td>'.$contact.'</td>
            <td>'.$address.'</td>
            <td>'.$remarks.'</td>
            <td>
            <button class="btn btn-primary"><a href="edit.php?editid='.$id.'" class="text-light">Edit</a></button>
            <button class="btn btn-danger"><a href="delete.php?deleteid='.$id.'" class="text-light">Delete</a></button>
            </td>
          </tr>';
        }
    }

  ?>
   
  </tbody>
</table>
    </div>
</body>
</html>