<?php require 'connection.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Shopping Cart</title>

    <link
      rel="stylesheet"
      href="../CSS/cart.css"
      media="screen"
      title="no title"
      charset="utf-8"
    />
    <script
      src="https://code.jquery.com/jquery-2.2.4.js"
      charset="utf-8"
    ></script>
    <meta name="robots" content="noindex,follow" />
</head>
<body>

<div class="shopping-cart">
    <!-- Title -->
    <div class="title">
        Shopping Bag
    </div>

    <?php
session_start();
$email = $_SESSION['email'];
?>


    <?php 
    $countt =0;
  
  $rows = mysqli_query($conn , "SELECT * FROM `product`, `cart` WHERE cart.person_email = '$email' AND cart.product_id = product.id;
  ");
  if (!$rows) {
    // Display an error message
    echo "Database error: " . mysqli_error($conn);
  }
  ?>
      <?php foreach($rows as $row) : ?>
      <?php $countt = $countt + $row['price'];?>

    <!-- Product #1 -->
    <div class="item">
        <div class="buttons">
            <span onclick="location.href='deleteItemFromCart.php?item=<?php echo $row['product_id'];?>'" class="delete-btn"></span>
            <span class="like-btn"></span>
        </div>

        <div class="image">
            <img src="../images/<?php echo $row['image']; ?>" alt="" width="128" height="80" />
        </div>

        <div class="description">
            <span> <?php echo $row['name']; ?></span>
            <span>Bball High</span>
            <span>White</span>
        </div>

        <div class="quantity" style="width: 150px">
            <button class="plus-btn" type="button" name="button">
                <img src="https://designmodo.com/demo/shopping-cart/plus.svg" alt="" />
            </button>
            <input type="text" name="name" value="1">
            <button class="minus-btn" type="button" name="button">
                <img src="https://designmodo.com/demo/shopping-cart/minus.svg" alt="" />
            </button>

        </div>

        <div class="total-price"> <?php echo $row['price']; ?></div>
    </div>
          <style>
              .button1 {
                  background-color: white;
                  color: #8d326c;
                  border: 2px solid #8d326c;
                  border-radius: 5px;
                  width: 350px;
                  height: 30px;
              }

              .button1:hover {
                  background-color: pink;
                  color: white;
              }
          </style>
    <?php endforeach ?>
    <?php 

// Set session variables
     $_SESSION['count'] = $countt;?>
    <center><button class="button1" onclick="location.href='buy.php'"> Buy Now</button></center>

    <br><br>
    <!-- Product #2 -->
    <!-- <div class="item">
        <div class="buttons">
            <span class="delete-btn"></span>
            <span class="like-btn"></span>
        </div>

        <div class="image">
            <img src="https://designmodo.com/demo/shopping-cart/item-2.png" alt=""/>
        </div>

        <div class="description">
            <span>Maison Margiela</span>
            <span>Future Sneakers</span>
            <span>White</span>
        </div>

        <div class="quantity">
            <button class="plus-btn" type="button" name="button">
                <img src="https://designmodo.com/demo/shopping-cart/plus.svg" alt="" />
            </button>
            <input type="text" name="name" value="1">
            <button class="minus-btn" type="button" name="button">
                <img src="https://designmodo.com/demo/shopping-cart/minus.svg" alt="" />
            </button>
        </div>

        <div class="total-price">$870</div>
    </div> -->

    <!-- Product #3 -->
    <!-- <div class="item">
        <div class="buttons">
            <span class="delete-btn"></span>
            <span class="like-btn"></span>
        </div>

        <div class="image">
            <img src="https://designmodo.com/demo/shopping-cart/item-3.png" alt="" />
        </div>

        <div class="description">
            <span>Our Legacy</span>
            <span>Brushed Scarf</span>
            <span>Brown</span>
        </div>

        <div class="quantity">
            <button class="plus-btn" type="button" name="button">
                <img src="https://designmodo.com/demo/shopping-cart/plus.svg" alt="" />
            </button>
            <input type="text" name="name" value="1">
            <button class="minus-btn" type="button" name="button">
                <img src="https://designmodo.com/demo/shopping-cart/minus.svg" alt="" />
            </button>
        </div>

        <div class="total-price">$349</div>
    </div> -->
</div>

<script type="text/javascript">
    $('.minus-btn').on('click', function(e) {
        e.preventDefault();
        var $this = $(this);
        var $input = $this.closest('div').find('input');
        var value = parseInt($input.val());

        if (value > 1) {
            value = value - 1;
        } else {
            value = 0;
        }

        $input.val(value);

    });

    $('.plus-btn').on('click', function(e) {
        e.preventDefault();
        var $this = $(this);
        var $input = $this.closest('div').find('input');
        var value = parseInt($input.val());

        if (value < 100) {
            value = value + 1;
        } else {
            value =100;
        }

        $input.val(value);
    });

    $('.like-btn').on('click', function() {
        $(this).toggleClass('is-active');
    });
    $('.delete-btn').on('click', function() {
        $(this).toggleClass('is-active');
    });

</script>
</body>
</html>
