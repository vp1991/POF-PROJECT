<?php
$serverName="localhost";
$dBUername="root";
$dBPassword="";
$dBName="p1n";
$conn = mysqli_connect($serverName,$dBUername,$dBPassword,$dBName);
if(!$conn)
{
    die("Connection Failed: " . mysqli_connect_error());
}