
<?php
session_start();  
        
        include 'temp/connection.php';

        if(isset($_SESSION['email'])){
          header('location: Client/index.php');
      }
      
        
        ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title> Welcome to Brgy. West Rembo!</title>
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
  <style> 
  .displayNone{
    display: none;
  }
  *{
	padding: 0;
	margin: 0;
	box-sizing: border-box;
	font-family: 'Space Grotesk', sans-serif;
	text-decoration: none;
}

.team-content{
	width: 100%;
	max-width:180vh;
	margin: 0 auto;
	display: grid;
	grid-template-columns: repeat(auto-fit, minmax(150px, auto));
	align-items: center;
	gap: 2rem;
	text-align: center;
	margin-top: 4rem;
}
.team-content img{
	width: 100%;
	height: auto;
	border-radius: 15px;
	margin-bottom: 15px;
}
.center h1{
	color: #013289;
	font-size: 2rem;
	text-align: center;


}
.box{
	padding: 16px;
	background: #4154f1;
	border-radius: 15px;
	transition: all .38s ease;
}
.box h3{
	font-size: 23px;
	font-weight: 600;
	color: #fff;
	margin-bottom: 8px;
}
.box h5{
	font-size: 15px;
	font-weight: 600;
	color: #b7b4bb;
	margin-bottom: 15px;
	letter-spacing: 2px;
}

.box:hover{
	transform: translateY(-10px);
	cursor: pointer;
}

@media(max-width: 1240px){
	.team{
		width: 100%;
		height: auto;
		padding: 90px 2%;
	}
	.center h1{
		font-size: 3.2rem;
	}

  .kapText{
    width: 100px;
    height: 100px;
    background-color: red;
    
    position: absolute;
    top:0;
    bottom: 0;
    left: 0;
    right: 0;
    
    margin: auto;
  }
}
  </style>

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

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="index.php" class="logo d-flex align-items-center">
        <img src="assets/img/logowest.png" alt="">
        <span>Brgy. West Rembo</span>
      </a>
<br><br><br>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          
         
          <!-- <li><a class="nav-link scrollto" href="#portfolio">Portfolio</a></li> -->
          <li><a class="nav-link scrollto" href="#team">Team</a></li>
          <!-- <li><a href="blog.html">Blog</a></li> -->
         
          <li><a class="getstarted scrollto" href="#hero">Get Started</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center ">

    <div class="container ">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center">
          <h1 data-aos="fade-up">WELCOME TO BARANGAY WEST REMBO APP</h1>
          <h2 data-aos="fade-up" data-aos-delay="400">Happy to serve!</h2>
          <div data-aos="fade-up" data-aos-delay="600">
            <div class="text-center text-lg-start">
              <a href="temp/login-user.php" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                <span>Login</span>

                
                <a href="ArtistLogin/login-user.php" class=" align-items-center justify-content-center align-self-center">
                  <span> or Download the app</span>
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
          <img src="assets/img/front.png    " class="img-fluid" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->
  <div class="container" data-aos="fade-up"></div>




  

  <main id="main">
    <!-- ======= About Section ======= -->
   
<!--
      <div class="container" data-aos="fade-up">
        <div class="row gx-0">

          <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
            <div class="content">
              <h3>Who We Are</h3>
              <h2>Expedita voluptas omnis cupiditate totam eveniet nobis sint iste. Dolores est repellat corrupti reprehenderit.</h2>
              <p>
                Quisquam vel ut sint cum eos hic dolores aperiam. Sed deserunt et. Inventore et et dolor consequatur itaque ut voluptate sed et. Magnam nam ipsum tenetur suscipit voluptatum nam et est corrupti.
              </p>
              <div class="text-center text-lg-start">
                <a href="#" class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
                  <span>Read More</span>
                  <i class="bi bi-arrow-right"></i>
                </a>
              </div>
            </div>
          </div>

          <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
            <img src="assets/img/about.jpg" class="img-fluid" alt="">
          </div>

        </div>
      </div>
-->
  

    <!-- ======= Values Section ======= -->
    <section id="values" class="values">
<!-- 
      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>Our Values</h2>
          <p>Odit est perspiciatis laborum et dicta</p>
        </header>

        <div class="row">

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
            <div class="box">
              <img src="assets/img/values-1.png" class="img-fluid" alt="">
              <h3>Ad cupiditate sed est odio</h3>
              <p>Eum ad dolor et. Autem aut fugiat debitis voluptatem consequuntur sit. Et veritatis id.</p>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="400">
            <div class="box">
              <img src="assets/img/values-2.png" class="img-fluid" alt="">
              <h3>Voluptatem voluptatum alias</h3>
              <p>Repudiandae amet nihil natus in distinctio suscipit id. Doloremque ducimus ea sit non.</p>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="600">
            <div class="box">
              <img src="assets/img/values-3.png" class="img-fluid" alt="">
              <h3>Fugit cupiditate alias nobis.</h3>
              <p>Quam rem vitae est autem molestias explicabo debitis sint. Vero aliquid quidem commodi.</p>
            </div>
          </div>

        </div>

      </div>
