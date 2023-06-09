<?php include 'includes/header.php';?>
<style>
@import url('https://fonts.googleapis.com/css2?family=Work+Sans:wght@500&display=swap');

@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');
@font-face{
    src: url(css/fonts/WorkSans-Regular.ttf);
}
h1{

    color: #000814;
	  font-family: 'Work Sans', sans-serif;
    font-style: normal;
    font-weight: 700;
    font-size: 50px;
}
.card-text{
    font-family: 'Work Sans', sans-serif;
    font-style: normal;
    font-weight: 400;
}

.custom-image{
  width: 100%;
}

h1{

color: #000814;
font-family: 'Work Sans', sans-serif;
font-style: normal;
font-weight: 700;
}
.card-text{
font-family: 'Work Sans', sans-serif;
font-style: normal;
font-weight: 400;
}

.custom-heading {
color: #001D3D;
font-weight: bolder;
}

.custom-paragraph {
color: #001D3D;
}
.custom-title {
color:  #001D3D;
font-weight: bolder;
}

.custom-date {
color:  #001D3D;
font-weight: bold;
}

</style>
<!--body-->


<div class="container">
<div class="row">
  <div class="col-sm-6 d-flex align-items-center">
    <div class="card-transparent border-0" style="padding-left: 100px;">
      <div class="card-body">
        <h1 class="card-title">Welcome to Baranggay
            <br><span style="color: #FFC300;">West Rembo App!</span> </h1>
        <p class="card-text">Your one-stop destination for all things related 
to our community.</p>
        <a href="temp/login-user.php" class="btn btn-dark btn-lg" role="button" style="background-color: #001D3D !important; border-radius: 10px;">Login</a>
      </div>
    </div>
  </div>

  <div class="col-sm d-flex align-items-center">
    <div class="card-transparent border-0">
      <div class="card-body">
      <img class="card-img-top custom-image" src="wrp-assets/deviceframes1.png" alt="" >
      </div>
    </div>
  </div>
</div>

</div>

<div class="container">
<div class="row">
  <div class="col-sm-6 d-flex align-items-center">
    <div class="card-transparent border-0" >
      <div class="card-body">
      <img class="card-img-top" src="wrp-assets/My project.png" alt="" >
      </div>
    </div>
  </div>

  <div class="col-sm d-flex align-items-center">
    <div class="card-transparent border-0" style="padding-left: 100px;">
      <div class="card-body">
   
      <h1 class="card-title">Request
            <span style="color: #FFC300;">Document</span> </h1>
        <p class="card-text">Request documents way more faster than usual
through our website app.</p>
<a href="temp/login-user.php" class="btn btn-dark btn-lg active" role="button" aria-pressed="true"style="background-color: #001D3D !important">Request now</a>
      </div>
    </div>
  </div>
</div>

</div>

<div class="container">
  <div class="p-4 shadow-4 jbt">
    <h2 class="htxt custom-heading text-center">News and Announcements</h2>
    <p class="custom-paragraph text-center" style="font-style: italic;">
      Daily updates from our community
    </p>
  </div>
</div>

<script type="text/javascript">
 function loadDoc() {
  

  setInterval(function(){

   var xhttp = new XMLHttpRequest();
   xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
     document.getElementById("noti_number").innerHTML = this.responseText;
    }
   };
   xhttp.open("GET", "data.php", true);
   xhttp.send();

  },1000);
 }
 loadDoc();
</script>

<?php 
include_once("Client/db_conn.php");
$sql = "SELECT * FROM table_blog ORDER BY id DESC LIMIT 3";
$resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));
while ($rows = mysqli_fetch_assoc($resultset)) {
    echo "<div class='container'>";
    echo "<div class='row'>";
    
    // Display image in column 1
    echo "<div class='col-md-6 col-sm-12'>";
    echo "<div class='announcement-image'>";
    echo "<a href='blogpost.php?id=".$rows['id']."'><img src='admin/blogimage/".$rows['img']."' alt='1.jpg' class='img-responsive' style='width: 80%; height: auto; border-radius: 20px; margin-left: 50px;'></a>";
    echo "</div>";
    echo "</div>";
    
    // Display title, content, and date in column 2
    echo "<div class='col-md-6 col-sm-12'>";
    echo "<div class='announcement-details'>";
    echo "<h1 class='custom-title' style='font-size: 35px;'>".$rows['title']."</h1>";

    echo "<p>".$rows['content']."</p>";
    
    // Display date posted
    $dateOrig = $rows['date'];
    $cDate = date("F j, Y", strtotime($dateOrig));
    echo "<p style='color:#001D3D; font-weight: bolder;'>Date Posted: <span class='custom-date'>".$cDate."</span></p>";

    
    echo "</div>";
    echo "</div>";
    
    echo "</div>"; // Close the row
    
    echo "</div>"; // Close the container
    
    // Add spacing between announcements
    echo "<div class='row mt-4'></div>";
}
?>



<?php include 'includes/footer.php';?>
