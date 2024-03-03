<?php require 'connection.php';?>

<!DOCTYPE html>
<html lang="en">
  <head>
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

      <title>Title</title>
      <script src="JS/cards.js" defer></script>
      <script src="addtocart.js"></script>
  </head>
  <body>


    <?php
    session_start();
    $email = $_SESSION['email'];
    ?>

    <nav id="first"  class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a style="font-weight: bold;font-size: 24px;color: pink"class="navbar-brand" href="#">AF Sweet</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a style="font-weight: bold;font-size: 18px;color: pink" class="nav-link active" aria-current="page" href="index.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a style="font-weight: bold;font-size: 18px;color: pink" class="nav-link" href="LogInPage.html">Log in</a>
                    </li>
                    <li class="nav-item">
                        <a style="font-weight: bold;font-size: 18px;color: pink"class="nav-link" href="SignUpPage.html">Sign up</a>
                    </li>
                </ul>
            </div>
        </div>
        <form style="color: pink" class="d-flex" role="search">
            <div class="button-container">
                <div class="like-button" style="margin-right: 10px">
                    <i class="fa fa-heart"></i>
                </div>
                <div class="like-button" style="margin-right: 10px">
                    <i class="fa fa-shopping-cart"></i>
                </div>
            </div>
            <input
                    style="color: #f2f2f2;
  background-color: pink;
  border: 1px solid pink;
height: 30px;
width: 200px;
margin-top:15px"

                    class="form-control me-2"
                    type="search"
                    placeholder="Search"
                    aria-label="Search"
            />
            <button class="card-button" style="margin-top: 8px; border: pink;color: #f2f2f2;font-weight: bold;width: 100px;height: 30px;margin-top: 15px" type="submit">
                Search
            </button>
        </form>
    </nav>
    <center>
        <nav class="navbar navbar-expand-lg" style="width: 100%"><!--bg-light-->
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <center>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent1">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a href="OutHome.php">
                                    <th><button type="button"class="button" style="background-color: #f2f2f2; margin-left: 400px" >About Us</button></th></a>
                            </li>
                            <!--  <br>
                              <li class="nav-item">
                                <th><button type="button"class="button" style="background-color: #fad7dd;margin-left: 5px">Services</button></th>
                              </li>
                              <br>-->
                            <li class="nav-item">
                                <a href="ProductPage.php">
                                    <th><button type="button"class="button" style="background-color: #cb9fa7;margin-left: 5px">Products</button></th></a>
                            </li>
                            <br>
                            <li class="nav-item">
                                <a href="OutHome.php#ourchefs">
                                    <th><button type="button"class="button" style="background-color: #cc7c8a;margin-left: 5px">Our chef</button></th></a>
                            </li>
                            <br>
                            <li class="nav-item">
                                <A href="Outindex.php#contact">
                                    <th><button type="button"class="button" style="background-color: #a66570;margin-left: 5px">Contact Us</button></th>
                                </A>

                            </li>
                        </ul>
                    </div>
                </center>
            </div>
        </nav>
    </center>





    <div class="container">
    <?php 
$rows = mysqli_query($conn , "SELECT * FROM product ")
?>

<?php foreach($rows as $row) : ?>

  <div class="card" >
        <div class="images" onclick="location.href='ProductDetails.php?item=<?php echo $row['id'];?>'">
        <img src="../images/<?php echo $row['image']; ?>" alt="" /></div>
        <div class="content">
          <div class="review-container">
            <div class="stars">
              <span>Reviews</span>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star-half"></i>
            </div>
          </div>

          <h5 class="price"><?php echo $row['price']; ?></h5>

          <h4 class="name"><?php echo $row['name']; ?></h4>
          <!-- <div class="description">
        <p>helo thihhf hfhhf jfhhfhf fhfhfhhf</p>
      </div> -->
     
          <div class="button-container">
            <button style="border-color:#fc6676 ;"   class="like-button" name="addtofav" onclick="location.href='addFavToDatabase.php?item=<?php echo $row['id'];?>'" >
              <i style="color: white;" class="fa fa-heart"></i>
            </button>
            <button style="border-color: #ffb3ba  ;" class="card-button" name="addtocart" onclick="location.href='addCartToDatabase.php?item=<?php echo $row['id'];?>'">
              <p style="color: white;" >Add to cart</p>
              <div class="cart-ion">
                <i style="color: white;"  class="fa fa-shopping-cart"></i>
              </div>
            </button>
          </div>
      
        </div>
      </div>
      
<?php endforeach ?>





    </div>
  </body>
</html>
