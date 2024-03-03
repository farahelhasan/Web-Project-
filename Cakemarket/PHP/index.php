<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital@0;1&display=swap" rel="stylesheet">
<link rel="stylesheet" href="../CSS/style.css">
    <link rel="stylesheet" href="../CSS/productPage.css" media="screen">
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../CSS/productPage.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital@0;1&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../CSS/style.css">

    <link
            rel="stylesheet"
            href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
            integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm"
            crossorigin="anonymous"
    />
    <script src="JS/cards.js" defer></script>
    <script src="addtocart.js"></script>

    <title>Title</title>
    
</head>
<body >

<style>
  .fixed {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    z-index: 999;
    background: transparent;

    
  }

</style>

<script>
  window.addEventListener('scroll', function() {
    var fixedDiv = document.querySelector('.fixed');
    if (window.pageYOffset > 0) {
      fixedDiv.classList.add('sticky');
    } else {
      fixedDiv.classList.remove('sticky');
    }
  });
</script>

    <?php
    session_start();
    $email = $_SESSION['email'];
    ?>


<div style="background-color: #fad7dd">
<div class="fixed" style="background-color: rgba(255, 255, 255, 0.789); " >
<nav   id="first"  class="navbar navbar-expand-lg">
    <div class="container-fluid">
        <a style="font-weight: bold;font-size: 24px;color:#cc7c8a"class="navbar-brand" href="index.php">AF Sweet</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0" > 
                <li class="nav-item">
                    <a style="font-weight: bold;font-size: 18px;color: #cc7c8a" class="nav-link active" aria-current="page" href="index.php">Home</a>
                </li>
               <li> 
               
    </li>
            </ul>
        </div>
    </div>
  
        <form style="color: pink" class="d-flex" role="search">
        
        <div class="button-container">
        <form style="color: pink" class="d-flex" role="search">
        <div style="margin-top: 0px; margin-bottom :2px;" class="button-container ">
        
            <div  onclick="location.href='favourite.php'" class="like-button" style="margin-right: 10px;background-color: #cc7c8a">
                <i class="fa fa-heart"></i>
            </div>
            <div  onclick="location.href='CartPage.php'" class="like-button" style="margin-right: 10px; background-color: #cc7c8a">
                <i class="fa fa-shopping-cart"></i>
            </div>
           
        </div>
    </form>
        <div  style="margin-right: 10px; ">
            <a style="font-weight: bold;font-size: 18px;color: #cc7c8a" class="nav-link" href="#"><?php echo $email?></a>
            </div>
            <div >
              <img src="../images/profile2.png" alt="" style="width: 30px;
  height: 42px;
  margin-right: 0.5rem;
  border-radius: 50%; margin-right: 10px;" >
            </div>
           
           
        </div>
    </form>
</nav>
</div>
<div>
    <center>
        <br>
        <br>
        
<br>
        <nav class="navbar navbar-expand-lg" style="width: 100%"><!--bg-light-->
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent1">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a href="Home.php">
                                    <th><button type="button"class="button" style="background-color:#cb9fa7; margin-left: 400px ; color:#f2f2f2" >About Us</button></th></a>
                            </li>
                            <!--  <br>
                              <li class="nav-item">
                                <th><button type="button"class="button" style="background-color: #fad7dd;margin-left: 5px">Services</button></th>
                              </li>
                              <br>-->
                            <li class="nav-item">
                                <a href="ProductPage.php">
                                    <th><button type="button"class="button" style="background-color:#f9abb8 ;margin-left: 5px ; color:#f2f2f2">Products</button></th></a>
                            </li>
                            <br>
                            <li class="nav-item">
                                <a href="Home.php#ourchefs">
                                    <th><button type="button"class="button" style="background-color: #cc7c8a;margin-left: 5px; color:#f2f2f2">Our chef</button></th></a>
                            </li>
                            <br>
                            <li class="nav-item">
                                <A href="index.php#contact">
                                    <th><button type="button"class="button" style="background-color: #a66570;margin-left: 5px ; color:#f2f2f2">Contact Us</button></th>
                                </A>

                            </li>
                        </ul>
                    </div>
               
            </div>
        </nav>
    </center>
</div>
<center>

<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true" style=" max-width: 830px ; margin-top: 20px;margin-bottom: 3px ; background-color:white" >
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
    </div>
    <center>
    <div class="carousel-inner" style="margin-bottom: 4px;">
        <div class="carousel-item active">
            <img src="../images/imageforHpmePage1.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item active">
            <img src="../images/first.png" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="../images/imageforHpmePage3.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item active">
            <img src="../images/imageforHpmePage2.jpg" class="d-block w-100" alt="...">
        </div>
    </div>
    </center>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
</center>
<br>

