<?php
session_start();
$con = mysqli_connect('localhost','root','','first');
?>

<?php
// if(isset($_POST['submit'])){
//     $email = $_POST['email'];
//     $pass = $_POST['pass'];
//     if($pass != '' && $email != ''){
//         mysqli_query($con , "INSERT INTO `pr`(`email`, `password`) VALUES ('$email','$pass')");
//         $_SESSION['success'] = "your form submitted successfully";
//         header("location:index.php");
//     }else{
//         $_SESSION['pass']= "password field is required";
//         $_SESSION['email']= "email is required";
//         $msg = "your email and password is null";
//         header("location:index.php?$msg");
//     }
// }

// if(isset($_POST['submit'])){
//     $name = $_POST['name'];
//     $num = $_POST['num'];
//     $model = $_POST['model'];
//     $service = $_POST['service'];
//     $address = $_POST['address'];
//     $selcet = $_POST['selcet'];

//     if($name != '' &&
//  $num != '' && $model != '' && $service != '' && $address != '' && $selcet != ''){
//         mysqli_query($con, "INSERT INTO `practice`(`name`, `number`, `brand`, `service`, `address`, `city`) VALUES ('$name','$num','$model','$service','$address','$selcet')");
//         $_SESSION['success'] = "your form submitted successfully";
//         header("location:task.php");
//     }else{
//         $_SESSION['name']= "name field is required";
//         $_SESSION['num']= "number field is required";
//         $_SESSION['model'] = "model field is required";
//         $_SESSION['service'] = "service field is required";
//         $_SESSION['address'] = "address field is required";
//         $_SESSION['selcet'] = "city field is required";
//         $msg = "your name and number and model and service and address and city is null";
//         header("location:task.php?$msg");
//     }


// }



if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $num = $_POST['num'];
    $model = $_POST['model'];
    $ser = $_POST['service'];
    $add = $_POST['address'];
    $sel = $_POST['select'];
    if($name != '' && $num != '' && $model != '' && $ser != '' && $add != '' && $sel != ''){
        mysqli_query($con , "INSERT INTO `practice`(`name`, `number`, `brand`, `service`, `address`, `city`) VALUES ('$name','$num','$model','$ser','$add','$sel')");
        $_SESSION['success']= "your form is submitted";
        header("location: task.php");
    }else{
        $_SESSION['name']= "your name is required";
        $_SESSION['num']= "number is required";
        $_SESSION['model'] = "model is required";
        $_SESSION['service']= "service is required";
        $_SESSION['address']= "address is required";
        $_SESSION['select']= " city  is required";
        $msg = "your form is not submitted plz filled correct";
        header("location:task.php?$msg");
    }
    // if($name != '' && $num != '' && $model != '' && $ser != '' && $add != '' && $sel != ''){
    // mysqli_connect($con,"INSERT INTO `practice`(`name`, `number`, `brand`, `service`, `address`, `city`) VALUES ('$name','$num','$model','$ser','$add','$sel')");
    // $_SESSION['success']= "your form submitted successfully";
    // header("location:task.php")
    // }
}
?>