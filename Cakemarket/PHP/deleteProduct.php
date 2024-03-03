
<?php require 'connection.php';?>

<?php
  session_start();
  $email = $_SESSION['email'];
  $id = $_GET['item'] ?? '';

        $Query2 = " DELETE FROM `product` WHERE  id = '$id'; ";
        mysqli_query($conn, $Query2);

        echo "<script> 
        document.location.href='AdmainAllProduct.php'
        </script>";

?>