<div id="fff" style="margin-top: 0px">
    <center>
        <form style="width: 820px ">
    <strong  style="color: white ; font-family: Great Vibes variant0, Tofu;font-size: 210%;text-shadow: 2px 2px 5px black;padding-top :0px " >Welcome message</strong><br>
        <B>

    <p style="color: white; font-size: 120% ;  padding-bottom:30px">
    We are exactly what you are looking for. Yes, we are an
        <abbr title="Alaa & Farah
    Sweet"> AF SWEET </abbr> certified online cake and Bakery Company
    that specializes in delivering absolutely lip-smacking delicacies. Currently, we are delivering cakes in
    Gurgaon, Delhi, Noida, Ghaziabad, Bangalore and Hyderabad. We are not just a bakery, we are not just bakers.
    In fact, we are just like you, a bunch of food lovers fascinated with sweet indulgence, who dreamt of creating
    an appetizing fairy land of divine delicacies that relishes the utmost desires.
</p>
        </B>
        </form>
    </center>
     </div>
</div>

<div>
<div>
    <div style="margin-left: 256px; border-radius: 20px" class="photo">
        <img src="../images/img1.png" style="height: 140px; width: 170px;margin-bottom: 10px; border-radius: 20px"><br>
        Cookies<br>Original NESTLÉ® TOLL HOUSE® Milk Chocolate Chip Cookies</div>
    <div style="border-radius: 20px" class="photo">
        <img src="../images/645e301c5ddb0.jpg" style="height: 140px; width: 170px;margin-bottom: 10px; border-radius: 20px"><br>
         large chocolatey birthday cake <br>a winner amongst chocoholics! It doesn’t get any chocolatier</div>
    <div style="border-radius: 20px" class="photo">
        <img src="../images/645e305879180.jpg" style="height: 140px; width: 170px;margin-bottom: 10px; border-radius: 20px"><br>
        Birthday cakes <br> one of the most important things of interest in any birthday celebration</div>
    <div style="border-radius: 20px" class="photo">
        <img src="../images/645e307ec7fcd.png" style="height: 140px; width: 170px;margin-bottom: 10px; border-radius: 20px" alt="cake"><br>
        Frozen Yogurt Bark <br>This no-bake treat is completely customizable
        to your sweet cravings.
    </div>
        </div>
</div>

<table STYLE="margin-left:256px" width="1050px">
    <tr>
        <td width="1020px" style="color: pink;text-shadow:2px 2px 5px #f1cfd4"><b style="font-size: 28px">LET ME TELL YOU!<br></b>
            We are not just a bakery, we are not just bakers. In fact, we are just like you, a bunch of food lovers fascinated
            with sweet indulgence, who dreamt of creating an appetizing fairy land of divine delicacies that relishes the utmost desires     </td>
        <td width="1600px" bgcolor="pink" style="text-align: center; border-radius: 20px ;color: white"> <b style="color: #a66570">NEWS & EVENTS</b>
           <table>
               <tr>
                   <th width="600px" >
                       <b style="color: #a66570">30/5/2023</b><br>
                       Join us for our annual Cake Decorating Competition!
                       Are you a cake decorating master? Do you have a passion
                       for creating beautiful and delicious cakes? Then this competition
                       is for you! Our annual Cake Decorating Competition is back and better than ever.
                   </th>
                   <th width="600px" style="color:white">
                       <B style="color: #a66570">Introducing Our New Spring Menu!</B><br>
                       Spring has sprung, and we're celebrating with a delicious new menu featuring all your favorite springtime
                       flavors. From fresh strawberry shortcake to lemon poppyseed cake, our new menu has something for everyone.
                   </th>
               </tr>
           </table>
    </tr>
</table>
<br>
<br>
<br>
<div style="background-color: pink">
<center>
    <table style="margin-left: 40px;margin-right: 20px;margin-top: 40px">
        <tr>
            <br>
            <br>
            <td width="2500px" style="color: #f2f2f2; margin-top: 90px;font-size: 16px"><b style="font-size: 36px ; margin-top: 50px">LET ME TELL YOU!<br></b>
               <b> There are many different types of cake and donuts, and their healthiness can vary depending on the ingredients and how they are prepared.
                Cakes that are made with whole grain flours, natural sweeteners like honey or maple syrup, and healthy fats like avocado oil or coconut
                oil can be a healthier option compared to cakes made with refined flour, white sugar, and butter.<br><br>

                Similarly, donuts that are made with whole grain flour, baked instead of fried, and contain natural sweeteners and healthy fats can also
                be a healthier choice. However, it's important to remember that even healthier versions of cake and donuts should be consumed in moderation
                as they are still considered treats and can be high in calories, sugar, and fat. </b> </td>
            <td width="1600px" style=" border-radius: 20px ;color: white"> <b style="color: #a66570"></b>
                <table >
                    <tr>
                        <center>
                        <th>
                            <video controls MUTED src="../images/makecake.mp4" style="border-radius: 10px; margin-top: 1px; margin-left:20px ;height: 350px">
                            </video>
                        </th>
                        </center>
                        <th style="color:white">
                         <ol style="text-align: left;background-color:white;color: #cc7c8a;border-radius: 20px;margin-left: 30px;width: 300px">
                             <li>Ice cream and frozen desserts</li>
                             <li>Cookies and biscuits</li>
                             <li>Candy bars</li>
                             <li>Ice cream and frozen desserts</li>
                             <li>Cookies and biscuits</li>
                             <li>Candy bars</li>
                             <li>Ice cream and frozen desserts</li>
                             <li>Cookies and biscuits</li>
                             <li>Candy bars</li>
                             <li>Ice cream and frozen desserts</li>
                             <li>Cookies and biscuits</li>
                             <li>Candy bars</li>
                             <li>Ice cream and frozen desserts</li>
                             <li>Cookies and biscuits</li>
                             <li>Candy bars</li>
                         </ol>
                        </th>
                    </tr>
                </table>
        </tr>
    </table>
