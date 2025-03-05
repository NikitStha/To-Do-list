<?php 
include 'db.php';
$task = $_POST['task'];
$sql = "INSERT INTO xyz (task, completed) VALUES ('$task', 0)";
$result = mysqli_query($conn, $sql);
if($result){
    header('Location: index.php');
}
?>