-->
    </section><!-- End Values Section -->

    <!-- ======= Counts Section 
    <section id="counts" class="counts">
      <div class="container" data-aos="fade-up">

        <div class="row gy-4">

          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <i class="bi bi-emoji-smile"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
                <p>Happy Clients</p>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <i class="bi bi-journal-richtext" style="color: #ee6c20;"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
                <p>Other Clients</p>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <i class="bi bi-headset" style="color: #15be56;"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1" class="purecounter"></span>
                <p>Hours Of Support</p>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <i class="bi bi-people" style="color: #bb0852;"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="100" data-purecounter-duration="1" class="purecounter"></span>
                <p>Pamper Artist</p>
              </div>
            </div>
          </div>

        </div>

      </div>======= -->
    </section><!-- End Counts Section -->

    <!-- ======= Features Section ======= -->
    <section id="features" class="features">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
         
          <p>Brgy. West Rembo Officials </p>
        </header>

     
		</div>
  
    <div class="container">

      <div class="row">

      <div class="col-6">

      <img src="assets/img/brg-officials/kap.png">
      <br><br>
      <h3 style="text-align: center;">MARILOU BANDEJAS-DILLA</h3>
      <h5 style="text-align: center;"> <i>Barangay Captain</i></h5>


      </div>


      <div class="col-6">

      <section id="team" class="team">

<div class="container" data-aos="fade-up">

  <header class="section-header">
    
  </header>

  <div class="row ">
  <div class="col align-items-stretch" data-aos="fade-up" data-aos-delay="100">
      <div class="member">
        <div class="member-img">
        <img src="assets/img/brg-officials/3.png" class="img-fluid" alt="">
          <div class="social">
            <a href=""><i class="bi bi-twitter"></i></a>
            <a href="https://www.facebook.com/louie.sori0"><i class="bi bi-facebook"></i></a>
            <a href=""><i class="bi bi-instagram"></i></a>
            <a href=""><i class="bi bi-linkedin"></i></a>
          </div>
        </div>
        <div class="member-info">
          <h4>Leo Bes</h4>
          <span>Committee on Health & Sanitation</span>
          
        </div>
      </div>
    </div>

    <div class="col align-items-stretch" data-aos="fade-up" data-aos-delay="200">
      <div class="member">
        <div class="member-img">
        <img src="assets/img/brg-officials/4.png" class="img-fluid" alt="">
          <div class="social">
            <a href=""><i class="bi bi-twitter"></i></a>
            <a href="https://www.facebook.com/mark.genesis.d" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href=""><i class="bi bi-instagram"></i></a>
            <a href=""><i class="bi bi-linkedin"></i></a>
          </div>
        </div>
        <div class="member-info">
          <h4>Niño Cunanan</h4>
          <span>Committee on Finance</span>
         
        </div>
      </div>
    </div>

    <div class="col align-items-stretch" data-aos="fade-up" data-aos-delay="300">
      <div class="member">
        <div class="member-img">
        <img src="assets/img/brg-officials/5.png" class="img-fluid" alt="">
          <div class="social">
            <a href=""><i class="bi bi-twitter"></i></a>
            <a href="https://www.facebook.com/unknowndrone"><i class="bi bi-facebook"></i></a>
            <a href=""><i class="bi bi-instagram"></i></a>
            <a href=""><i class="bi bi-linkedin"></i></a>
          </div>
        </div>
        <div class="member-info">
          <h4>Mila del Rosario</h4>
          <span>Committee on Health & Sanitation</span>
          
        </div>
      </div>
    </div>

   


  </div>



  <div class="row ">


  <div class="col align-items-stretch" data-aos="fade-up" data-aos-delay="400">
      <div class="member">
        <div class="member-img">
            <img src="assets/img/brg-officials/6.png" class="img-fluid" alt="">
          <div class="social">
            <a href=""><i class="bi bi-twitter"></i></a>
            <a href="https://www.facebook.com/cabiles.clarence"><i class="bi bi-facebook"></i></a>
            <a href=""><i class="bi bi-instagram"></i></a>
            <a href=""><i class="bi bi-linkedin"></i></a>
          </div>
        </div>
        <div class="member-info">
          <h4>Rodrigo Neri</h4>
          <span>Committee on Public Order
