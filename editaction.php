<?php
include 'db.php';
$id = $_POST['id'];
$task = $_POST['task'];
$sql = "UPDATE xyz SET task = '$task' WHERE id = '$id';";
$result = mysqli_query($conn, $sql);
if($result){
    header('location:index.php');
}
?>
