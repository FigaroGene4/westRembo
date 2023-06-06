<?php
session_start();
require "connection.php";
$email = "";
$firstName = "";
$lastName = "";
$contactNumber = 0;
$gender = "";
$errors = array();
$city = "";
$birthdate = "";
$sitio = "";
$houseNumber = "";
$streetNumber = "";


//if user signup button
class Database {
    protected $con;

    public function __construct($hostname, $username, $password, $dbname) {
        $this->con = mysqli_connect($hostname, $username, $password, $dbname);

        if (!$this->con) {
            die("Connection failed: " . mysqli_connect_error());
        }
    }

    public function escapeString($value) {
        return mysqli_real_escape_string($this->con, $value);
    }
}

class User extends Database {
    protected $errors = array();

    public function validateContactNumber($contactNumber) {
        if (!preg_match("/^[0-9]{11}$/", $contactNumber)) {
            $this->errors['contactwrong'] = 'Contact number is invalid';
        }
    }

    public function validateEmail($email) {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $this->errors['emailinvalid'] = 'Email is invalid';
        }
    }

    public function validatePassword($password, $cpassword) {
        $uppercase = preg_match('@[A-Z]@', $password);
        $lowercase = preg_match('@[a-z]@', $password);
        $number = preg_match('@[0-9]@', $password);

        if (!$uppercase || !$lowercase || !$number || strlen($password) < 8) {
            $this->errors['passwordnotstrong'] = 'Password should be at least 8 characters in length and should include at least one upper case letter, one number';
        }
        
        if ($password !== $cpassword) {
            $this->errors['password'] = "Confirm password not matched!";
        }
    }

    public function checkExistingEmail($email) {
        $email_check = "SELECT * FROM table_residents WHERE email = '$email'";
        $res = mysqli_query($this->con, $email_check);
        
        if (mysqli_num_rows($res) > 0) {
            $this->errors['email'] = "Email that you have entered already exists!";
        }
    }

    public function checkExistingContactNumber($contactNumber) {
        $number_check = "SELECT * FROM table_residents WHERE contactNumber = '$contactNumber'";
        $res = mysqli_query($this->con, $number_check);

        if (mysqli_num_rows($res) > 0) {
            $this->errors['number'] = "Contact Number that you have entered already exists!";
        }
    }

    public function insertUser($firstName, $lastName, $email, $birthdate, $gender, $password, $houseNumber, $streetNumber, $sitio, $contactNumber, $status, $code, $dateRegistered, $new_img_name, $validation) {
        $encpass = password_hash($password, PASSWORD_BCRYPT);

        $insert_data = "INSERT INTO table_residents (firstName, lastName, email, birthdate, gender, password, houseNumber, streetNumber, sitio, contactNumber, status, code, dateRegistered, image, validationT)
            values('$firstName','$lastName', '$email', '$birthdate', '$gender', '$encpass', '$houseNumber', '$streetNumber','$sitio', '$contactNumber', '$status', '$code', '$dateRegistered', '{$new_img_name}', '$validation')";

        $data_check = mysqli_query($this->con, $insert_data);

        if ($data_check) {
            $subject = "Email Verification Code";
            $message = "Your verification code is $code";
            $sender = "From: westrembo.ph@gmail.com";
            if (mail($email, $subject, $message, $sender)) {
                $info = "We've sent a verification code to your email - $email";
                $_SESSION['info'] = $info;
                $_SESSION['email'] = $email;
                $_SESSION['password'] = $password;
                header('location: user-otp.php');
                exit();
            } else {
                $this->errors['otp-error'] = "Failed while sending code!";
            }
        } else {
            $this->errors['db-error'] = "Failed while inserting data into the database!";
        }
    }

    public function handleRegistration() {
        if (isset($_POST['signup'])) {
            $firstName = $this->escapeString($_POST['firstName']);
            $lastName = $this->escapeString($_POST['lastName']);
            $email = $this->escapeString($_POST['email']);
            $contactNumber = $this->escapeString($_POST['contactNumber']);
            $password = $this->escapeString($_POST['password']);
            $birthdate = $this->escapeString($_POST['birthdate']);
            $gender = $this->escapeString($_POST['gender']);
            $houseNumber = $this->escapeString($_POST['houseNumber']);
            $streetNumber = $this->escapeString($_POST['streetNumber']);
            $sitio = $this->escapeString($_POST['sitio']);
            $cpassword = $this->escapeString($_POST['cpassword']);
            $dateRegistered = date("Y-m-d");
        
            $this->validateContactNumber($contactNumber);
            $this->validateEmail($email);
            $this->validatePassword($password, $cpassword);
            $this->checkExistingEmail($email);
            $this->checkExistingContactNumber($contactNumber);
        
            if (count($this->errors) === 0) {
                $img_name = $_FILES['image']['name'];
                $img_type = $_FILES['image']['type'];
                $tmp_name = $_FILES['image']['tmp_name'];
        
                $img_explode = explode('.', $img_name);
                $img_ext = end($img_explode);
        
                $extensions = ["jpeg", "png", "jpg"];
                if (in_array($img_ext, $extensions) === true) {
                    $types = ["image/jpeg", "image/jpg", "image/png"];
                    if (in_array($img_type, $types) === true) {
                        $time = time();
                        $new_img_name = $time . $img_name;
                        date_default_timezone_set('Asia/Taipei');
        
                        if (move_uploaded_file($tmp_name, "images/" . $new_img_name)) {
                            $status = "notverified";
                            $code = rand(999999, 111111);
                            $validation = 'pending';
        
                            $this->insertUser($firstName, $lastName, $email, $birthdate, $gender, $password, $houseNumber, $streetNumber, $sitio, $contactNumber, $status, $code, $dateRegistered, $new_img_name, $validation);
                        }
                    }
                }
            }
        }
    }
}

