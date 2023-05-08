<?php
$servername='localhost';
$username='root';
$password='';
$database='e-commerce';
$conn=mysqli_connect($servername,$username,$password,$database);
if(isset($_POST['send'])){
$mail=$_POST['mail'];
$pass=$_POST['passw'];

$sql="SELECT * from registration where Email='".$mail."' AND Password='".$pass."'limit 1";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)==1){
    // echo"<script>alert('You Are Successfully Login')</script>";
    header("location:main.php");
}
else{
    echo"<script>alert('You are not login Successfully')</script>".mysqli_error($conn);
    // header('location:loginhtml.php');
}
mysqli_close($conn);
}
?>