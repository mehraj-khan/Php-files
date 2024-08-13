<?php 
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
    <input type="text" name="name" placeholder="enter name">
    <?php 
    if(isset($_SESSION['name'])){
        ?>
        <span style="color: red;"><?php echo $_SESSION['name'] ?></span>
        <?php
    }
    ?>
    <br><br>
    <input type="number" placeholder="enter phone number" name="num">
    <?php
    if(isset($_SESSION['num'])){
        ?>
        <span style="color: red;"><?php echo $_SESSION['num']; ?></span>
        <?php
    }
    ?>
    <br><br>
    <input type="text" placeholder="bike-brand / Model" name="model">
    <?php
    if (isset($_SESSION['model'])) {
        ?>
        <span style="color: red;"><?php echo $_SESSION['model'] ?></span>
        <?php 
    }
    ?>
    <br><br>

    <input type="text" placeholder="issue / service" name="service">
    <?php 
    if (isset($_SESSION['service'])) {
        ?>
        <span style="color: red;"><?php echo $_SESSION['service'] ?></span>
        <?php 
    }
    ?>
    <br><br>
    <input type="text" placeholder="address" name="address">
    <?php 
    if (isset($_SESSION['address'])) {
        ?>
        <span style="color: red;"><?php echo $_SESSION['address'] ?></span>
        <?php 
    }
    ?>
    <br><br>
    <select name="select"> 
        <option >Sindh</option>
        <option >balochistan</option>
        <option >KPK</option>
        <option >Punjab</option>
    </select>
    <?php 
if(isset($_SESSION['select'])){
    ?>
    <span style="color: red;"><?php echo $_SESSION['select'];?> </span>
    <?php
}
?>

 <br><br>
 <input type="submit" name="submit" value="submit">
    </form>
</body>
</html>