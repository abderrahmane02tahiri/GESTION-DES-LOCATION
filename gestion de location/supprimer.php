<?php
// get the id variable from the listec.php page
$id = $_GET['id'];
//delet the client from the database using pdo

$pdo = new PDO("mysql:host=localhost;dbname=imoobilier", "root", "");
$stmt = $pdo->prepare("DELETE FROM client WHERE id_client = ?");
$stmt->execute([$id]);
header('location: listeC.php');