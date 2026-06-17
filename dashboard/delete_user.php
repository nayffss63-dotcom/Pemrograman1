<?php 
include '../user.php';
include '../database.php';

$db = new Database();
$conn = $db->Connect();
$user = new User($conn);

$Id = $_GET['id'];
$user->delete($Id);
header("Location: index.php");