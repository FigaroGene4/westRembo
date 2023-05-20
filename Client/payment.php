<?php require_once "../temp/controllerUserData.php";




?>
<?php
if(isset($_POST['pay'])){
  
  

  $ref = $_POST['ref'];
  $status = 'For Payment Approval';
  $transactionNumber = $_SESSION['transactionNumber'];
  $amount = $_SESSION['amount'];
  

  $sql1 = "UPDATE table_documentrequest SET referenceNumber = '$ref', status = '$status' , price = '$amount'  where transactionNumber = '$transactionNumber'";

  $con->query($sql1);

  header("Location: requestsandappointment.php");

}


#$id = $_SESSION['id'];
$email = $_SESSION['email'];
$_SESSION['email'] = $email;

$password = $_SESSION['password'];
if ($email != false && $password != false) {
  $sql = "SELECT * FROM table_residents WHERE email = '$email'";
  $run_Sql = mysqli_query($con, $sql);
  if ($run_Sql) {
    $fetch_info = mysqli_fetch_assoc($run_Sql);
    $status = $fetch_info['status'];
    $code = $fetch_info['code'];
    if ($status == "verified") {
      if ($code != 0) {
        header('Location: ../temp/reset-code.php');
      }
    } else {
      header('Location: ../temp/user-otp.php');
    }
  }
} else {
  header('Location: ../temp/login-user.php');
}





?>



<!DOCTYPE html>
<html lang="en">
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
<link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />

<head>
  <link rel="stylesheet" href="css1/owl.carousel.min.css">
  <link rel="stylesheet" href="css1/owl.theme.default.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/4.5.6/css/ionicons.min.css">
  <link rel="stylesheet" href="css1/style.css">


  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title> Welcome to SPA2GO!</title>
  <meta content="" name="description">

  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">





  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: FlexStart - v1.9.0
  * Template URL: https://bootstrapmade.com/flexstart-bootstrap-startup-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="../index.php" class="logo d-flex align-items-center">
        <img src="assets/img/logowest.png" alt="">
        <span>West Rembo</span>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="../index.php">Home</a></li>

          <!--  <li><a href="blog.html">Blog</a></li>
          <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li> -->
          <li><a id='noti_number' class="nav-link scrollto active" href="requestsandappointment.php">Notification</a></li>

          <li class="dropdown scrollto" style="color: pink;"><a href="#"><span>Hello, <?php echo $fetch_info['firstName'] ?></span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="profile.php">Profile</a></li>

              <li><a href="requestsandappointment.php">Requests and Appointments</a></li>

              <li><a href="../temp/logout-user.php">Logout</a></li>
            </ul>

          </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <script type="text/javascript">
    function loadDoc() {


      setInterval(function() {

        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {
            document.getElementById("noti_number").innerHTML = this.responseText;
          }
        };
        xhttp.open("GET", "data.php", true);
        xhttp.send();

      }, 1000);


    }
    loadDoc();
  </script>
  <br><br><br><br><br>
  <style>
    .jbt {
      background-image: url(assets/img/reqsdoc.jpg);
      background-repeat: no-repeat;
      background-size: cover;


    }

    .containerx {
      max-width: 900px;
      background: #6666ff;
      margin: 40px auto;
      padding: 30px 20px 30px 20px;

      margin-top: 100px;

      border-radius: 10px;
      box-shadow: 0px 4px 5px rgba(0, 0, 0, 0.75);
      color: white;
    }







    .containerz {
      max-width: 220px;

      background: #6666ff;
      margin: 20px auto;
      padding: 20px 20px 20px 20px;
      float: left;


      border-radius: 10px;
      box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.75);
      color: white;
    }

    .link {
      font-size: 16px;
      font-weight: 300;
      text-align: center;
      position: relative;
      height: 40px;
      line-height: 40px;
      margin-top: 10px;
      overflow: hidden;
      width: 90%;
      margin-left: 5%;
      cursor: pointer;
    }

    .link:after {
      content: '';
      position: absolute;
      width: 80%;
      border-bottom: 1px solid rgba(255, 255, 255, 0.5);
      bottom: 50%;
      left: -100%;
      transition-delay: all 0.5s;
      transition: all 0.5s;
    }

    .link:hover:after,
    .link.hover:after {
      left: 100%;
    }

    .link .text {
      text-shadow: 0px -40px 0px rgba(255, 255, 255, 1);
      transition: all 0.75s;
      transform: translateY(100%) translateZ(0);
      transition-delay: all 0.25s;
    }

    .link:hover .text,
    .link.hover .text {
      text-shadow: 0px -40px 0px rgba(255, 255, 255, 0);
      transform: translateY(0%) translateZ(0) scale(1.1);
      font-weight: 600;
    }

    a {
      color: white;
    }


    @media screen and (max-width: 799px) {
      .sidebar {
        display: block;

      }
    }

    .sidebar a.active {

      color: yellow;
      font-weight: bold;
    }

    .item {
      height: 500px;
    }

    .item img {
      width: 100%;
      height: 100% !important;
      object-fit: cover;
    }

    .fifty-chars {
      width: 50ch;
      overflow: hidden;
      white-space: nowrap;
      text-overflow: ellipsis;
    }
  </style>


  <div class="container">
    <h1 class="display-6">Pay Downpayment for Document</h1><br><br>
    <ul class="nav justify-content-center">


    </ul>



    <div class="row">

      <div class="col-12">
        <h4> </h4>

        <?php

        $id = $_GET['id'];

        include_once('db_conn.php');
        $sql = "SELECT * FROM table_documentrequest WHERE  id = '$id'";


        //use for MySQLi-OOP
        $query = $conn->query($sql);
        while ($rows = $query->fetch_assoc()) {

          $transactionNumber = $rows['transactionNumber'];
          $category = $rows['category'];
        }

        $_SESSION['transactionNumber'] = $transactionNumber;





        ?> <h1>Please Scan the QR Code/Download</h1>
        


        </h3>
        <div class="h-100 d-flex align-items-center justify-content-center">
       

          <img src="assets/img/qr.jpg" alt="" width="190px">

        </div>
    
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
        <link rel="stylesheet" href="https://unpkg.com/bootstrap-table@1.21.1/dist/bootstrap-table.min.css">
        </head>

        <body>
          <table data-toggle="table">
            <thead style="text-align: left;">
              <tr>

                <th>Transaction Number</th>
                <th>Doc Type</th>
                <th>Name</th>

                </th>
              </tr>
            </thead>
            <tbody>


              <?php

              include_once('db_conn.php');
              $sql = "SELECT * FROM table_documentrequest WHERE id = '$id'";


              //use for MySQLi-OOP
              $query = $conn->query($sql);
              while ($row = $query->fetch_assoc()) {
                $id = $row['id'];
                echo
                " <tr><td>" . $row['transactionNumber'] . "</td>
      <td>" . $row['category'] . "</td>
      
      <td>" . $row['firstName'] . " " . $row['lastName'] . "</td>";
              }


              ?>








      </div>
    </div>
  </div>


  </tbody>
  </table>
