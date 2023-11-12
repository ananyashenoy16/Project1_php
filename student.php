<?php
session_start();
if(!isset($_SESSION['username'])){
    header('location:index.html');
}

 ?>  
   
   <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .btn{
            border:3px;
            color:white;
            background-color:#fff;
        }
    </style>
</head>
<body>
    <h1>
        Welcomeeeeee dear Student
        <?php echo $_SESSION['username'];
        ?>
        <button class="btn">
            <a href="logout.php">Logout</a>
        </button>

    </h1>
</body>
</html>