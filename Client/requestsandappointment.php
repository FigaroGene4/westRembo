<?php include 'includes/header-client.php';?>
<?php require_once "../temp/controllerUserData.php";




?>
<?php
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

    .table-header-bg {
    background-color: #003566; /* Replace with your desired background color */
    color: #ffff;
  }
  </style>


  <div class="container">
  <h2 class="display-6" style="color: #001D3D; font-weight: bold;">Document Request</h2>




    <div class="row">


      <div class="col-12">
        <h3> Here are your Document Requests</h3>

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
        <link rel="stylesheet" href="https://unpkg.com/bootstrap-table@1.21.1/dist/bootstrap-table.min.css">
        </head>

        <body>
          <table data-toggle="table">
            <thead  class="table-header-bg" style="text-align: left;">
              <tr>

                <th>Transaction Number</th>
                <th>Doc Type</th>
                <th>Date Submitted</th>
                <th>Status</th>
                </th>
              </tr>
            </thead>
            <tbody>

              <?php

              include_once('db_conn.php');
              $sql = "SELECT * FROM table_documentrequest WHERE email = '$email'";


              //use for MySQLi-OOP
              $query = $conn->query($sql);
              while ($row = $query->fetch_assoc()) {
                $id = $row['id'];
                echo
                " <tr><td>" . $row['transactionNumber'] . "</td>
      <td>" . $row['category'] . "</td>
      
      <td>" . $row['date'] . "</td>";

                if ($row['status'] == "For Payment") {
                  echo "<td>" . $row['status'] . "&nbsp&nbsp&nbsp" . "<a href='payment.php?id=" . $row['id'] . "' class='btn btn-primary'>Pay Cash</a>
        " . "</td></tr>";
                }
                else  if ($row['status'] == "For Payment Approval") {
                  echo "<td>" . $row['status']."</td></tr>";
                }
                else  if ($row['status'] == "For Approval") {
                  echo "<td> Pending Initial Approval </td></tr>";
                }
                else  if ($row['status'] == "Payment Approved") {
                  $dateTom = date('F d, Y', strtotime($row['dateOfSched']));
                  echo "<td> Payment Approved! Claim Document at ".$dateTom." </td></tr>";
                }
              }
              include('paymodal.php');
              ?>

              <!-- The Modal -->


              <?php

              $sql = "SELECT * FROM table_pricing ";


              //use for MySQLi-OOP
              $query = $conn->query($sql);
              while ($row = $query->fetch_assoc()) {
              }


              ?>
      </div>

      <form action="" method="POST"></form>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
  </div>


  </tbody>
  </table>



  <script src="https://cdn.jsdelivr.net/npm/jquery/dist/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/bootstrap-table@1.21.1/dist/bootstrap-table.min.js"></script>


  </div>

  <div class="col-12">



  </div>





  </div>

  </div>




  <script src="js1/jquery.min.js"></script>
  <script src="js1/popper.js"></script>
  <script src="js1/bootstrap.min.js"></script>
  <script src="js1/owl.carousel.min.js"></script>
  <script src="js1/main.js"></script>













  <br><br><br><br><br><br><br>
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