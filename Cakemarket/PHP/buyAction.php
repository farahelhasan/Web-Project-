
<?php require 'connection.php';?>

<?php
if($_POST['submit']){
  session_start();
  $email = $_SESSION['email'];
  $countt= $_SESSION['count'];

  $location = $_POST['address'];
  $date =$_POST['date'];


        $insertQuery = "INSERT INTO `order` (`client_email`, `location`, `date`, `amount`) VALUES ('$email' , '$location', '$date','$countt');";
        mysqli_query($conn, $insertQuery);

        
        $Query2 = "DELETE FROM `cart` WHERE person_email = '$email'; ";
        mysqli_query($conn, $Query2);

        echo "<script>  alert ('DONE'); 
        document.location.href='index.php'
        </script>";
}
?>
