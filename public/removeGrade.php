<?php
$pageName = "Delete Grade";

session_start();
require_once '../loginedOnly.php';

require_once '../dbConnection.php';

//---GET STUDENT ID TO DELETE IT FROM DB ---
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    $id = $_GET['id'];

    $statment = $pdo->prepare('DELETE FROM grades WHERE grade_id=:id');
    $statment->execute(['id' => $id]);
    header('location:manageGrades.php');
}