// Usage
$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "db_westrembo";

$user = new User($hostname, $username, $password, $dbname);
$user->handleRegistration();


//if user click verification code submit button
abstract class OTPVerification {
    protected $con;
    protected $errors = array();

    public function __construct($con) {
        $this->con = $con;
    }

    abstract public function handleVerification($otpCode);
}

class OTPVerificationSuccess extends OTPVerification {
    public function handleVerification($otpCode) {
        $code = 0;
        $status = 'verified';
        $update_otp = "UPDATE table_residents SET code = $code, status = '$status' WHERE code = $otpCode";
        $update_res = mysqli_query($this->con, $update_otp);

        if ($update_res) {
            $fetch_data = mysqli_fetch_assoc($update_res);
            $email = $fetch_data['email'];
            $_SESSION['firstName'] = $fetch_data['firstName'];
            $_SESSION['email'] = $email;
            
            // Handle different validation states
            $validation = $fetch_data['validationT'];
            if ($validation == 'pending') {
                header('location: ../Client/verify.php');
                exit();
            } elseif ($validation == 'For approval') {
                header('location: ../Client/pendingverify.php');
                exit();
            } else {
                // Handle default case
                header('location: ../Client/verify.php');
                exit();
            }
        } else {
            $this->errors['otp-error'] = "Failed while updating code!";
        }
    }
}

class OTPVerificationFailure extends OTPVerification {
    public function handleVerification($otpCode) {
        $this->errors['otp-error'] = "You've entered incorrect code!";
    }
}

// Usage
if (isset($_POST['check'])) {
    $_SESSION['info'] = "";
    $otp_code = mysqli_real_escape_string($con, $_POST['otp']);

    $verificationResult = null;
    $check_code = "SELECT * FROM table_residents WHERE code = $otp_code";
    $code_res = mysqli_query($con, $check_code);

    if (mysqli_num_rows($code_res) > 0) {
        $verificationResult = new OTPVerificationSuccess($con);
    } else {
        $verificationResult = new OTPVerificationFailure($con);
    }

    $verificationResult->handleVerification($otp_code);
}


