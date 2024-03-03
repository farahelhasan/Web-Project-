<?php require 'connection.php';?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width= device-width" />
    <link rel="stylesheet" href="../CSS/productDetails.css" />
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
      integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm"
      crossorigin="anonymous"
    />
    <script src="../JavaScript/productDetails.js" defer></script>
    <script src="../JAVASCRIPT/comment.js"></script> 

    <title>Product Details</title>
  </head>
  <body>

  <?php
    session_start();
    $email = $_SESSION['email'];

    ?>

  <?php 
$id = $_GET['item'] ?? '';
  $rows = mysqli_query($conn , "SELECT * FROM product WHERE id ='$id'");
  if (!$rows) {
    // Display an error message
    echo "Database error: " . mysqli_error($conn);
  }
  
  ?>
<div class="container">

    
      <div class="box">
      <?php foreach($rows as $row) : ?>
        <div class="image">
          <img src="../images/<?php echo $row['image']; ?>" />
        </div>
        <div class="basic-information">
          <h1> <?php echo $row['name']; ?></h1>
          <div class="stars">
            <span>Reviews</span>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-half"></i>
          </div>
          <h2 class="price"> <?php echo $row['price']; ?></h2>
          <div class="button-container">
          <div   onclick="location.href='editProduct.php?item=<?php echo $id;?>'" class="card-button">
              <p style="color: white;">Edit</p>
              
            </div>
            <div onclick="location.href='deleteProduct.php?item=<?php echo $id;?>'" class="card-button">
              <p  style="color: white;">Delete</p>
            </div>
          </div>
        </div>

        <div class="description">
          <p>
          <?php echo $row['description']; ?>
          </p>
        </div>
        <div class="rating">
          <header>How was your experience?</header>

          <div class="stars-for-rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
          </div>
        </div>
      
        <?php endforeach ?>
      
      <?php 
      $_SESSION['id'] = $row['id'];
      $_SESSION['nameSe'] = $row['name'];
      $_SESSION['price'] = $row['price'];
      $_SESSION['description'] = $row['description'];
      
      ?>

        <div class="comment">

          <div class="comment-heading">
            <samp>Comments</samp>
            <h2>Clients Says</h2>
          </div>
          
          <div class="comment-box-container">

          <?php

// Insert comment into the database when the button is clicked
// if (isset($_POST['submit'])) {
//   $comment = $_POST['comment'];

//   $rows = mysqli_query($conn, "select * from person where email = '$email'");
//   if($rows->num_rows > 0){
//   $data = $rows->fetch_assoc();
//   }
//   $firstName = $data['firstName'];
//   $lastName = $data['lastName'];
//   $emailclient = $data['email'];
//   $firstName = $data['firstName'];


//   $insertQuery = " INSERT INTO comment_box VALUES('$firstName','$lastName','$emailclient','profile.png','$comment','$id')";
//   mysqli_query($conn, $insertQuery);

//   // Refresh the page to display the new comment
//   echo "<script>
//   document.location.href = 'ProductDetails.php?item=$id'
//   </script>";
//   exit();

// }
// Retrieve all comments from the database (including the newly added comment) in descending order
$selectQuery = "SELECT * FROM comment_box WHERE comment_box.productId = '$id' ";
$rows = mysqli_query($conn, $selectQuery);


// Display all comments in HTML table
?>
<?php foreach($rows as $row) : ?>

            <div class="comment-box">
              <div class="box-top">
                <div class="profile">
                  <div class="profile-img">
                    <img src="../images/<?php echo $row['image']; ?>" />
                  </div>
                  <div class="name-user">
                    <strong> <?php echo $row['firstName']; ?> </strong>
                    <span><?php echo $row['email']; ?></span>
                  </div>
                </div>

                <div class="reviews">
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                </div>
              </div>

              <div class="client-comment">
                <p>
                <?php echo $row['comment']; ?>
                </p>
              </div>
            </div>
            <?php endforeach ?>

           
          </div>
          
      </div>
      </div>
    </div>
  </body>
</html>
