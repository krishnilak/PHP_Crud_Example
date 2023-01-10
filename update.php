<?php
include 'connect.php';
if(isset($_GET['updateid'])) {
    $id = $_GET['updateid'];

    $sql="select * from `user` where id=$id";
    $result=mysqli_query($con,$sql);
    $row=mysqli_fetch_assoc($result);
    $name=$row['name'];
    $email=$row['email'];
    $mobile=$row['mobile'];
    $password=$row['password'];

    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];
        $password = $_POST['password'];

        $sql = "update `user` set id=$id, name='$name', email='$email', mobile='$mobile', password='$password' where id=$id";
        $result = mysqli_query($con, $sql);
        if ($result) {
            header('location:display.php');
        } else {
            die($mysqli_error($con));
        }
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
            <input type="text" class="form-control" placeholder="Enter the Name" name="name" autocomplete="off" value="<?php echo $name; ?>">
        </div>
        <div class="mb-3">
            <label>Email Address</label>
            <input type="email" class="form-control" placeholder="Enter the Email Address" name="email" autocomplete="off" value="<?php echo $email; ?>" >
        </div>
        <div class="mb-3">
            <label>Mobile Number</label>
            <input type="text" class="form-control" placeholder="Enter the Mobile Number" name="mobile" autocomplete="off" value="<?php echo $mobile; ?>">
        </div>
        <div class="mb-3">
            <label>Password</label>
            <input type="text" class="form-control" placeholder="Enter a Password" name="password" autocomplete="off" value="<?php echo $password; ?>">
        </div>
        <button type="submit" class="btn btn-primary" name="submit">Update</button>
    </form>

</div>
</body>
</html>