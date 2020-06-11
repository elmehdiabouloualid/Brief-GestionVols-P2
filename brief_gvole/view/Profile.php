<!doctype html>
<html lang="en">
<head>
    <title>Profil</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<link rel="stylesheet" href="../public/Css/admin.css">
<link rel="stylesheet" href="../public/Css/Profile.css">

<style>

</style>
<body>                                                                                                                                                                                                                                                                                                      
    <!-- Navigation !-->
    <?php include('header.php') ?>
   
<div class="jumbotron"  style="margin-top: 150px; margin-left: auto;
        margin-right: auto;" >
  <h1 class="display-4"> You Welcome !  <?php
            echo '<h1> '.$_SESSION["statusU"].'</h1>';
        ?></h1>
  <p class="lead">
      Statut :
      <?php
            echo '<span> '.$_SESSION["statusU"].' '.$_SESSION["UserName"].' </span>';
      ?>
  </p>
  <hr class="my-4">
  <a class="btn btn-primary btn-lg"  href="listevoles.php" role="button">List Flight</a>
  
  <a class="btn btn-primary btn-lg" href="Addvol.php" role="button">Add Flight</a>
  <a class="btn btn-primary btn-lg" href="Profile.php" role="button">Profile</a>
</div>
<div class="card">
 <h1>Profile User</h1>
 <h2>All Your Information Here</h2><div class="service-details">
    
     <div class="service-hover-text">
         <?php if(isset($_SESSION['UserName']) && isset($_SESSION['statusU']) && isset($_SESSION['email'])): ?>
             
         <h3>User</h3><h4><?php echo $_SESSION['UserName']; ?></h4>
        
         <p>Status : <?php echo $_SESSION['statusU']; ?> </p>
     </div><div class="service-white service-text"><p>Email</p>
     <a href="#"><?php echo $_SESSION['email']; ?></a></div></div></div>
     <?php endif ?>   
 </main>
 
 <!-- Footer -->
    
 <?php 

include("Footer.php");
 ?>

 <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"></script>
</body>

</html>