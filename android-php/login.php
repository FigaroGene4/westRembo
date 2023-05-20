<?php

if (!empty($_POST['email']) && !empty($_POST['password'])) {

    $con = mysqli_connect("localhost", "root", "", "db_westrembo");

  
    $email = $_POST['email'];
    $password =$_POST['password'];
    $result = array();

    if($con){

        $sql = "Select * from table_residents WHERE email = '" . $email . "'";
        $res = mysqli_query($con, $sql);
        if(mysqli_num_rows($res) != 0){
            $row = mysqli_fetch_assoc($res);
            if($email == $row['email'] && password_verify($password, $row['password'])){
                try{
                    $apiKey = bin2hex(random_bytes(23));
                } catch (Exception $e) {
                    $apiKey = bin2hex(uniqid($email, true));
                }

                $sqlUpdate = "UPDATE table_residents set apiKey = '" . $apiKey . "' WHERE email = '" . $email . "' "; 

                if(mysqli_query($con, $sqlUpdate)){
                    $result = array("status" => "success", "message" => "Login Successful", "name" => $row['name'], "email" => $row['email'], "apiKey" => $row['apiKey']);

                } else
                    $result = array("status" => "failed", "message"=> "login failed try again");
                
            }else
            $result = array("status" => "failed", "message"=> "retry email and password");
        }else
        $result = array("status" => "failed", "message"=> "login failed try again");
    }else
    $result = array("status" => "failed", "message"=> "database connection failed");

}else
$result = array("status" => "failed", "message"=> "all field are required");

echo json_encode($result, JSON_PRETTY_PRINT);

?>