& Safety</span>
         
        </div>
      </div>
    </div>

  


    <div class="col align-items-stretch" data-aos="fade-up" data-aos-delay="400">
      <div class="member">
        <div class="member-img">
            <img src="assets/img/brg-officials/7.png" class="img-fluid" alt="">
          <div class="social">
            <a href=""><i class="bi bi-twitter"></i></a>
            <a href="https://www.facebook.com/cabiles.clarence"><i class="bi bi-facebook"></i></a>
            <a href=""><i class="bi bi-instagram"></i></a>
            <a href=""><i class="bi bi-linkedin"></i></a>
          </div>
        </div>
        <div class="member-info">
          <h4>Jamila Agagon</h4>
          <span>Committee on Livelihood
& Cooperatives</span>
         
        </div>
      </div>
    </div>

    <div class="col align-items" data-aos="fade-up" data-aos-delay="400">
      <div class="member">
        <div class="member-img">
            <img src="assets/img/brg-officials/9.png" class="img-fluid" alt="">
          <div class="social">
            <a href=""><i class="bi bi-twitter"></i></a>
            <a href="https://www.facebook.com/cabiles.clarence"><i class="bi bi-facebook"></i></a>
            <a href=""><i class="bi bi-instagram"></i></a>
            <a href=""><i class="bi bi-linkedin"></i></a>
          </div>
        </div>
        <div class="member-info">
          <h4>Teresita Cardinal</h4>
          <span>Barangay Secretary
</span>
         
        </div>
      </div>
    </div>


  </div>
  

    



   
      
   

  </div>

</div>

</section>

      


      </div>


      </div>
</div>

      
      <!-- <div class="col-6">

      <div class="team-content">
		
    <div class="box">
      <img src="assets/img/brg-officials/3.png">
      <h3>Leo bes</h3>
      <h5>KAGAWAD and Committee on Health & Sanitation</h5>
      
    </div>

    <div class="box">
      <img src="assets/img/brg-officials/4.png">
      <h3>Niño Cunanan</h3>
      <h5>KAGAWAD
Committee on Finance </h5>
      
    </div>

    <div class="box">
      <img src="assets/img/brg-officials/5.png">
      <h3>Mila del Rosario</h3>
      <h5>KAGAWAD
Committee on Health & Sanitation
</h5>
    
    </div>

    <div class="box">
      <img src="assets/img/brg-officials/6.png">
      <h3>Rodrigo Neri</h3>
      <h5>KAGAWAD
Committee on Public Order
& Safety
</h5>
      
    </div>
    <div class="box">
      <img src="assets/img/brg-officials/7.png">
      <h3>Jamila Agagon</h3>
      <h5>KAGAWAD
Committee on Livelihood
& Cooperatives</h5>
      
    </div>

  
    <div class="box">
      <img src="assets/img/brg-officials/9.png">
      <h3>Teresita Cardinal</h3>
      <h5>BARANGAY SECRETARY</h5>
      
    </div>
      
      </div>

      </div>

-->
    </div>

 



      

		</div>
	</section>

        
        </div> 
        

        

    <!-- ======= Services Section ======= -->
   <!-- <section id="services" class="services">

      <div class="container" data-aos="fade-up">
