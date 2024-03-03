<?php
$email = $_POST['email'];
$password = $_POST['password'];
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$confirmPassword = $_POST['confirmPassword'];
if($password ==$confirmPassword){

$con = new mysqli("localhost" ,"root" ,"", "afsweetdatabase");
if($con->connect_error){
  die("Failed to connect : ".$con->connect_error);
}
else{
 $query = " INSERT INTO `person`(`firstName`, `lastName`, `email`, `password`) VALUES ('$firstName','$lastName','$email','$password') ";
$result = mysqli_query($con , $query);
$query2 = " INSERT INTO `login`(`email`, `password` ,`type`) VALUES ('$email','$password' ,'client') ";
$result2 = mysqli_query($con , $query2);
$query3 = " INSERT INTO `client`(`clientEmail`) VALUES ('$email') ";
$result3 = mysqli_query($con , $query3);

if($result){
 
  echo "<script> alert ('done'); 
  document.location.href = 'SignUpPage.php'
  </script>";
}else{
  echo "<script> alert ('wrong'); 
  document.location.href = 'SignUpPage.php'
  </script>";}

}

}
else{
  echo "<script> alert ('wrong in password'); 
  document.location.href = 'SignUpPage.php'
  </script>";
}
?>
