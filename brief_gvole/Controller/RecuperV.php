<?php
include('../model/connection.php');
include('../model/volclass.php');
?>

  <?php 

$data = new Vol;
$table = 'vol';
$id_V='';

if(isset($_GET['id_Vol'])){ 

    $id_V = $_GET['id_Vol'];
}

$condition = ['id_Vol' => $id_V];

$res = $data->selectAll($table, $condition);
?>

<?php foreach($res as $vol){?>

    <div class='container'>
    <div class='row'>
    <div class='card-body' id='caard'  style="margin-top:400px; 

left:50%;
transform:translate(-50%,-50%);
width:300px;
min-height:400px;
background:#fff;
box-shadow:0 20px 50px rgba(0,0,0,.1);
border-radius:10px;
transition:0.5s;
text-align:center;" >
      <ul class='list-group mb-4' scope='row'>
      <li class='list-group-item'>Vol Numéro: <strong> <?php echo $vol['id_Vol'] ?> </strong></li>
      <li class='list-group-item'>Lieu Départ: <strong><?php echo $vol['LieuDepart'] ?></strong></li>
      <li class='list-group-item'>Lieu Arrive: <strong><?php echo $vol['LieuArrive'] ?></strong></li>
      <li class='list-group-item'>Date Départ: <strong><?php echo $vol['DateDepart'] ?></strong></li>
      <li class='list-group-item'>Date Arrive: <strong><?php echo $vol['DateArrive'] ?></strong></li>
      <li class='list-group-item'>Numéro des Places Disponible: <strong><?php echo $vol['NbPlace'] ?></strong></li>
      <li class='list-group-item'>Prix: <strong><?php echo $vol['Prix'] ?></strong></li>
      <div class='card-link'>
      <div class='card-footer'></div>
                    </div>
      </div>
      </div></div>
   <?php } 

?>