</center>

    <!-- Footer -->
    <footer id="footer" class="text-center text-lg-start bg-white text-muted" >
        <!-- Section: Social media -->
        <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
            <!-- Left -->
            <div class="me-5 d-none d-lg-block">
                <span style="color: pink;font-size: 25px">Get connected with us on social networks:</span>
            </div>
            <!-- Left -->

            <!-- Right -->
                <table style="margin-top: 1px">
                   <th><a class="u-social-url" title="facebook" target="_blank" href="https://facebook.com/name">
                        <img src="../images/iconfacebook.png" style="width: 40px; height: 40px ">
                    </a></th>
                    <th><a class="u-social-url" title="whatsapp" href="https://whatsapp.com/name">
                        <img src="../images/iconwhatsapp.png" style="width: 45px; height: 45px ">
                    </a></th>
                    <th><a class="u-social-url" title="instagram" target="_blank" href="https://instagram.com/name">
                        <img src="../images/iconinstagram.png" style="width: 40px; height: 40px ">
                    </a></th>
                    <th><a class="u-social-url" title="twitter" target="_blank" href="https://twitter.com/name">
                        <img src="../images/icontwitter.png" style="width: 46px; height: 46px ">
                    </a></th>
                </table>
            <!-- Right -->
        </section>
        <!-- Section: Social media -->

        <!-- Section: Links  -->
        <section>
            <div class="container text-center text-md-start mt-5">
                <!-- Grid row -->
                <div class="row mt-3">
                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                        <!-- Content -->
                        <h6 class="text-uppercase fw-bold mb-4" style="background-color: pink ; border-radius: 20px; width: 150px;color: white;font-size: 20px">
                            <i class="fas fa-gem me-3 text-secondary"></i>AF Sweet!
                        </h6>
                        <p style="color: pink">
                            We are not just a bakery, we are not just bakers. In fact, we are just like you, a bunch of food lovers fascinated
                            with sweet indulgence, who dreamt of creating an appetizing fairy land of divine delicacies that relishes
                            the utmost desires
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4" style="color: #cc7c8a ; font-family: 'Times New Roman';font-size: 16px;text-shadow: pink">
                            Products
                        </h6>
                        <p><a href="PRODUCTS.html" style="color: pink ; font-family: 'Times New Roman';font-size: 16px">Trending Cakes</a></p>
                        <p><a href="PRODUCTS.html" style="color: pink ; font-family: 'Times New Roman';font-size: 16px">Flavours</a></p>
                        <p><a href="PRODUCTS.html" style="color: pink ; font-family: 'Times New Roman';font-size: 16px">Desserts</a></p>
                        <p><a href="PRODUCTS.html" style="color: pink ; font-family: 'Times New Roman';font-size: 16px">Anniversary</a></p>
                        <p><a href="PRODUCTS.html" style="color: pink ; font-family: 'Times New Roman';font-size: 16px">Occasions</a></p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4" style="color: #cc7c8a ; font-family: 'Times New Roman';font-size: 16px;text-shadow: pink">
                            Useful links
                        </h6>
                        <p>
                            <a href="#!" class="text-reset"></a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset"></a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset"></a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset"></a>
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div id="contact" class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4" style="color: #cc7c8a ; font-family: 'Times New Roman';font-size: 16px;text-shadow: pink">CONTACT US</h6>
                        <p><a href="mailto:someone@example.com" style="color: pink ; font-family: 'Times New Roman';font-size: 16px">send email to : alaahas345@gmail.com</a></p>
                        <p><a href="mailto:someone@example.com" style="color: pink ; font-family: 'Times New Roman';font-size: 16px">send email to : farahhas345@gmail.com</a></p>
                        <p><a href="tel:+972594160463" style="color: pink ; font-family: 'Times New Roman';font-size: 16px">+972 59 416 0463</a></p>
                        <p><a href="tel:+972594643574" style="color: pink; font-family: 'Times New Roman';font-size: 16px">+972 59 464 3574</a></p>
                            <a style="margin-left: 380px" href="#first"><img src="../images/iconscrollup.png" style="width:42px;height:42px;"></a>
                    </div>

                    <!-- Grid column -->
                </div>

                <!-- Grid row -->

            </div>
            <!-- Right -->

            <!-- Right -->
        </section>
        <!-- Section: Links  -->


    </footer>
    <!-- Footer -->

    </div>
</div>
</body>
</html>