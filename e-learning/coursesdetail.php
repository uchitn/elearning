<?php
include('./maininclude/header.php'); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brainbuster</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    
      <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;500&family=Ubuntu:wght@700&display=swap" rel="stylesheet">
    


</head>
<body>
    
<!-- header section starts  -->

<div id="menu-btn" class="fas fa-bars"></div>

<header class="header">

    <a href="#" class="logo"> <i class="fas fa-graduation-cap"></i> Brainbuster </a>
   

    <nav class="navbar">
        <a href="#"class="fas fa-user-circle"><span style="padding-left: 4px; font-weight: 400">profile</span></a>
        <a href="index.php"> <i class="fas fa-angle-right"></i> home </a>
        <a href="#category"> <i class="fas fa-angle-right"></i> category </a>
        <a href="#about"> <i class="fas fa-angle-right"></i> about </a>
        <a href="#courses"> <i class="fas fa-angle-right"></i> courses </a>
        <a href="#contact"> <i class="fas fa-angle-right"></i> contact </a>
        <a href="#reviews"> <i class="fas fa-angle-right"></i> reviews </a>
    </nav>

    

    <div class="share">
        <a href="#" class="fab fa-facebook"></a>
        <a href="#" class="fab fa-twitter"></a>
        <a href="#" class="fab fa-instagram"></a>
        <a href="#" class="fab fa-linkedin"></a>
    </div>
    <a href="admin/adminlogin.php">admin login</a>

    <p class="credit">created by <span>mr.uchit and mr.nishan</span> | all rights reserved!</p>

</header>



 <!---jquery cdn link--->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

<!--custom js file link--->
<script src="../../js/script.js"></script>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-8">
            <div class="card-body">
                <h5 class="card-title">Course Name:Learn Guitar</h5>
                <p class="card-text">Description: Lorem ipsum dolor sit amet consectetur,<br>
                     adipisicing elit. Amet dolorem corporis eaque illum tempora, perferendis,
                     <br> laborum dolor blanditiis et eos sit aliquid nostrum quos animi unde possimus inventore aspernatur quia?</p>
                <p class="card-text">Duration: 10 Days</p>
                <a href="pdf/pdf.php"><button type="submit" class="btn">view pdf</button></a>

            </div>
        </div>
        

         
            
        
       
        
    </div>
</div>