<br>
  <h3>Pay exactly: ₱
          <?php
          include_once('db_conn.php');
          $sql = "SELECT * FROM table_pricing";


          //use for MySQLi-OOP
          $query = $conn->query($sql);
          while ($rows = $query->fetch_assoc()) {

            $bi = $rows['baranggayId'];
            $bc = $rows['baranggayClearance'];
            $bsp = $rows['businessPermit'];
            $bp = $rows['buildingPermit'];
            $percentage = $rows['percentDownpayment'];

            if ($category == 'Baranggay ID') {
              echo $bi * ($percentage / 100);
              $amount = $bi * ($percentage / 100);
              $_SESSION['amount']  =  $amount;
            } elseif ($category == 'Baranggay Clearance') {
              echo $bc * ($percentage / 100);
              $amount = $bc * ($percentage / 100);
              $_SESSION['amount']  =  $amount;
            } elseif ($category == 'Business Permit') {
              echo $bsp * ($percentage / 100);
              $amount = $bsp * ($percentage / 100);
              $_SESSION['amount']  =  $amount;
            } elseif ($category == 'Building Permit') {
              echo $bp * ($percentage / 100);
              $amount = $bp * ($percentage / 100);
              $_SESSION['amount']  =  $amount;
            }
          }
          ?>

          <form action="" method="POST">
          <div class="form-group"><br>
    <h6>Reference Number:</h6>
    <input name="ref" type="number" class="form-control" id="exampleFormControlInput1" placeholder="Gcash Reference No.">

    <br>

    <div class="h-100 d-flex align-items-center justify-content-center">
    <button type="submit" class="btn btn-primary" name="pay">Submit</button>
    </div>
  </form>
  </div>

          




  <script src="https://cdn.jsdelivr.net/npm/jquery/dist/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/bootstrap-table@1.21.1/dist/bootstrap-table.min.js"></script>


  </div>

 




  </div>

  </div>




  <script src="js1/jquery.min.js"></script>
  <script src="js1/popper.js"></script>
  <script src="js1/bootstrap.min.js"></script>
  <script src="js1/owl.carousel.min.js"></script>
  <script src="js1/main.js"></script>













  <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
  <?php include '../includes/footer.php'; ?>






  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <script>
    var links = document.getElementsByClassName('link')
    for (var i = 0; i <= links.length; i++)
      addClass(i)


    function addClass(id) {
      setTimeout(function() {
        if (id > 0) links[id - 1].classList.remove('hover')
        links[id].classList.add('hover')
      }, id * 750)
    }
  </script>
  <!-- Template Main JS File -->
  <script src="assets1/js/main.js"></script>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
</body>

</html>