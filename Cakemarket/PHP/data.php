<?php require 'connection.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../CSS/productPage.css" />
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
      integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm"
      crossorigin="anonymous"
    />
    <script src="JS/cards.js" defer></script>

  <title>Document</title>
</head>
<body>
<div class="container">
     
<?php 
$rows = mysqli_query($conn , "SELECT * FROM product ")
?>

<?php foreach($rows as $row) : ?>
  <div class="card">
        <div class="images"><img src="../images/<?php echo $row['image']; ?>" alt="" /></div>
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

          <h5 class="price">$ 50</h5>

          <h4 class="name">Product Name</h4>
          <!-- <div class="description">
        <p>helo thihhf hfhhf jfhhfhf fhfhfhhf</p>
      </div> -->
          <div class="button-container">
            <div class="like-button">
              <i class="fa fa-heart"></i>
            </div>
            <div class="card-button">
              <p>Add to cart</p>
              <div class="cart-ion">
                <i class="fa fa-shopping-cart"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
<?php endforeach ?>
</div>
</body>
</html>