<!DOCTYPE html>
<?php


if(!isset($_SERVER['HTTPS'] ) ) {
header("Refresh: 3; url=https://vimmey.com/securemt");
?>
<div>
    Redirecting you to https://vimmey.com/securemt  in  <span id="timer">4<span> seconds
</div>

<script>
   window.onload = function(){
     var sec = 3;
     setInterval(function(){
       document.getElementById("timer").innerHTML = sec + ' seconds' ;
       sec--;
      },1000);
    }
</script>


<?php
} else {

?>

<html lang="en">
<head>
    <meta charset="utf-8">
    <title>SecureMt - Secure Money Transfer</title>
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <
    <link rel="stylesheet" href="css/main.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/et-line-font.css">
    <link rel="stylesheet" href="css/nivo-lightbox.css">
    <link rel="stylesheet" href="css/nivo_themes/default/default.css">
    <link rel="stylesheet" href="css/style.css">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,500' rel='stylesheet' type='text/css'>

    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link rel="icon" href="/favicon.ico" type="image/x-icon">
</head>
<body data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

    <!-- preloader section -->
    <div class="preloader">
        <div class="sk-spinner sk-spinner-circle">
           <div class="sk-circle1 sk-circle"></div>
           <div class="sk-circle2 sk-circle"></div>
           <div class="sk-circle3 sk-circle"></div>
           <div class="sk-circle4 sk-circle"></div>
           <div class="sk-circle5 sk-circle"></div>
           <div class="sk-circle6 sk-circle"></div>
           <div class="sk-circle7 sk-circle"></div>
           <div class="sk-circle8 sk-circle"></div>
           <div class="sk-circle9 sk-circle"></div>
           <div class="sk-circle10 sk-circle"></div>
           <div class="sk-circle11 sk-circle"></div>
           <div class="sk-circle12 sk-circle"></div>
       </div>
   </div>

   <!-- navigation section -->
   <section class="navbar navbar-fixed-top custom-navbar" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon icon-bar"></span>
                <span class="icon icon-bar"></span>
                <span class="icon icon-bar"></span>
            </button>
            <a href="#" class="navbar-brand" style="text-align:center; color:green" >SecureMt</a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#home" class="smoothScroll" style="color:green;font-weight: bold">HOME</a></li>
                <li><a href="#about" class="smoothScroll" style="color:green;font-weight: bold">ABOUT</a></li>
                <li><a href="#api" class="smoothScroll" style="color:green;font-weight: bold">API's</a></li>
                <li><a href="#contact1" class="smoothScroll" style="color:green;font-weight: bold">CONTACT</a></li>
            </ul>
        </div>
    </div>
</section>

<!-- home section -->
           <center><img src="img/secure9.jpg" height=800px width="100%" alt="SecureMt "><br><br>
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <h1 style="text-align:center; color:green" >Secure Money Transfer</h1> <br>            

                <b><a href="login.html" class="smoothScroll btn btn-default" style="text-align:center; color:green;font-weight: bold">Log In</a>  &nbsp&nbsp&nbsp&nbsp&nbsp
                <a href="signup.html" class="smoothScroll btn btn-default" style="text-align:center; color:green;font-weight: bold">Sign Up</a></center>
            </div>
        </div>
    </div>      
</section>


<!-- about section -->
<section id="about">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 text-center">
                <div class="section-title">
                    <h1 class="heading bold" style="text-align:center; color:green">About SecureMT</h1>

                </div>
            </div>
            <div class="col-md-6 col-sm-12">
                <img src="img/secure4.jpg"  align="right" width=100% height=50% alt="about img">
            </div>
            <div class="col-md-6 col-sm-12">
                <h1 class="heading bold">Secure Money Transfer</h1>
                <h4 style="color:green"><p>SecureMt will help you to transfer money to another registered users in a secure manner.</p></h3>


                </div>
            </div>
        </div>
    </div>
</section>


<div id="api">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="section-title">
                    <h1 class="heading bold" style="text-align:center; color:green">API's</h1>
                </div>
                <!-- ISO section -->
                <div class="iso-section">

                   <div class="iso-box-section wow fadeIn" data-wow-delay="0.9s">
                    <div class="iso-box-wrapper col4-iso-box">

                    <div class="iso-box html mobile col-lg-4 col-md-4 col-sm-6">
                        <a href="getAccountDetails.html" data-lightbox-gallery="portfolio-gallery"><img src="img/piggy.jpg" width="100px" height="250px" alt="transaction img"></a>/getAccountDetails
                    </div>

                     <div class="iso-box html wordpress mobile col-lg-4 col-md-4 col-sm-6">
                        <a href="getbalanceapi.html" data-lightbox-gallery="portfolio-gallery"><img src="img/balance2.jpg" width="100px" height="250px" alt="balance img"></a>/getbalance
                    </div>

                    <div class="iso-box wordpress col-lg-4 col-md-4 col-sm-6">
                        <a href="gettransaction.html" data-lightbox-gallery="portfolio-gallery"><img src="img/trans1.jpg"  width="100px" height="250px" alt="transaction img"></a>/gettransaction
                    </div>


                    <div class="iso-box wordpress col-lg-4 col-md-4 col-sm-6" style="position: absolute; left:1300px;top:0px;">
                        <a href="transactapi.html" data-lightbox-gallery="portfolio-gallery" ><img src="img/trans2.png" width="100px" height="250px" alt="transact img" ></a>/transact
                    </div>

                     
                    

                </div>
            </div>

        </div>
    </div>
</div>
</div>
</div>      
<br><br>
<div class="row mt">
    <div class="col-lg-6 col-lg-offset-3 centered">
        <h3 style="text-align:center; color:green">CONTACT ME</h3><br><br>

    </div>
</div>
<div id="contact1">
<div class="row mt">    
    <div class="col-lg-8 col-lg-offset-2">
        <form role="form">
          <div class="form-group">
            <input type="name" class="form-control" id="NameInputEmail1" placeholder="Your Name">
            <br>
        </div>
        <div class="form-group">
            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
            <br>
        </div>
        <div class="form-group">
            <input type="email" class="form-control" id="subjectEmail1" placeholder="Subject">
            <br>
        </div>
        <textarea class="form-control" rows="6" placeholder="Enter your text here"></textarea>
        <br>
        <button type="submit"  class="b" style ="color :black">SUBMIT</button>
    </form>             
</div>
</div><!-- /row -->
</div><!-- /container -->

<!-- footer section -->
 <footer>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <h4 style="color:green;text-weight:bold;"> Copyright@ Vimmey Chopra 2016 </h4>
                                        </div>
                                        <div class="col-md-4">
                                          
                                                 
                                                 <a href="https://in.linkedin.com/in/vimmeychopra" target="_blank"><img src="img/link.png" height="40px"></a>
                                                 <a href="https://github.com/Vimmey" target="_blank"><img src="img//github.png" height="52px"></a>
                                                 <a href="https://www.facebook.com/vimmey.chopra/" target="_blank"><img src="img/facebook.png" height="45px"></a>
                                                
                                        </div>

                                    </div>
                                </div>
                            </footer>


<script src="js/jquery.js"></script>
<script src="js/main.min.js"></script>
<script src="js/smoothscroll.js"></script>
<script src="js/isotope.js"></script>
<script src="js/imagesloaded.min.js"></script>
<script src="js/nivo-lightbox.min.js"></script>
<script src="js/jquery.backstretch.min.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/custom.js"></script>

</body>
</html>
<?php
}
?>
