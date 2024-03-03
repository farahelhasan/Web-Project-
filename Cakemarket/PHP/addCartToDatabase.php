
<?php require 'connection.php';?>


<?php
    session_start();
    $email = $_SESSION['email'];
    ?>

<?php

$id = $_GET['item'] ?? '';
 
        $insertQuery = " INSERT INTO cart VALUES('$id','$email' )";
        mysqli_query($conn, $insertQuery);
    
        echo "<script>  
        document.location.href ='ProductPage.php'
        </script>";
?>
