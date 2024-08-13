<?php 
// include 'file.php';
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="file.php" method="post">
        <input type="email" name="email" placeholder="email"><br>
        <?php 
        if (isset($_SESSION['email'])){
            ?>
            <span style="color: red;"><?php echo $_SESSION['email']; ?></span>
            <?php
        }
        ?>
        <br><br>

        <input type="password" name="pass" placeholder="password" ><br>
        <?php
        if (isset($_SESSION['pass'])) {
            ?>
            <span style="color: red;"><?php echo $_SESSION['pass']; ?></span>
          <?php
            }
         ?>
         <br><br>
         <input type="submit" name="submit" value="submit">
    </form>
</body>
</html>