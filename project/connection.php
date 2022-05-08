<?php 
$servername = 'localhost';
$dbname='testdb';
$username='root';

$conn = mysqli_connect($servername,$username, '');
if(mysqli_error($conn)){
    echo 'An Error occured while connection to database';
}
