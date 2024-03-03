<?php
// session_start();
$host = 'localhost';
$username = 'root';
$password = '';
$dataname = 'online_voting_system';

$dbcon = mysqli_connect($host, $username, $password, $dataname);

if (mysqli_connect_errno()) {
    echo "database not connected \n" . mysqli_connect_error() . "\n";
    die();
}
