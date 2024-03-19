<?php
$conn =mysqli_connect ('localhost', 'root', '', 'programmers');
if(!$conn){
    die(mysqli_error("Error"+$conn));
}

?>