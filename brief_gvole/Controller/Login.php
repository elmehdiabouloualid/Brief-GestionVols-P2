<?php
session_start();
include_once '../model/connection.php';
include_once '../model/loginclass.php';
$data=new user();
$funObj = new user();  
$message="";


// login 
if(isset($_POST["Login"])){

    $field= array (

        'UserName' => $_POST["UserName"],
        'Passworde' => $_POST["Passworde"]
    );

  

if($data->required_Validation($field)){

    if($data->can_login("users", $field)){
        
        $_SESSION["UserName"] = $_POST["UserName"]; 
        
        if($_SESSION['statusU'] == "Admin"){
 
            header("location:home.php");
        }
        else{

            header("location:home.php");
        }

    }
    else{

        $message = $data->errors;
    }

}
else{

    $message= $data->errors;
}
}


//Register 

if(isset($_POST["Register"])){

    $field= array (

        'UserName' => $_POST["UserName"],
        'Passworde' => $_POST["Passworde"],
        'email' => $_POST["email"]
    );

if($data->required_Validation($field)){


        $UserName = $_POST['UserName'];  
        $Passworde = $_POST['Passworde'];  
        $email = $_POST['email'];  

        $emaile = $funObj->isUserExist($email);  

        if(!$emaile){  
            $register = $funObj-> Userregister($UserName, $Passworde, $email);  

            if($register){  

                header("location:../view/PageUser.php?true=Registration Successful");

            }
            else{  
              
               
                header("location:../view/PageUser.php?Error=Registration Not Successful");
            }  
        }    
        else {  
            
            header("location:../view/PageUser.php?email=Email already exist");
        }  
}



else{

    $message= $data->errors;
}

}
?>