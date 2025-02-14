<?php
include 'connect.php';
$id=$_GET['editid'];
$sql="Select * from `patient` where id=$id";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$name=$row['name'];
$contact=$row['contact'];
$address=$row['address'];
$remarks=$row['remarks'];

if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $contact=$_POST['contact'];
    $address=$_POST['address'];
    $remarks=$_POST['remarks'];

    $sql="update `patient` set id=$id,name='$name',contact='$contact',address='$address',remarks='$remarks' where id=$id";
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

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="edit.css">
    <title>Client Information System</title>
</head>

<body>
    <header>
        <h1>Update Patient Information</h1>
    </header>
    <div class="container my-5">
        <form method="post">
            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" placeholder="Enter your name" name="name" autocomplete="off" value="<?php echo $name;?>">
            </div>
            <div class="form-group">
                <label>Contact Number</label>
                <input type="text" class="form-control" placeholder="Enter your contact number" name="contact" autocomplete="off" value="<?php echo $contact;?>">
            </div>
            <div class="form-group">
                <label>Address</label>
                <input type="text" class="form-control" placeholder="Enter your address" name="address" autocomplete="off" value="<?php echo $address;?>">
            </div>
            <div class="form-group">
                <label>Remarks</label>
                <input type="text" class="form-control" placeholder="Enter your remarks here..." name="remarks" autocomplete="off" value="<?php echo $remarks;?>">
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Update</button>
        </form>
    </div>
</body>

</html>