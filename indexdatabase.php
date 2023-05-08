<?php
$servername='localhost';
$username='root';
$password='';
$database='e-commerce';
$conn=mysqli_connect($servername,$username,$password,$database);
if(isset($_POST['send'])){
    $username=$_POST['name'];
    $email=$_POST['mail'];
    $mobile=$_POST['num'];
    $address=$_POST['add'];
    $password=$_POST['pass'];
    $repassword=$_POST['repass'];
    $suggestion=$_POST['area'];
$sql="INSERT INTO `registration` VALUES('$username','$email','$mobile','$address','$password','$repassword','suggestion')";
if(mysqli_query($conn,$sql)){
    header("Location:login.php");
}
else{
    echo"You are not Successfully Registered".mysqli_error($conn);
}
mysqli_close($conn);
}
?>