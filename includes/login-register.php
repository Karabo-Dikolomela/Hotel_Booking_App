<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styles.css">
    <title>Document</title>
</head>

<body>

    <Form id="popup" class="popup" action="" method= "POST">
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
                 
                <button id="doneL" onclick="displayBooking()">Login</button>
                
                
                
            </div>
        
        </div>
    </Form>

    <form id="popup1" class="popup1" method="post">
        <div class="close-btn1">&times;</div>
        <div class="form1">
            <h2>Register</h2>

            <div class="form-element1">
                <label for="email">First Name</label>
                <input type="text" id="email" placeholder="Enter name" required>
            </div>
            <div class="form-element1">
                <label for="email">Last Name</label>
                <input type="text" id="email" placeholder="Enter Last name" required>
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
                <input type="checkbox" id="remember-me">
                <label for="remember-me">Remember me</label>
            </div>
            <div class="form-element1">
                <button id="doneR">register</button>
            </div>
        </div>
</form>

    <script src="scripts/login-register.js"></script> 
    <script src="scripts/bookingapp.js"></script>
</body>
</html>