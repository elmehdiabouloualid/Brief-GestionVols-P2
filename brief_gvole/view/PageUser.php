<?php
include_once '../Controller/Login.php';
?>

<!doctype html>
<html lang="en">

<head>
    <title>Utilisateur</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- link local CSS -->
    <link rel="stylesheet" href="../public/Css/User.css">

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top" id="registre">
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
                </ul>
            </div>
        </div>
    </nav>


  <!-- login Regestration -->
    

     <div class="container register">
        
    
            <div class="card">
            <div class="btn-group" role="group">
            <button id="btnGroupDrop1" type="button" class="btn btn-info" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Login | Signup
           </button>
           <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                            <a class="btn btn-outline-info" id="home-tab" data-toggle="tab" href="#home" role="tab"
                            aria-controls="home" aria-selected="true">Login</a>
                            <a class="btn btn-outline-info" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                            aria-controls="profile" aria-selected="false">Signup</a>
           </div>
           </div>
                <?php                
                        if(@$_GET['true']==true)
                        {
                        ?>
                        <div class="alert-light text-success text-center py-3" style="background-color:rgba(0, 0, 0, 0);"><?php echo $_GET['true'] ?></div>                                
                       <?php
                        }
                        ?>
 
 
                        <?php 
                        if(@$_GET['Error']==true)
                        {
                        ?>
                        <div class="alert-light text-danger text-center py-3" style="background-color:rgba(0, 0, 0, 0);"><?php echo $_GET['Error'] ?></div>                                
                       <?php
                        }
                      ?>
                      <?php                
                        if(@$_GET['email']==true)
                        {
                        ?>
                        <div class="alert-light text-danger text-center py-3" style="background-color:rgba(0, 0, 0, 0);"><?php echo $_GET['email'] ?></div>                                
                       <?php
                        }
                        ?>
   <!-- login  -->
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <h3 class="register-heading">Login</h3>
                        <div class="row register-form">
                            <form action="" method="post">
                                <?php 

                                  if(isset($message)){
                                   echo '<label class="text-danger">'.$message.'</label>';
                                    }
                                ?>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="UserName" class="form-control"
                                            placeholder="Enter Your UserName" />
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="Passworde" class="form-control"
                                            placeholder="Enter Your Password" value="" />
                                    </div>

                                    
                                </div>
                                <div class="d-flex justify-content-center links" style=" margin-left: 10px;">
                                 Don't have an account? <a  id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                            aria-controls="profile" aria-selected="false" >Sign Up</a>
                                
                               </div>
                               <input type="submit" name="Login" class="btn btn-info" value="Login" style=" margin-top: 100px; margin-left: 280px; width: 300px;"/>
                            </form>
                        </div>
                        </div>
      <!-- Sign Up -->
                        <div class="tab-pane fade show" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <h3 class="register-heading">Sign Up</h3>
                        <div class="row register-form">
                            <?php 

                              if(isset($message)){
                                  echo '<label class="text-danger">'.$message.'</label>';
                                }
                            ?>

                        
                            <form action="" method="post">
                                <div class="col-md-6">

                                    <div class="form-group">
                                        <input type="text" name="UserName" class="form-control"
                                            placeholder=" Enter Your UserName" />
                                    </div>

                                    <div class="form-group">
                                        <input type="password" name="Passworde" class="form-control" placeholder="Enter Your Password"/>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" name="email" class="form-control"
                                            placeholder=" Enter Your Email" />
                                    </div>
                                    <input type="submit" name="Register" class="btn btn-info" value="Register"  style=" margin-top: 100px; margin-left: 270px; width: 300px;" />

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>




  <!-- Footer -->
    
    <?php 

  include("Footer.php");
   ?>

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