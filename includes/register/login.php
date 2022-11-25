<?php
require("./includes/register/config.php");

if(isset($_POST["submit"])){
    $usernameemail = $_POST["usernameemail"];
    $password = $_POST["password"];
    $result = mysqli_query($conn, "SELECT * FROM tb_user WHERE username = '$usernameemail' OR email = '$usernameemail'");
    $row = mysqli_fetch_assoc($result);
    if(mysqli_num_rows($result) > 0){
        if($password == $row["password"]){
            $_SESSION["login"] = true;
            $_SESSION["id"] = $row["id"];
            header("Location: index.php");
        }
        else{
            echo
            "<script> alert('Wrong Password'); </script>";
        }
    }
    else{
        echo
        "<script> alert('User Not Registered'); </script>";
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
    <title>Login</title>
</head>
<body>

<Form id="popup" class="popup" action="" method="POST" autocomplete="off">
        <div class="close-btn">&times;</div>
        <div class="form">
            <h2>Login</h2>
            <div class="form-element">
                <label for="email">Email</label>
                <input type="text" id="email" placeholder="Enter email" required>
            </div>
            <div class="form-element">
                <label for="password">Password</label>
                <input type="password" id="password" placeholder="Enter password" required>
            </div>
            <div class="form-element">
                <input type="checkbox" id="remember-me">
                <label for="remember-me">Remember me</label>
            </div>
            <div class="form-element">

                <button type="submit" name="submit" id="doneL" onclick="displayBooking()">Login</button>
                <a href="index.php">Booking Form</a>



            </div>

        </div>
    </Form>
   
</body>
</html>