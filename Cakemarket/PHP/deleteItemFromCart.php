
<?php require 'connection.php';?>

<?php
  session_start();
  $email = $_SESSION['email'];
  $id = $_GET['item'] ?? '';

        $Query2 = "DELETE FROM `cart` WHERE person_email = '$email' AND product_id = '$id'; ";
        mysqli_query($conn, $Query2);

        echo "<script> 
        document.location.href='CartPage.php'
        </script>";

?>
