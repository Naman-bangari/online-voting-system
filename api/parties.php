<?php
include("conn2.php");
$insert = mysqli_query($connect2, "INSERT INTO user1 ( status1,status2,status3) VALUES (0,0,123)");
if($insert){
    echo '
   "yup"
  ';

}
else{
    echo '"no"';
}
?>