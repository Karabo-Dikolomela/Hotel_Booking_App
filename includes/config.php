<?php

$dbhost = 'localhost';
$dbuser = 'Heavenly_Stay';
$dbpass = 'heavenlySTAY@1 ';
$dbname = 'registration';

$connection = mysqli_connect($dbhost, $dbuser, $dbpass);
if(!$connection ){
    die('could not connect:' .mysqli_error());
}
mysqli_select_db($connection,$dbname);

?>