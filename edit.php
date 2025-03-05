<body>
    <header>
        <h1> <center> EASY APP <center> </h1>
    </header>
    <h2> Update Task </h2>
    <?php  
    include 'db.php';
    $id = $_GET['id'];
    $sql = "SELECT * FROM xyz WHERE id = '$id'";
    $result = mysqli_query($conn, $sql);
    if($result){
        $row = mysqli_fetch_assoc($result);
        $taskname = $row['task'];
    }
    ?>
    <form action="editaction.php" method="post">
        <div class="main">
            <label for="task"> Task: </label><br>
            <input type="text" name="task" id="task" value = "<?php echo $taskname ?>" required><br><br>
            <input type="hidden" name="id" id="id" value ="<?php echo $id ?>" required><br><br>
            <input type="submit" value="Update">
        </div>
    </form>
</body>
</html>