<?php

error_reporting(0);
include "database.php";
echo "<br>";
$image = move_uploaded_file($_FILES["image"]["tmp_name"],'a/'. $_FILES["image"]["name"]);
echo $img = $_FILES["image"]["name"];

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    echo "<br>";
    echo $username = $_POST['username'];
    echo $email = $_POST['email'];
    echo $password = $_POST['password'];

    $data = mysqli_query($conn, "INSERT INTO `register`(`username`, `email`, `password`, `image`) VALUES ('[$username]','[$email]','[$password]','[$img]')");
    if(isset($data))
    {
        header("location: login.php");
    }

}
?>


















<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body class="bg-light">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card-body">
                    <h2 class="text-center mb-4">REGISTER</h2>
                    <form method="POST" action="" enctype="multipart/form-data">
                    <div class="mb-3">
                            <label for="image" class="form-label">Image:</label>
                            <input type="file" name="image" id="image" class="form-control" required>
</div>
                        <div class="mb-3">
                            <label for="username" class="form-label">Username:</label>
                            <input type="text" name="username" id="username" class="form-control" required>
</div>
<div class="mb-3">
                            <label for="email" class="form-label">E-Mail:</label>
                            <input type="email" name="email" id="email" class="form-control" required>
</div>
<div class="mb-3">
                            <label for="password" class="form-label">Password:</label>
                            <input type="password" name="password" id="password" class="form-control" required>
</div>
<div class="text-center">
    <button type="submit" class="btn btn-primary">Register</button>
</div>
</form>
</div>
</div>
</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>



    
</body>
</html>