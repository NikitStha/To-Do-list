<?php 
include 'db.php';
$id = $_GET['id'];
$sql = "UPDATE xyz SET completed = NOT completed WHERE id = $id";
mysqli_query($conn, $sql);
header('Location: index.php');
?>