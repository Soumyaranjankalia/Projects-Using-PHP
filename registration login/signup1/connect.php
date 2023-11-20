<?php
$HOSTNAME='localhost';
$USERNAME='root';
$PASSWORD='Soumya12@';
$DATABASE='signupforms';

$con=mysqli_connect($HOSTNAME,$USERNAME,$PASSWORD,$DATABASE);

if(!$con){
    echo "Not connected";
}
?>