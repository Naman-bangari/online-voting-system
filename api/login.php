<?php
session_start();
include("conn.php");
include("conn2.php");
$mobile = $_POST['mobile'];
$password=$_POST['password'];
$gender = $_POST['gender'];
$y = 123;
$check = mysqli_query($connect, "SELECT * FROM user WHERE mobile='$mobile' AND password='$password'AND gender='$gender'");
if(mysqli_num_rows($check)>0)
{
    $userdata = mysqli_fetch_array($check);
    $groups = mysqli_query($connect2, "SELECT *FROM user1 WHERE status3='$y'");
    $groupdata = mysqli_fetch_array($groups);
    
    $_SESSION['userdata'] = $userdata;
    $_SESSION['groupdata'] = $groupdata;
    echo '
    <script>
     window.location="../inner/dash.php";
     </script>
    ';
    
}   
else
{
    echo '
    <script>
     alert("invalid credentials !");
     window.location="../";
     </script>
    ';
}
?>