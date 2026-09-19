<?php

$name = $_POST["name"];
$age = $_POST["age"];
$role = $_POST["role"];
$player_id = $_POST["player_id"];

include "connect.php";

$sql = "INSERT INTO `players`
        (`name`, `age`, `role`, `player_id`) 
        VALUES 
        ('$name','$age','$role','$player_id')";

$result = mysqli_query($con, $sql);

if(!$result){
    echo "Error";
}else{
    header("location: ../index.php");
    exit;
}