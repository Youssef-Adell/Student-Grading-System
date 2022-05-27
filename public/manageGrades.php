<?php
$pageName = "Manage Grades";
require_once '../dbConnection.php';

$statment = $pdo->prepare('SELECT * FROM grades g, students s WHERE g.student_id = s.id;');
$statment->execute();
$data = $statment->fetchAll();
?>

<?php require_once '../views/partials/head.php' ?>
<?php require_once '../views/partials/header.php' ?>
<?php require_once '../loginedOnly.php'; ?>
<?php require_once '../views/controlPanel/manageGrades.php' ?>
<?php require_once '../views/partials/footer.php' ?>