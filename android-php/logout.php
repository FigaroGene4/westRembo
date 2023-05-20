<?php

if(!empty($_POST['email']) && !empty ($_POST['apiKey'])){

    $email = $_POST['email'];
    $apiKey = $_POST['apiKey'];
    $result = array();
    $con = mysqli_connect("localhost", "root", "", "db_westrembo");


    if($con){
        $sql = "SELECT * table_residents where email ='" . $email . "' and apiKey = '" . $apiKey . "'";
        $res = mysqli_query($con, $sql);
        if(mysqli_num_rows($res) != 0){
            $row = mysqli_fetch_assoc($res);

            $sqlUpdate = "Update table_residents set apiKey = '' where email = '" . $email . "'";
            if (mysqli_query($con,$sqlUpdate)){
                echo "Success";
            }


        } else $result = array("status" => "failed", "message"=> "UnAuth Access");
    }else $result = array("status" => "failed", "message"=> "Db con failed");
}else $result = array("status" => "failed", "message"=> "all fields are rqd");


echo json_encode($result, JSON_PRETTY_PRINT);
?>