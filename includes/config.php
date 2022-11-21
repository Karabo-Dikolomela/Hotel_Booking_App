<?php

$dbhost = 'localhost';
$dbuser = 'Heavenly_Stay';
$dbpass = 'heavenlySTAY@1 ';
$dbname = 'registration';

$connect = new mysqli($dbhost, $dbuser, $dbpass);

if(!$connect){
    die('could not connect:' .mysqli_error($connect));
}
mysqli_select_db($connect,$dbname);

?>