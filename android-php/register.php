<?php

if(!empty($_POST['name'])&& !empty ($_POST['email']) && !empty($_POST['password'])){

    $con = mysqli_connect("localhost", "root", "", "db_westrembo");

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    if ($con){
        $sql = "INSERT into table_residents (name,email,password) values ('" . $name . "','" . $email . "','" . $password . "')";
        if(mysqli_query($con, $sql)){
            echo "success";
        } else
            echo "Registreation Failed";
    } else
        echo "Database connect failed";

} else
    echo "All fields are reqrd";

?>