<?php
require("./includes/register/config.php");
if(isset($POST["submit"])){

    $name = $_POST["name"];
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirmpassword = $_POST["confirmpassword"];
    $duplicate = mysqli_query($conn, "SELECT * FROM tb_user WHERE username = '$username' OR email = '$email'");
    if(mysqli_num_rows($duplicate) > 0){
        echo
        "<script> alert('Username or Email already exists'); </script>";
    }
    else {
        if($password == $confirmpassword){
            $query = "INSERT INTO tb_user VALUES('', '$name', '$username', '$email', '$password')";
            mysqli_query($conn,$query);
            echo
            "<script> alert('Registration Successful'); </script>";
        }
        else{
            echo
            "<script> alert('Password does not match'); </script>";
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Arimo&family=Crimson+Text&display=swap" rel="stylesheet">
    <title>Register</title>


</head>
<body>

<form id="popup1" class="popup1" method="post" autocomplete="off">
        <div class="close-btn1">&times;</div>
        <div class="form1">
            <h2>Register</h2>
            <div class="form-element1">
                <label for="name">Name</label>
                <input type="text" id="name" placeholder="Enter name" required>
            </div>
            <div class="form-element1">
                <label for="username">Username</label>
                <input type="text" id="username" placeholder="Enter Last name" required>
            </div>
            <div class="form-element1">
                <label for="email">Email</label>
                <input type="text" id="email" placeholder="Enter email">
            </div>
            <div class="form-element1">
                <label for="password">Password</label>
                <input type="password" id="password" placeholder="Enter password">
            </div>
            <div class="form-element1">
                <label for="confirmpassword">Confirm Password</label>
                <input type="password" id="confirmpassword" placeholder="Confirm password">
            </div>
            <div class="form-element1">
                <input type="checkbox" id="remember-me">
                <label for="remember-me">Remember me</label>
            </div>
            <div class="form-element1">
                <button type="submit" name="submit" id="doneR">register</button>
            </div>
        </div>
    </form>
    <br>
    <a href="login.php">Login</a>
    
</body>
</html>