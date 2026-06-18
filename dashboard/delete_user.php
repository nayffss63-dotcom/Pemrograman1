<?php 
include '../users.php';
include '../database.php';

$db = new Database();
$conn = $db->Connect();
$user = new Users($conn);

$id = $_GET['id'];
$user->hapus($id);
header("Location: index.php");