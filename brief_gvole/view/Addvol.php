<?php
include_once '../Controller/Vol.php';
?>
<!doctype html>
<html lang="en">
<head>
    <title>Administrator</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<link rel="stylesheet" href="../public/Css/admin.css">
<style>

</style>
<body>


    

    <!-- Navigation !-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#"><img src="../public/Images/Logo.png"
                    style="width: 100px; height: 70px;"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="home.php">Home
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                    <div class="btn-group show-on-hover">
                        <?php session_start(); if(isset($_SESSION['UserName'])): ?>

                        <button type="button" class="btn btn-default dropdown-toggle" value=" " data-toggle="dropdown">
                            <?php echo $_SESSION['UserName'];?>
                        </button>

                        <ul class="dropdown-menu" role="menu">
                            <?php if($_SESSION['statusU']=="Admin"): ?>
                            <li><a class="nav-link active" href="<?php echo "Administrator.php" ?>">Administrator</a></li>
                            <?php endif; ?>
                            <li><a class="nav-link" href="<?php echo "../Controller/LogOut.php" ?>">Logout</a></li>

                        </ul>
                    </div>
                    <?php else: ?>
                    <li class="nav-item">
                        <a class="nav-link fa fa-user" href="PageUser.php">Login | Regester</a>
                    </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </nav>
 
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


 <!-- Flight Form -->

      
 <div class="col-md-6"  style="margin-top:500px;">
        <div id="logbox">

          <form action="" method="post">
            <h1 style="color:#757575;">Flight</h1><br/>
            
            <?php 

            if(isset($message)){

              echo '<label class="text-danger">'.$message.'</label>';
            }
            ?>
            
            <input name="LieuDepart"  type="text" placeholder="Lieu Depart" class="input pass">
            <input name="LieuArrive"  type="text" placeholder="Lieu Arrive" class="input pass">
            <p style="color:#757575; text-align:center">DateDepart</p><input name="DateDepart"  type="date" class="input pass">
            <p style="color:#757575; text-align:center">Date Arrive</p><input name="DateArrive"  type="date" placeholder="Date Arrive" class="input pass">
            <input name="NbPlace"  type="text" placeholder="Nombre Placee" class="input pass">
            <input name="Prix"  type="text" placeholder="Prix" class="input pass">
            <input type="submit" value="Add Flight" name="AddVol" class="inputButton" id="btn">
            <span class="text-success">  
                <p style="text-align: center;">
                     <?php  
                     if(isset($success_message))  
                     {  
                          echo $success_message;  
                     }  
                     ?>  
                </p>
            </span> 

            </form>
          </div>  
        </div>  
        </div>   
        <div>
        
</main>


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