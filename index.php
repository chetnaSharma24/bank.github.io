<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <title>Banking System</title>
  </head>

  <body>
  <?php
  include 'navbar.php';
  ?>
  
      <div class="container-fluid p-0">
      <!-- Introduction section -->
            
              <div class="text-center" >
                <img src="images/display.jpg" class="img-fluid p-0" style="width:100%; height : 50vh;">
              </div>
            </div>

      <!-- Activity section -->
      <div class="container flex justify-content-center" style="color:black"><h3>Welcome To REC Banking System ! </h3></div>
            <div #activity class="row activity text-center">
                  <div class="col-md act">
                    <br>
                    <img src="images/user3.PNG" class="img-fluid">
                    <br>
                    
                    <a href="createuser.php"><button style="background-color: #032F61;">New Customer</button></a>
                  </div>
                  <div class="col-md act" >
                    <br>
                    <img src="images/transaction.JPG" style="width:240px; height:248px; border-radius:150px;" class="img-fluid">
                    <br>
                    <a href="transfermoney.php"><button style="background-color: #032F61;">Transaction</button></a>
                  </div>
                
                  <div class="col-md act" >
                    <br>
                    <img src="images/his.jpg" style="width:240px; height:248px; border-radius:150px;" class="img-fluid">
                    <br>
                    <a href="transfermoney.php"><button style="background-color: #032F61;">HISTORY</button></a>
                  </div>

            </div>
      </div>
      
      <!-- Footer -->
<!--    footer start-->
<footer id="footer" style="margin-top:50px; background-color:black">
<div class="container" >
<div class="row">
 <div class="col-lg-4">
        <div class="info ">
            <h5 class="info-title" style="color:white;">
                Company
            </h5>
            <nav class="info-links" style="color:black;">
                <ul>
                    <li><a href="">About us</a></li>
                    <li><a href="">Pricing</a></li>
                    <li><a href="">Our team</a></li>
                    <li><a href="">Career</a></li>
                </ul>
            </nav>
        </div>
      </div>

      <div class="col-lg-4" style="color:black;">
        <div class="info">
            <h5 class="info-title" style="color:white;">
                Legal
            </h5>
            <nav class="info-links">
                <ul>
                    <li><a href="">Help &amp; support</a></li>
                    <li><a href="">Privacy policy</a></li>
                    <li><a href="">Terms and conditions</a></li>
                    <li><a href="">FAQ</a></li>
                </ul>
            </nav>
        </div>
       </div>

       <div class="col-lg-4">
        <div class="info">
            <h5 class="info-title" style="color:white;">
                Product
            </h5>
            <nav class="info-links">
                <ul>
                   
                    <li><a href="">Product for Windows</a></li>
                    <li><a href="">Future products</a></li>
                </ul>
            </nav>
        </div>

       </div>
       </div>
    

       
        <div class="copyright row d-flex justify-content-center" style="color:white">
            <p>2021 copyright@bank By chetna All Rights Reserved</p>
        </div>
</div>
    </div>
</footer>
<!--    footer end-->




      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>
