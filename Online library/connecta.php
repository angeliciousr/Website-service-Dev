<?php
$conn =mysqli_connect ('localhost', 'root', '', 'admins');
if(!$conn){
    die(mysqli_error("Error"+$conn));
}

?>