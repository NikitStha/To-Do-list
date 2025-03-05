<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>To Do List</title>
</head>
<body>
    <header>
        <h1> EASY APP </h1>
    </header>
    
    <form action="adddata.php" method="post">
        <div class="main">
            <label for="task"> Task: </label><br>
            <input type="text" name="task" id="task" required><br><br>
            <input type="submit" value="Save">
        </div>
    </form>
    
    <hr color="Blue">
    <h2> List of Tasks </h2>
    <table>
        <tr>
            <th> Task</th>
            <th> Status</th>
            <th> Action</th>
        </tr>
        
        <?php
        include 'db.php';
        $sql = "SELECT * FROM xyz;";
        $result = mysqli_query($conn, $sql);
        
        if($result){
            while($row = mysqli_fetch_assoc($result)){
                $id = $row['id'];
                $task = $row['task'];
                $completed = $row['completed'] ? 'Completed' : 'Pending';
        ?>
        <tr>
            <td><?php echo $task ?></td>
            <td><?php echo $completed ?></td>
            <td>
                <a href="edit.php?id=<?php echo $id; ?>"> Update</a>
                <a href="delete.php?id=<?php echo $id; ?>"> Delete</a>
                <a href="toggle.php?id=<?php echo $id; ?>"> Toggle Status</a>
            </td>
        </tr>
        <?php 
            }
        }
        ?>
    </table>
</body>
</html>