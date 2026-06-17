<?php 
include '../user.php';
include '../database.php';

$db = new Database();
$conn = $db->Connect();
$user = new User($conn);

$Id = $_GET['Id'];
$user->hapus($Id);
header("Location: index.php");