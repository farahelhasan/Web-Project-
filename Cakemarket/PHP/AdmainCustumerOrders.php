<?php require 'connection.php';?>

 <!DOCTYPE html>
 <html lang="en">
 
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title>Responsive HTML Table With Pure CSS - Web Design/UI Design</title>
     <link rel="stylesheet" href="../CSS/admainCustumrOrders.css">
 

    <meta charset="UTF-8">
    <title>Title</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital@0;1&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../CSS/style.css">
 </head>
<body >
<?php
session_start();
$email = $_SESSION['email'];
?>
<section>
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

<center>
<div>
     <main class="table">
         <section class="table__header">
             <h1>Customer's Orders</h1>
             <div class="input-group">
                 <input type="search" placeholder="Search Data...">
                 <!-- <img src="images/search.png" alt=""> -->
             </div>
             <div class="export__file">
                 <label for="export-file" class="export__file-btn" title="Export File"></label>
                 <input type="checkbox" id="export-file">
                 <!-- <div class="export__file-options">
                     <label>Export As &nbsp; &#10140;</label>
                     <label for="export-file" id="toPDF">PDF <img src="images/pdf.png" alt=""></label>
                     <label for="export-file" id="toJSON">JSON <img src="images/json.png" alt=""></label>
                     <label for="export-file" id="toCSV">CSV <img src="images/csv.png" alt=""></label>
                     <label for="export-file" id="toEXCEL">EXCEL <img src="images/excel.png" alt=""></label>
                 </div> -->
             </div>
         </section>
         <section class="table__body">
             <table>
                 <thead>
                     <tr>
                         <th> Id <span class="icon-arrow">&UpArrow;</span></th>
                         <th> Customer <span class="icon-arrow">&UpArrow;</span></th>
                         <th> Location <span class="icon-arrow">&UpArrow;</span></th>
                         <th> Order Date <span class="icon-arrow">&UpArrow;</span></th>
                         <th> Order Details <span class="icon-arrow">&UpArrow;</span></th>
                         <th> Amount <span class="icon-arrow">&UpArrow;</span></th>
                     </tr>
                 </thead>
                 <tbody>

                <?php 
                $i = 0;
                $rows = mysqli_query($conn , "SELECT * FROM `order`")
                ?>
                <?php foreach($rows as $row) : ?>
                    <?php $i = $i+1; ?>
                     <tr>
                         <td> <?php echo $i ?></td>
                         <td> <img src="../images/profile.png" alt=""><?php echo $row['client_email']; ?></td>
                         <td> <?php echo $row['date']; ?> </td>
                         <td> <?php echo $row['location']; ?></td>
                         <td>
                             <p class="status delivered" > Show Details</p>
                         </td>
                         <td> <strong> <?php echo $row['amount']; ?> </strong></td>
                     </tr>
                <?php endforeach ?>
                     
                 </tbody>
             </table>
         </section>
     </main>
     </div>
     </center>
     </section>
 </body>
 </html>