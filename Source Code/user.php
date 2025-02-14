<?php
include 'connect.php';
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $contact=$_POST['contact'];
    $address=$_POST['address'];
    $remarks=$_POST['remarks'];

    $sql="insert into `patient` (name,contact,address,remarks) values('$name','$contact','$address','$remarks')";
    $result=mysqli_query($con,$sql);
    if($result){
        header('location:display.php');
    }else{
        die(mysqli_error($con));
    }
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="user.css">
    <title>Patient Registration System</title>
</head>

<body>
    <header>
        <h1>Patient Registration</h1>
    </header>
    <div class="info">
        <button class="btn-top"><a href="display.php" class="text-light">Client</a></button>
        <button class="btn-top"><a href="login.php" class="text-light">Logout</a></button>
    </div>
    <div class="container my-5">
        <form method="post">
            <div class="form-group">
                <label>Name:</label>
                <input type="text" class="form-control" placeholder="Enter your name" name="name" autocomplete="off" required>
            </div>
            <div class="form-group">
                <label>Contact Number:</label>
                <input type="text" class="form-control" placeholder="Enter your contact number" name="contact" maxlength="11" autocomplete="off" required>
            </div>
            <div class="form-group">
                <label>Address:</label>
                <input type="text" class="form-control" placeholder="Enter your address" name="address" autocomplete="off" required>
            </div>
            <div class="form-group">
                <label>Remarks:</label>
                <input type="text" class="form-control" placeholder="Enter remarks here..." name="remarks" autocomplete="off" required>
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
    </div>
</body>

</html>