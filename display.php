<?php
include 'connect.php';
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>CRUD operations</title>
</head>
<body>
    <div class="container">
        <button class="btn btn-primary my-5">
            <a class= "text-light" href="add.php"> Add User </a>
        </button>
        <table class="table table-striped my-5">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Email Address</th>
                <th scope="col">Mobile Number</th>
                <th scope="col">Password</th>
                <th scope="col">Operations</th>
            </tr>
            </thead>
            <tbody>
            <?php

            $sql = "select * from `user`";
            $result = mysqli_query($con, $sql);
            if($result){
                while($row=mysqli_fetch_assoc($result)){
                    $id=$row['id'];
                    $name=$row['name'];
                    $email=$row['email'];
                    $mobile=$row['mobile'];
                    $password=$row['password'];
                    echo '
                    <tr>
                        <th scope="row">'.$id.'</th>
                        <td>'.$name.'</td>
                        <td>'.$email.'</td>
                        <td>'.$mobile.'</td>
                        <td>'.$password.'</td>
                        <td>
                        <button class ="btn btn-primary"><a class="text-light" href="update.php?updateid='.$id.'""> Update </a></button>
                        <button class ="btn btn-danger"><a class="text-light" href="delete.php?deleteid='.$id.'"> Delete </a></button>
                        </td>
                    </tr
            ';

                }
            }

            ?>
            </tbody>
        </table>
    </div>

</body>
</html>