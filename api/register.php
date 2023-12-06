<?php
    include("conn.php");
    $name = $_POST['name'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    $address = $_POST['address'];
    $image = $_FILES['photo']['name'];
    $tmp_name = $_FILES['photo']['tmp_name'];
    $gender = $_POST['gender'];
    if($name=='')
    {
        echo '
            <script>
            alert("name required !");
            window.location= "../inner/1.html";
            </script>
           ';
    }
    else if($mobile=='')
    {
        echo '
            <script>
            alert("mobile number required !");
            window.location= "../inner/1.html";
            </script>
           ';
    }
    else if($address=='')
    {
        echo '
            <script>
            alert("address required !");
            window.location= "../inner/1.html";
            </script>
           ';
    }
    else if($image=='')
    {
        echo '
            <script>
            alert("photo required !");
            window.location= "../inner/1.html";
            </script>
           ';
    }
    else if($password=='')
    {
        echo '
            <script>
            alert("password required !");
            window.location= "../inner/1.html";
            </script>
           ';

    }
    else if($password==$cpassword)
    {

        move_uploaded_file($tmp_name, "../uploads/$image");
        $insert = mysqli_query($connect, "INSERT INTO user ( name , mobile , password , address, photo , gender , status ,votes) VALUES ('$name','$mobile','$password','$address','$image','$gender',0,0)");
        if($insert){
             echo '
            <script>
            alert("registered successfull");
            window.location= "../";
            </script>
           ';
    
        }
        else{
            echo '
            <script>
            alert("error occured in registration");
            window.location= "../inner/1.html";
            </script>
        ';
    
        }
    }
    else{
    echo '
            <script>
            alert("password dont match");
            window.location= "../inner/1.html";
            </script>
        ';
    }
?>