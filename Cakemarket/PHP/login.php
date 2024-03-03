<?php require 'connection.php';?>

<?php
$email = $_POST['email'];
$password = $_POST['password'];

  $rows = mysqli_query($conn, "select * from login where email = '$email'");


  if($rows->num_rows > 0){
    $data = $rows->fetch_assoc();
    if($data['password'] === $password){
     
// Start a new session or resume an existing session
    session_start();

// Set session variables
     $_SESSION['email'] = $email;
     if($data['type'] === 'admin'){
      echo "<script> alert ('Welcome <3'); 
      document.location.href = 'AdmainCustumerOrders.php'
      </script>";
     }else if($data['type'] === 'client'){
    //  $_SESSION['firstNme'] = 'john@example.com';
    echo "<script> alert ('Welcome <3'); 
    document.location.href = 'index.php'
    </script>";
     }
    }else{
      echo "<script> alert ('Wrong Password'); 
  document.location.href = 'LogInPage.php'
  </script>";
    }
   }else{
    echo "<script> alert ('Invalid Email'); 
  document.location.href = 'LogInPage.php'
  </script>";

    
    }


?>
   