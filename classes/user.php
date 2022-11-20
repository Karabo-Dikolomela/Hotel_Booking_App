<?php

$_SESSION['name'] = $_POST['name'];
$_SESSION['surname'] = $_POST['surname'];
$_SESSION['email'] = $_POST['email'];
$_SESSION['password'] = $_POST['password'];

class Customer {
    private $name;
    private $surname;
    private $email;


public function __construct($name, $surname, $email, $password) {
    $this->name = $name;
    $this->surname = $surname;
    $this->email = $email;
    $this->password = $password;
}


public function getName() {
    return $this->name;
}

public function getSurname() {
    return $this->surname;
}

public function getemailAddress() {
    return $this->email;
}

public function getpassword() {
    return $this->password;
}
}

if ($_POST['name'] === '' || $_POST['surname'] === '' || $_POST['email'] === ''
|| $_POST['password'] === '') {
  header('location: ./bookingForm.php?error=emptyinput#booking-form');
    exit();
}


if (is_numeric($_POST['name']) || is_numeric($_POST['surname']) || is_numeric($_POST['email'])) {
  header('location: ./bookingForm.php?error=notnumber#booking-form');
  exit();
}

else {
   $customer = new Customer($_SESSION['name'], $_SESSION['surname'], $_SESSION['email'], $_SESSION['password']); 
}