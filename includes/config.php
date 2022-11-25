<?php

define('DB_NAME','registration');
define('DB_USER','Heavenly_Stay');
define('DB_PASSWORD','heavenlySTAY@1');
define('DB_HOST','localhost');

$connection = @mysqli_connect(DB_HOST,DB_USER, DB_PASSWORD, DB_NAME );

if(!$connection){
    die('Could not connect: '.mysqli_connect_error());
}

// $dbhost = 'localhost';
// $dbuser = 'Heavenly_Stay';
// $dbpass = 'heavenlySTAY@1 ';
// $dbname = 'registration';

// $connection = mysqli_connect($dbhost, $dbuser, $dbpass);

// if(!$connection ){
//     die('could not connect:' .mysqli_error());
// }
// mysqli_select_db($connection,$dbname);

?>