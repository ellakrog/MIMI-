<?php
//poveznica
include("config.php");
 
//uzimanje id preko url-a
$id = $_GET['id'];
 
//brisanje cijelog reda na osnovu pronadjenog id-a(url)
$result = mysqli_query($dbC, "DELETE FROM tb_clanci WHERE id=$id");
 
//prebacivanje na glavnu stranicu
header("Location:adminVjencanice.php");

?>