<?php
    session_start();
$userdata = $_SESSION['userdata'];
$groupdata = $_SESSION['groupdata'];
if ($userdata['status'] == 0) {
    $status = '<b style="color:red"> Not Voted</b>';
}
else{
    $status = '<b style="color:green"> Voted</b>'; 
}
?>
<html>
<head>
    <title>voting</title>
    <link rel="stylesheet" href="../css/4.css">
</head>
<body>
<div id="main">
<div id="headersection">
    <br>
    <form action="../api/v.php"method="POST">
    <button id="logoutbtn">logout</button>
    </form>
    <h1 style="color: white;">online voting</h1>
</div>

    <hr>
    <div id="profile">
        <center><img src="../uploads/<?php echo $userdata['photo']?>"height="250"width="250"></center><br>
        <b>Name:</b><?php echo $userdata['name']?><br>
        <b>Mobile:</b><?php echo $userdata['mobile']?><br>
        <b>Address:</b><?php echo $userdata['address']?><br>
        <b>Status:</b><?php echo $status?><br>
    </div>
    <div id="group">
        <img src="../image/a.png" alt = "" style="width: 150px;float:right;">
        <div id="g1">
        <h2>Group:Republic Party </h2>
        <h3>votes:<?php echo $groupdata['status1']?></h3>
        <form action="../api/vote.php"method="POST">
             <input type="submit" name="votebtn",value="vote"id="votebtn">

        </form>

        </div>
    </div>
    <br>
    <div id="group2">
        <img src="../image/b.png" alt = "" style="width: 150px;float:right;">
        <div id="g2">
        <h2>Group:  Democratic Party </h2>
        <h3>votes:<?php echo $groupdata['status2']?></h3>
        <form action="../api/vote2.php"mehord="POST">

             <input type="submit" name="vvotebtn",value="vote"id="vvotebtn">

        </form>

        </div>
    </div>
</div>
</body>
</html> 
