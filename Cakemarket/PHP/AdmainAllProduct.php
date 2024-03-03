<?php require 'connection.php';?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../CSS/productPage.css" />
    <link rel="stylesheet" href="../CSS/style.css">

    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
      integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm"
      crossorigin="anonymous"
    />
      <meta charset="UTF-8">
      <title>Title</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
      <link href="https://fonts.googleapis.com/css2?family=Raleway:ital@0;1&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="../CSS/style.css">
      <link rel="stylesheet" href="../CSS/admainAddProduct.css">

    <!-- <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
      crossorigin="anonymous"
    /> -->
    <!-- <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
      crossorigin="anonymous"
    ></script>
    <link
      href="https://fonts.googleapis.com/css2?family=Raleway:ital@0;1&display=swap"
      rel="stylesheet"
    /> -->

    <title>Title</title>

    <script src="JS/cards.js" defer></script>
  </head>
  <body>
  <?php
session_start();
$email = $_SESSION['email'];
?>

  <div style="background-color: pink">

      <nav id="first" style="background-color: pink" class="navbar navbar-expand-lg">
          <div class="container-fluid">
              <a style="font-weight: bold;font-size: 24px;color: white"class="navbar-brand" href="#">AF Sweet</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                      <li class="nav-item">
                          <a style="font-weight: bold;font-size: 18px;color: white" class="nav-link active" aria-current="page" href="AdmainPage.php">Home</a>
                      </li>

                      <li class="nav-item">
                          <a style="font-weight: bold;font-size: 18px;color: white"class="nav-link" href="#"><?php echo $email?></a>
                      </li>
                  </ul>
              </div>
          </div>
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
                                  <a href="AdmainAddProduct.php">
                                      <th><button type="button"class="button" style="background-color: #f2f2f2; margin-left: 400px" >Add product</button></th></a>
                              </li>
                              <!--  <br>
                                <li class="nav-item">
                                  <th><button type="button"class="button" style="background-color: #fad7dd;margin-left: 5px">Services</button></th>
                                </li>
                                <br>-->
                              <li class="nav-item">
                                  <a href="AdmainAllProduct.php">
                                      <th><button type="button"class="button" style="background-color: #cb9fa7;margin-left: 5px">All Products</button></th></a>
                              </li>
                              <br>
                              <li class="nav-item">
                                  <a href="AdmainChaf.php">
                                      <th><button type="button"class="button" style="background-color: #cc7c8a;margin-left: 5px">Chef</button></th></a>
                              </li>
                              <br>
                              <li class="nav-item">
                                  <A href="AdmainCustumerOrders.php">
                                      <th><button type="button"class="button" style="background-color: #a66570;margin-left: 5px">Orders</button></th>
                                  </A>

                              </li>
                          </ul>
                      </div>
                  </center>
              </div>
          </nav>
      </center>
  </div>

    <div class="container">
    <?php 
$rows = mysqli_query($conn , "SELECT * FROM product ")
?>

<?php foreach($rows as $row) : ?>

  <div class="card" >
        <div onclick="location.href='AdmainProductDetails.php?item=<?php echo $row['id'];?>'" class="images"><img src="../images/<?php echo $row['image']; ?>" alt="" /></div>
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
          <div class="card-button">
              <p>Edit</p>
              
            </div>
            <div onclick="location.href='deleteProduct.php?item=<?php echo $row['id'];?>'" class="card-button">
              <p>Delete</p>
            </div>
          </div>
        </div>
      </div>
      
<?php endforeach ?>
<div class="card" onclick="location.href='AdmainAddProduct.php'">
        
          <img src="../images/plus.gif" alt="" width="100%" height="100%" style="border-radius: 1.2em 1.2em 1.2em 1.2em;" />
        
      </div>

    </div>
  </body>
</html>