//if user click login button


class LoginHandler {
    private $con;
    private $errors = array();

    public function __construct($con) {
        $this->con = $con;
    }

    private function validate($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    public function handleLogin($email, $password) {
        $email = $this->validate($email);
        $password = $this->validate($password);

        $sql = "SELECT * FROM table_admin WHERE email='$email' AND password='$password'";
        $result = mysqli_query($this->con, $sql);

        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            if ($row['email'] === $email && $row['password'] === $password) {
                $_SESSION['email'] = $row['email'];
                $_SESSION['name'] = $row['name'];
                $_SESSION['id'] = $row['id'];

                header("Location: ../Admin/home.php");
                exit();
            }
        }

        $check_email = "SELECT * FROM table_residents WHERE email = '$email'";
        $res = mysqli_query($this->con, $check_email);

        if (mysqli_num_rows($res) > 0) {
            $fetch = mysqli_fetch_assoc($res);
            $fetch_pass = $fetch['password'];

            if (password_verify($password, $fetch_pass)) {
                $_SESSION['email'] = $email;
                $status = $fetch['status'];
                $validation = $fetch['validationT'];

                if ($status == 'verified' && $validation == 'verified') {
                    $_SESSION['email'] = $email;
                    $_SESSION['password'] = $password;
                    header('location: ../Client/index.php');
                    exit();
                }

                if ($status == 'verified' && $validation != 'verified') {
                    $_SESSION['email'] = $email;
                    $_SESSION['password'] = $password;
                    header('location: ../Client/verify.php');
                    exit();
                }

                if ($status == 'verified' && $validation == 'pendingz') {
                    $_SESSION['email'] = $email;
                    $_SESSION['password'] = $password;
                    header('location: ../Client/verify.php');
                    exit();
                }

                if ($status == 'verified' && $validation == 'Pending Verify') {
                    $_SESSION['email'] = $email;
                    $_SESSION['password'] = $password;
                    header('location: ../artist/pendingverify.php');
                    exit();
                }

                if ($status == 'verified' && $validation == 'Declined') {
                    $_SESSION['email'] = $email;
                    $_SESSION['password'] = $password;
                    // header('location: ../artist/declinedartist.php');
                    exit();
                }

                if ($status != 'verified') {
                    $info = "It's look like you haven't verified your email yet - $email";
                    $_SESSION['info'] = $info;
                    header('location: user-otp.php');
                    exit();
                }
            } else {
                $this->errors['email'] = "Incorrect email or password!";
            }
        } else {
            $this->errors['email'] = "It looks like you're not yet a member! Click on the bottom link to sign up.";
        }
    }

    public function getErrors() {
        return $this->errors;
    }
}

// Usage
if (isset($_POST['login'])) {
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);

    $loginHandler = new LoginHandler($con);
    $loginHandler->handleLogin($email, $password);

    $errors = $loginHandler->getErrors();
}

//if user click continue button in forgot password form
if (isset($_POST['check-email'])) {
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $check_email = "SELECT * FROM table_residents WHERE email='$email'";
    $run_sql = mysqli_query($con, $check_email);
    if (mysqli_num_rows($run_sql) > 0) {
        $code = rand(999999, 111111);
        $insert_code = "UPDATE table_residents SET code = $code WHERE email = '$email'";
        $run_query =  mysqli_query($con, $insert_code);
        if ($run_query) {
            $subject = "Password Reset Code";
            $message = "Your password reset code is $code";
            $sender = "From: spa2go.ph@gmail.com";
            if (mail($email, $subject, $message, $sender)) {
                $info = "We've sent a passwrod reset otp to your email - $email";
                $_SESSION['info'] = $info;
                $_SESSION['email'] = $email;
                header('location: reset-code.php');
                exit();
            } else {
                $errors['otp-error'] = "Failed while sending code!";
            }
        } else {
            $errors['db-error'] = "Something went wrong!";
        }
    } else {
        $errors['email'] = "This email address does not exist!";
    }
}

