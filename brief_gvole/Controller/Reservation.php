<?php

include_once '../model/connection.php';
include_once '../model/Resrvationclass.php';

$data=new Reserve();

$message="";

if(isset($_POST["AddPassager"])){
  

        $Nom = $_POST['Nom'];  
        $Prenom = $_POST['Prenom'];  
        $Num_Passport = $_POST['Num_Passport'];
        $id_U = $_SESSION['Id_U'];
        $id_Vol= $_GET['id_Vol'];
        $AddP= $data->AddPassager($Nom, $Prenom, $Num_Passport, $id_U);
        $AddR= $data->AddReservation($id_U, $id_Vol);
        $message = 'Reservation Inserted';


}
   ?>