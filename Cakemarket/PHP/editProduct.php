<?php
    session_start();
    $email = $_SESSION['email'];
    $idS = $_SESSION['id'];
    $nameS = $_SESSION['nameSe'];
    $priceS = $_SESSION['price'];
    $descriptionS = $_SESSION['description'];

    ?>

<?php
require 'connection.php';
$i = 0;
if(isset($_POST["submit"])){
  $name = $_POST["name"];
  $price = $_POST["price"];
  $description = $_POST["description"];
  if($_FILES["image"]["error"] === 4){
    echo "<script> alert 'image not '); </script>";

  }else{
    $fileName = $_FILES["image"]["name"];
    $fileSize = $_FILES["image"]["size"];
    $tmpName = $_FILES["image"]["tmp_name"];
    $validImageExtension = ['jpg' , 'jpeg' , 'png'];
    $imageExtension = explode('.',$fileName);
    $imageExtension  = strtolower(end($imageExtension));
    if(!in_array($imageExtension,$validImageExtension)){
      echo "<script> alert ('invalid exten'); </script>";

    }else if($fileSize>1000000) {
      echo "<script> alert ('invalid size'); </script>";

    }else{
      $newImageName =  uniqid();
      $newImageName .= '.' . $imageExtension;
      move_uploaded_file($tmpName , '../images/'. $newImageName);
      $query = "UPDATE `product` SET `name`='$name',`image`='$newImageName',`price`='$price',`description`='$description' WHERE id = $idS";
      mysqli_query($conn , $query);
      echo "<script> alert ('done'); 
      document.location.href = 'AdmainProductDetails.php?item=$idS'
      </script>";

    }

  }
  
}

?>


<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital@0;1&display=swap" rel="stylesheet">
<link rel="stylesheet" href="../CSS/style.css">
<link rel="stylesheet" href="../CSS/admainAddProduct.css">

</head>
<body >
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

<style>
    input[type=text], select, textarea {
        width: 100%;
        padding: 12px;
        border-radius: 6px;
        height: 30px;
        resize: vertical;
        border: 2px solid #8d326c;
    }
    .custom-file-upload {
        border: 1px solid #ccc;
        display: inline-block;
        padding: 6px 12px;
        cursor: pointer;
    }
    .button1 {
        background-color: white;
        color: #8d326c;
        border: 2px solid #8d326c;
        border-radius: 5px;
        width: 100%;
        height: 30px;
    }

    .button1:hover {
        background-color: pink;
        color: white;
    }

</style>
<center><div class="box">
  <table> 
    <tr> <td> <h1 style="color: #a66570;font-weight: bold" > Edit Product</h1> </td> </tr>
 <form clase = "" action="" method="post" autocomplete="off" enctype="multipart/form-data">
  <div class="inputbox">

 <tr> <td><label style="color: #a66570;font-weight: bold"  for ="name">Name</label></td>
  </tr>
 <tr> <td><input type = "text" name = "name" id="name" placeholder="<?php echo $nameS;?>" > <br></td>
  </tr>
 <tr> <td><label style="color: #a66570;font-weight: bold"  for ="image">image</label></td>
  </tr>
 <tr> <td><input type = "file" name = "image" id="image" accept=".jpg, .jpeg , .png"  value=""><br></td>
  </tr>
 <tr> <td><label style="color: #a66570;font-weight: bold" for ="price">price</label></td>
  </tr>
 <tr> <td><input type = "text" name = "price" id="price"  placeholder="<?php echo $priceS; ?>" > <br></td>
  </tr>
 <tr> <td><label style="color: #a66570;font-weight: bold" for ="description">description</label></td>
  </tr>
 <tr> <td><input type = "text" name = "description" id= "description"placeholder="<?php echo $descriptionS ;?>" width="200px" height="80px" ><br><br></td>
  </tr>

 <tr> <td><button class="button1" type="submit" name = "submit" >Submit</button></td>
  </tr>
  </div>
  </form>
  
  </table>
  </div>
  </center>
</body>
</html>





 