//if user click check reset otp button
if (isset($_POST['check-reset-otp'])) {
    $_SESSION['info'] = "";
    $otp_code = mysqli_real_escape_string($con, $_POST['otp']);
    $check_code = "SELECT * FROM table_residents WHERE code = $otp_code";
    $code_res = mysqli_query($con, $check_code);
    if (mysqli_num_rows($code_res) > 0) {
        $fetch_data = mysqli_fetch_assoc($code_res);
        $email = $fetch_data['email'];
        $_SESSION['email'] = $email;
        $info = "Please create a new password that you don't use on any other site.";
        $_SESSION['info'] = $info;
        header('location: new-password.php');
        exit();
    } else {
        $errors['otp-error'] = "You've entered incorrect code!";
    }
}

//if user click change password button
if (isset($_POST['change-password'])) {
    $_SESSION['info'] = "";
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $cpassword = mysqli_real_escape_string($con, $_POST['cpassword']);
    if ($password !== $cpassword) {
        $errors['password'] = "Confirm password not matched!";
    } else {
        $code = 0;
        $email = $_SESSION['email']; //getting this email using session
        $encpass = password_hash($password, PASSWORD_BCRYPT);
        $update_pass = "UPDATE table_residents SET code = $code, password = '$encpass' WHERE email = '$email'";
        $run_query = mysqli_query($con, $update_pass);
        if ($run_query) {
            $info = "Your password changed. Now you can login with your new password.";
            $_SESSION['info'] = $info;
            header('Location: password-changed.php');
        } else {
            $errors['db-error'] = "Failed to change your password!";
        }
    }
}

//if login now button click
if (isset($_POST['login-now'])) {
    header('Location: login-user.php');
}


// if resident submits a request 


if(isset($_POST['request'])){

    $category = $_SESSION['categ'];

$_SESSION['category'] = $category;

function getGUIDnoHash()
    {
      mt_srand((float)microtime() * 10000);
      $charid = md5(uniqid(rand(), true));
      $c = unpack("C*", $charid);
      $c = implode("", $c);

      return substr('DOC' . $c, 0, 11);
    }



    $transactionNumber = getGUIDnoHash();
    $_SESSION['transactionNumber'] =$transactionNumber;

    
$reason = $_POST['reason'];
$birthplace = $_POST['birthplace'];
    $period = $_POST['period'];
    $voter = $_POST['voter'];
    $owner = $_POST['houseOwner'];
    $relation = $_POST['relation'];



$email = $_SESSION['email'];

$sel = mysqli_query($con, "SELECT * FROM `table_documentrequest` WHERE email = '$email' AND  category = '$category'");

if (mysqli_num_rows($sel) > 0) {
  $errors['reqerror'] ="You already submitted a same request!";

}else{

include_once("db_conn.php");
$sql = "SELECT * FROM table_residents WHERE email = '$email'";


$resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));


while( $rows = mysqli_fetch_assoc($resultset)){	

    $category = $_SESSION['category'];

    $transactionNumber = $_SESSION['transactionNumber'];

    $firstName = $rows['firstName'];
    $lastName = $rows['lastName'];
    $price = '';
    $dates = date("Y-m-d");
    $email =$rows['email'];


   

    $reason = $_POST['reason'];
    $status = "For Approval";

}

$sql = "INSERT INTO table_documentrequest(transactionNumber, firstName, lastName,
email, date, time, reason, price, category, status, birthplace,period,voter,owner,relation)
    VALUES ('$transactionNumber', '$firstName', '$lastName', '$email', '$dates', '$time', '$reason', '$price', '$category', '$status','$birthplace','$period','$voter','$owner','$relation')";


    $conn->query($sql);
    header("Location: requestapproval2.php");
    
}


}