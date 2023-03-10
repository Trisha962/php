<?php
$servername:"localhost";
$username:"root";
$password:" ";
$dbname:"music_registration";

$con=mysqli_connect($servername,$username,$password,$dbname);
if($con){

}
else{
    echo"connectionFailed";
    
}