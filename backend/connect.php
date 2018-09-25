<?php
$servername = "127.0.0.1";
$port = '5432';
$username = 'postgres';
$password = '1234'; // < In production environment long secure password is important
$dbname = 'crabberdb';

// error handle function
function exception_error_handler($errno, $errstr, $errfile, $errline ) {
    throw new ErrorException($errstr, $errno, 0, $errfile, $errline);
}
set_error_handler("exception_error_handler");

// Create connection
$conn = "host='$servername' port='$port ' dbname=$dbname user=$username password=$password";
 $dbconn = pg_connect($conn);

try {

    $conn=@pg_connect($conn);
} Catch (Exception $e) {
    Echo $e->getMessage();
}
?>