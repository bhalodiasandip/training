<?php

include_once("../../connection.php");


session_start();

$sql = "select * from users where username = '".$_POST['username']."'";
$result = mysqli_query($conn, $sql);
//echo mysqli_num_rows($result);exit;
if (mysqli_num_rows($result) > 0) {
    $rs = mysqli_fetch_all($result, MYSQLI_ASSOC);
    $db_password = $rs[0]['password'];
    $user_insert_password = $_POST['password'];
    if($db_password == md5($user_insert_password))
    {
        echo $_SESSION["username"] = $rs[0]['username'];
        header('Location: /controller/customer/list.php');
        exit;
    }
    else{
        $_SESSION["login_error"] = "Detail not match with our Database";
        header('Location: /views/login/login.php');
        exit;
    }    
} else {
    exit('aavu kai chhe nahi');
}


mysqli_close($conn);

?>