<?php 

require_once("config.php");

$sql = new Sql();

$titualo =  $sql->select("SELECT * FROM tbteste");

echo json_encode($titualo);

 ?>