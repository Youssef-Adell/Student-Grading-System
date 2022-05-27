<?php
$pageName = "Delete Student";

session_start();
require_once '../loginedOnly.php';

require_once '../dbConnection.php';

//---GET STUDENT ID TO DELETE IT FROM DB ---
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    $id = $_GET['id'];

    $statment = $pdo->prepare('DELETE FROM students WHERE id=:id');
    $statment->execute(['id' => $id]);
    header('location:manageStudents.php');
}
