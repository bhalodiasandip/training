<?php

// print_r($_GET);
// exit;
$con  = mysqli_connect('localhost', 'root', '', 'buildcon');
$count = 0;

$select = "select * from customer where id = ".$_GET['id'];

    $query = mysqli_query($con,$select) or die(mysqli_error($con));

    $data = mysqli_fetch_all($query,MYSQLI_ASSOC);
    $customer = [];
    if(!empty($data))
    {
        $customer = $data[0];
    }
    //     print_r($data);
    //     exit;
    // // $input = [];
include_once("../../views/customer/edit.php");
    
    ?>
    

