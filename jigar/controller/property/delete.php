<?php

// print_r($_POST);
// exit;
$con  = mysqli_connect('localhost', 'root', '', 'buildcon');
$count = 0;

if(isset($_GET['id']))
{
    $delete = "delete from property where id = ".$_GET['id'];

    $query = mysqli_query($con,$delete);

    if($query)
    {
        header("Location: /controller/property/list.php");
    }


// echo $select;
// exit;



    // var_dump($query);
    // exit;

        
        // header("Location : controller/property/list.php");
        // exit;

    }
    

    // $data = mysqli_fetch_all($query,MYSQLI_ASSOC);
    // $property = [];
    // if(!empty($data))
    // {
    //     $property = $data[0];
    // }
    // //     print_r($data);
    // //     exit;
    // // // $input = [];
// include_once("../../views/property/edit.php");
// exit("error");
    
    ?>
    


