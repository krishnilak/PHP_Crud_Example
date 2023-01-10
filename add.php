<?php
include 'connect.php';
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $password=$_POST['password'];


    $sql= "insert into `user` (name, email, mobile, password) values ('$name','$email','$mobile','$password')";
    $result=mysqli_query($con, $sql);
    if($result){
        header('location:display.php');
    }else{
        die($mysqli_error($con));
    }
}
?>



<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>CRUD operations</title>
</head>
<body>
    <div class="container my-5">
        <form method="POST">
            <div class="mb-3">
                <label>Name</label>
                <input type="text" class="form-control" placeholder="Enter the Name" name="name" autocomplete="off">
            </div>
            <div class="mb-3">
                <label>Email Address</label>
                <input type="email" class="form-control" placeholder="Enter the Email Address" name="email" autocomplete="off">
            </div>
            <div class="mb-3">
                <label>Mobile Number</label>
                <input type="text" class="form-control" placeholder="Enter the Mobile Number" name="mobile" autocomplete="off">
            </div>
            <div class="mb-3">
                <label>Password</label>
                <input type="text" class="form-control" placeholder="Enter a Password" name="password" autocomplete="off">
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>

    </div>
</body>
</html>