<br>  
        <header class="section-header">
          <h2>Services</h2>
          <p>These are the services available to Brgy. West Rembo:</p>
        </header>

        <div class="row gy-4">

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="service-box blue">
              <h3>Haircut</h3>
              <p>A hairstyle, hairdo, haircut or coiffure refers to the styling of hair, usually on the human scalp. Sometimes, this could also mean an editing of facial or body hair. The fashioning of hair can be considered an aspect of personal grooming, fashion, and cosmetics, although practical, cultural, and popular considerations also influence some hairstyles.</p>
              <a href="https://in.pinterest.com/mayankk83/hairstyle/" class="read-more"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="service-box orange">
              <h3>Massage</h3>
              <p>Massage is the manipulation of the body's soft tissues. Massage techniques are commonly applied with hands, fingers, elbows, knees, forearms, feet, or a device. The purpose of massage is generally for the treatment of body stress or pain.</p>
              <a href="https://www.mayoclinic.org/tests-procedures/massage-therapy/about/pac-20384595" class="read-more"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
            <div class="service-box green">
              <h3>Spa</h3>
              <p>A spa is a location where mineral-rich spring water and sometimes seawater is used to give medicinal baths. Spa towns or spa resorts including hot springs resorts typically offer various health treatments, which are also known as balneotherapy.</p>
              <a href="https://spas.ie/blog/what-is-a-spa" class="read-more"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
            <div class="service-box red">
              <h3>Manicure</h3>
              <p>A manicure is a beauty treatment of the hands. Your nails will be cut, filed, and shaped. You will then have your cuticles pushed back and tidied, and then enjoy a hand massage. The final step will be the painting of the nails with a colour of your choice.</p>
              <a href="https://lesalon.com/blog/what-is-a-manicure/" class="read-more"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
            <div class="service-box purple">
              <h3>Pedicure</h3>
              <p>Pedicures include care not only for the toenails; dead skin cells are rubbed off the bottom of the feet using a rough stone often a pumice stone. Skin care is often provided up to the knee, including granular exfoliation, moisturizing, and massage.</p>
              <a href="https://goodspaguide.co.uk/features/pedicures" class="read-more"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="700">
            <div class="service-box pink">
              <h3>Salon</h3>
              <p>A salon or beauty parlor is an establishment dealing with cosmetic treatments for men and women. There's a difference between a beauty salon and a beauty parlor which is that a beauty salon is a well developed space in a private location, usually having more features than a beauty parlor could have.</p>
              <a href="https://www.cityofdreamsmanila.com/en/shop/salondematt" class="read-more"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>
            </div>
          </div>

        </div>

      </div>--> 

    </section><!-- End Services Section -->

    <!-- ======= Pricing Section ======= --
    <section id="pricing" class="pricing">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>Pricing</h2>
          <p>Check our Pricing</p>
        </header>

        <div class="row gy-4" data-aos="fade-left">

          <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="100">
            <div class="box">
              <h3 style="color: #07d5c0;">Free Plan</h3>
              <div class="price"><sup>$</sup>0<span> / mo</span></div>
              <img src="assets/img/pricing-free.png" class="img-fluid" alt="">
              <ul>
                <li>Aida dere</li>
                <li>Nec feugiat nisl</li>
                <li>Nulla at volutpat dola</li>
                <li class="na">Pharetra massa</li>
                <li class="na">Massa ultricies mi</li>
              </ul>
              <a href="#" class="btn-buy">Buy Now</a>
            </div>
          </div>

          <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="200">
            <div class="box">
              <span class="featured">Featured</span>
              <h3 style="color: #65c600;">Starter Plan</h3>
              <div class="price"><sup>$</sup>19<span> / mo</span></div>
              <img src="assets/img/pricing-starter.png" class="img-fluid" alt="">
              <ul>
                <li>Aida dere</li>
                <li>Nec feugiat nisl</li>
                <li>Nulla at volutpat dola</li>
                <li>Pharetra massa</li>
                <li class="na">Massa ultricies mi</li>
              </ul>
              <a href="#" class="btn-buy">Buy Now</a>
            </div>
          </div>

          <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="300">
            <div class="box">
              <h3 style="color: #ff901c;">Business Plan</h3>
              <div class="price"><sup>$</sup>29<span> / mo</span></div>
              <img src="assets/img/pricing-business.png" class="img-fluid" alt="">
              <ul>
                <li>Aida dere</li>
                <li>Nec feugiat nisl</li>
                <li>Nulla at volutpat dola</li>
                <li>Pharetra massa</li>
                <li>Massa ultricies mi</li>
              </ul>
              <a href="#" class="btn-buy">Buy Now</a>
            </div>
          </div>

          <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="400">
            <div class="box">
              <h3 style="color: #ff0071;">Ultimate Plan</h3>
              <div class="price"><sup>$</sup>49<span> / mo</span></div>
              <img src="assets/img/pricing-ultimate.png" class="img-fluid" alt="">
              <ul>
                <li>Aida dere</li>
                <li>Nec feugiat nisl</li>
                <li>Nulla at volutpat dola</li>
                <li>Pharetra massa</li>
                <li>Massa ultricies mi</li>
              </ul>
              <a href="#" class="btn-buy">Buy Now</a>
            </div>
          </div>

        </div>

      </div>

    </section><!-- End Pricing Section -->

    <!-- ======= F.A.Q Section ======= -->
    <section id="faq" class="faq">

  

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

   

    <div class="footer-top">
      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-5 col-md-12 footer-info">
            <a href="index.php" class="logo d-flex align-items-center">
              <img src="assets/img/logowest.png" alt="">
              <span>Brgy. West Rembo</span>
            </a>
            <p>Welcome To Barangay West Rembo Official Page. 21st J.P. Rizal Extension. 8836-9731 / 8836-9732. The Barangay Seal. Introduction. History. Vision/Mission.</p>
            <div class="social-links mt-3">
           
            </div>
          </div>

       

      </div>
    </div>

    
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

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