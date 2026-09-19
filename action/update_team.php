<?php

$name = $_POST["name"];
$age = $_POST["age"];
$role = $_POST["role"];
$player_id = $_POST['player_id'];

include "connect.php";

$sql = "UPDATE `players` 
        SET
        `name`='$name',
        `age`='$age',
        `role`='$role'
        WHERE player_id = '$player_id' ";

        echo $sql;

$result = mysqli_query($con, $sql);

if(!$result){
    echo "Error";
}else{
    header("location: ../manage_team.php");
    exit;
}