<?php
/**
 * Created by PhpStorm.
 * User: Aravinth
 * Date: 10-09-2017
 * Time: 12:34 PM
 */

$hostname = 'localhost';
$username = 'root';
$password = '';
$dbname = 'web_1';

$con = mysqli_connect($hostname,$username,$password);
mysqli_select_db($con,$dbname);
mysqli_set_charset($con, 'UTF8');
?>
