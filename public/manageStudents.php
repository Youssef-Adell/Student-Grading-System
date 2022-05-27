<?php
$pageName = "Manage Students";
require_once '../dbConnection.php';

$statment = $pdo->prepare('SELECT * FROM students');
$statment->execute();
$data = $statment->fetchAll();
?>

<?php require_once '../views/partials/head.php' ?>
<?php require_once '../views/partials/header.php' ?>
<?php require_once '../loginedOnly.php'; ?>
<?php require_once '../views/controlPanel/manageStudents.php' ?>
<?php require_once '../views/partials/footer.php' ?>