<?php
session_start();



?>
<!DOCTYPE html>
<html>

<head>
  <title>Docuemnnt Requests </title>


  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

  <!-- jQuery library -->
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>

  <!-- Popper JS -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

  <!-- Latest compiled JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="icon" type="image/x-icon" href="logo.png">
  <link rel="stylesheet" type="text/css" href="style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <style>
    .height10 {
      height: 10px;
    }

    .mtop10 {
      margin-top: 10px;
    }

    .modal-label {
      position: relative;
      top: 7px
    }
  </style>

</head>

<body>



  <nav class="navbar navbar-light bg-light fixed-top ">
    <style>
      a {
        color: black;
      }

      a:hover {
        color: violet;
      }

      .dropdown-menu {
        padding: 15px;

      }
    </style>

    <a class="navbar-brand" href="home.php" style="padding-left: 10px;"> <img src="logowr.png" width="20px"> </a>
    <a class="navbar-brand">Hello, <?php echo $_SESSION['name']; ?></a>
    <a class="navbar-brand navbar-right .active   " href="createadmin.php"></a>
    <a class="navbar-brand navbar-right  " href="changepassword.php"> </a>
    <a class="navbar-brand navbar-right  " href="logout.php" style="margin-left: auto"></a>
    <div class="dropdown droptxt">
      <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Admin Settings
        <span class="caret"></span></button>
      <ul class="dropdown-menu droptxt">
        <li><a href="createadmin.php">Create Admin Account</a></li>
        <li><a href="changepassword.php">Reset Password</a></li>
        <div class="dropdown-divider"></div>
        <li><a href="logout.php">Logout</a></li>
    </div>
    </ul>
    </div>
  </nav>

  <div class="sidebar">
<br><br><br><br>

<a href="residents.php ">Residents</a>
<!--<a href="artist.php">Artist</a> -->
<a href="docrequest.php">Document Requests</a>
<a href="payment.php">Payment</a>
<a href="pricing.php">Pricing</a>
<a href="report.php">Reports</a>
<!--<a href="refund.php">Refund</a>
<a href="payartist.php">Pay Artist</a> -->
<a href="Blog.php">CMS</a>
</div>

  </div>

  <div class="main">

    <div class="container">
      <br><br><br>
      <h1 class="page-header text-center">Document Requests</h1>

      <header style="text-align: center;"> </header>

      <br><br>
      <div class="row">
        <div class="col-sm-4 col-sm-offset-2">
          <div class="row">
            <?php
            if (isset($_SESSION['error'])) {
              echo
              "
                  <div class='alert alert-danger text-center'>
                      <button class='close'>&times;</button>
                      " . $_SESSION['error'] . "
                  </div>
                  ";
              unset($_SESSION['error']);
            }
            if (isset($_SESSION['success'])) {
              echo
              "
                  <div class='alert alert-success text-center'>
                      <button class='close'>&times;</button>
                      " . $_SESSION['success'] . "
                  </div>
                  ";
              unset($_SESSION['success']);
            }
            ?>
          </div><style>
            .buttonz {
    width:60px;
    height:30px;
    vertical-align: top;
}
          </style>

<div class="container ">
            <ul class="nav nav-tabs">
                    <li class="nav-item">
                    <a class="nav-link " href="docrequest.php">For Approval</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="accepteddocreqs.php">Accepted Requests</a>
                    </li>
                </ul>
                <div class="row">
                    <div class="col-12">  

          <div class="height10">
          </div>
          <div class="row" ;>
            <table id="myTable" class="table text-center table-bordered table-striped ">
              <thead>

                
                <th>Transaction Number</th>
                <th>Category</th>
                <th>Reason</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Date of Request</th>
                <th>Email</th>
                <th>Action</th>
              </thead>
              <tbody>
                <?php


                include_once('db_conn.php');
                $sql = "SELECT * FROM table_documentrequest WHERE status = 'For payment'";


                //use for MySQLi-OOP
                $query = $conn->query($sql);
                while ($row = $query->fetch_assoc()) {
                  
                  echo
                  "<tr>
                                  
                                  <td>" . $row['transactionNumber'] . "</td>
                                  <td>" . $row['category'] . "</td> <td>" . $row['reason'] . "</td>
                                  <td>" . $row['firstName'] . "</td>
                <td>" . $row['lastName'] . "</td>
                <td>" . $row['date'] . "</td>
                <td>" . $row['email'] . "</td>
                
               
                
                                  <td>
                                     
                                      <a href='#delete_" . $row['id'] . "' class='btn btn-danger btn-sm buttonz' data-toggle='modal'><span class='glyphicon glyphicon-trash'></span> Delete</a>
                                  </td>
                              </tr>";
                  include('edit_delete_modal.php');
                }
                /////////////////

                //use for MySQLi Procedural
                // $query = mysqli_query($conn, $sql);
                // while($row = mysqli_fetch_assoc($query)){
                // 	echo
                // 	"<tr>
                // 		<td>".$row['id']."</td>
                // 		<td>".$row['firstname']."</td>
                // 		<td>".$row['lastname']."</td>
                // 		<td>".$row['address']."</td>
                // 		<td>
                // 			<a href='#edit_".$row['id']."' class='btn btn-success btn-sm' data-toggle='modal'><span class='glyphicon glyphicon-edit'></span> Edit</a>
                // 			<a href='#delete_".$row['id']."' class='btn btn-danger btn-sm' data-toggle='modal'><span class='glyphicon glyphicon-trash'></span> Delete</a>
                // 		</td>
                // 	</tr>";
                // 	include('edit_delete_modal.php');
                // }
                /////////////////

                ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    <br>
   

  <script src="jquery/jquery.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
  <script src="datatable/jquery.dataTables.min.js"></script>
  <script src="datatable/dataTable.bootstrap.min.js"></script>
  <!-- generate datatable on our table -->
  <script>
    $(document).ready(function() {
      //inialize datatable
      $('#myTable').DataTable();

      //hide alert
      $(document).on('click', '.close', function() {
        $('.alert').hide();
      })
    });
  </script>
</body>













</body>

</html>