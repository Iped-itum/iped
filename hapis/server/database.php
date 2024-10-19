<?php
$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "data siswa";

$db = mysqli_connect($hostname, $username, $password, $dbname);

if(!$db){
    die("gagal konek" . mysqli_connect_error());
}
//  echo "masuk bang";