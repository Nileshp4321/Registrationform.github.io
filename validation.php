<?php
session_start();
$conn=mysqli_connect("localhost","nileshp","1234");

$username=$_POST['username'];
$password=$_POST['password'];
mysqli_select_db($conn,"loginDB");
$sql="SELECT*FROM USER WHERE USERNAME='$username' && PASSWORD='$password'";
$result=mysqli_query($conn,$sql);
$row=mysqli_num_rows($result);
if($row==1)
{
    $_SESSION['username']=$username;
   header('location:http://localhost/web/login/home.php');
}
else
{
    header('location:http://localhost/web/login/login.php');
}

?>