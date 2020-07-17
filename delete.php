<?php
include('includes/header.php');?>

<?php
$db = new Database();
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $db = NEW Database();
    $query = $db->destroy($id);
}