<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['email'])) {
 include ("db_conn.php"); 

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>

<!-- Popper JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="icon" type="image/x-icon" href="logowr.png">   
  <link rel="stylesheet" type="text/css" href="style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1"> 


  
</head>
<body>


 
<nav class="navbar navbar-light bg-light fixed-top ">
  <style>
    
    a{
      color: black;
    }

    a:hover{
      color: violet;
    }

    .dropdown-menu{
      padding: 15px;
      
    }
  </style>
        
            <a class="navbar-brand" href="home.php" style="padding-left: 10px;"> <img src="logowr.png" width="20px"> </a>
            <a class="navbar-brand">Hello, <?php echo $_SESSION['name']; ?></a>
            <a class="navbar-brand navbar-right .active   " href="createadmin.php" ></a>
            <a class="navbar-brand navbar-right  " href="changepassword.php" > </a>
            <a class="navbar-brand navbar-right  " href="logout.php" style= "margin-left: auto"></a>
            <div class="dropdown droptxt">
  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Admin Settings
  <span class="caret"></span></button>
  <ul class="dropdown-menu droptxt">

  <?php
  
  $email = $_SESSION['email'];
  if($email == 'westremboSU@app.com'){
    echo '<li><a href="createadmin.php">Create Admin Account</a></li>';
  }

  ?>
    
    <li><a href="changepassword.php" >Reset Password</a></li>
    <div class="dropdown-divider"></div>
    <li><a href="logout.php" >Logout</a></li>
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


<div class="main">
  

  

  <div class="container " style="text-align: center">

      <div class="row ">

      
      <div class="col-sm-3 border border black">
        <br><br><br><br>
      <h2>Total Residents </h2>
      <img src="avatar.png" alt="Avatar" class="avatar">
   <!-- <h2> <?php # echo $_POST[]?></h2> -->
   <h2> <?php 
       $sql = "SELECT COUNT(email) FROM table_residents group by email";
       $query = $conn->query($sql);
       $rows = mysqli_num_rows($query);
       echo $rows;

    ?> </h2>
   <br><br>


      </div>
      <div class="col-sm-3 border border black">
      <br><br><br><br>
      <h2>Total Admin   </h2>
      <img src="man.png" alt="Avatar" class="avatar">
   <!-- <h2> <?php # echo $_POST[]?></h2> -->
      <h2> <?php 
       $sql = "SELECT COUNT(email) FROM table_admin group by email ";
       $query = $conn->query($sql);
       $rows = mysqli_num_rows($query);
       echo $rows;

    ?> </h2>
      <br><br>

      </div>
      <div class="col-sm-3 border border black">
      <br><br><br><br>
      <h2>Today's Payment:   </h2>
      <img src="philippine-peso.png" alt="Avatar" class="avatar">
   <!-- <h2> <?php # echo $_POST[]?></h2> -->
      <h2><?php

$sql="SELECT sum(price) as amount FROM table_documentrequest WHERE status ='Payment Approved' OR status ='Paid'";

$result = $conn->query($sql);

while ($row = mysqli_fetch_assoc($result))
{ 
   echo ' ₱'. $row['amount'];
}

      
      ?></h2>
      <br><br>

      </div>
      <div class="col-sm-3 border">
      <br><br><br><br>
      <h2>Month's Payment:  </h2>
      <img src="revenue.png" alt="Avatar" class="avatar">
   <!-- <h2> <?php # echo $_POST[]?></h2> -->
   <h2> 

   <?php

$sql="SELECT sum(price) as amount FROM table_documentrequest WHERE status = 'Payment Approved' OR status ='Paid'";

$result = $conn->query($sql);

while ($row = mysqli_fetch_assoc($result))
{ 
   echo ' ₱'. $row['amount'];
}

      
      ?>
   </h2>
   <br><br>
      </div>
</div>

<!-- next line menu -->

      <div class="row ">

      <div class="col-sm-6 border ">
        
        <br><br><br>
        <div class="col">
        <h2>Total Transaction  </h2><br><br><br><br>
      <img src="lending.png" alt="Avatar" width="200px">
   <!-- <h2> <?php # echo $_POST[]?></h2> -->
   <h2> <?php 
      $q="select * from table_documentrequest where status='Payment Approved' ";
      $res=mysqli_query($conn,$q);
      echo mysqli_num_rows($res);

    ?></h2>
   <br><br><br>
        </div>
      </div>
      <div class="col-sm-6 border border black"><br><br><br><h2>Service Tendered Percentage </h2>   <div id="piechart" style="width: 550px; height: 400px;"></div>  
      <br><br>
        

        <?php  
 
 $query = "SELECT category, count(*) as number FROM table_documentrequest WHERE status ='Payment Approved' GROUP BY category";  
 $result = mysqli_query($conn, $query);  
 ?> 
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>  
           <script type="text/javascript">  
           google.charts.load('current', {'packages':['corechart']});  
           google.charts.setOnLoadCallback(drawChart);  
           function drawChart()  
           {  
                var data = google.visualization.arrayToDataTable([  
                          ['Gender', 'Number'],  
                          <?php  
                          while($row = mysqli_fetch_array($result))  
                          {  
                               echo "['".$row["category"]."', ".$row["number"]."],";  
                          }  
                          ?>  
                     ]);  
                var options = {  
                      
                      //is3D:true,  
                      pieHole: 0.2  
                     };  
                var chart = new google.visualization.PieChart(document.getElementById('piechart'));  
                chart.draw(data, options);  
           }  
           </script>  
      </head>  
      <body>  
           <br /><br />  
            
                
                <br />  
             
           </div>  
      </div>

     

      </div>
</div>
  

</div>


  







            
          
    
     


     
     
</body>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
} 
 ?>