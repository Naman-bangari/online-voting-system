<?php
session_start();
include("conn.php");
include("conn2.php");
$uid = $_SESSION['userdata']['id'];
$v = $_SESSION['userdata']['status'];
$gid = $_SESSION['groupdata']['status2'];
$tgid = $gid + 1;
if ($v == 0) {
    $v = 1;
    $update_user_status = mysqli_query($connect, "UPDATE user SET status=1 WHERE id ='$uid'");
    $update_group_status = mysqli_query($connect2, "UPDATE user1 SET status2=$tgid WHERE status2 ='$gid'");
}
else 
{
    echo '
    <script>
    alert("Cant vote twice !");
    window.location="../";
    </script>
    ';
}
if($v==1)
{
    echo '
    <script>
    alert("Successfully voted !");
    window.location="../";
    </script>
    ';
}
else{
    echo '
    <script>
    alert("error")
    window.location="../inner/dash.php";
    </script>
    ';
}
?>