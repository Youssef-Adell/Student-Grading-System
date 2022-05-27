<?php
$pageName = "Get Grades";
require_once '../dbConnection.php';
$search = "";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $search = $_POST['search'];

    $statment = $pdo->prepare('SELECT * FROM grades g, students s WHERE id=:id;');
    $statment->execute(['id' => $search]);
    $data = $statment->fetch(PDO::FETCH_ASSOC);
}
?>
<?php require_once '../views/partials/head.php' ?>
<?php require_once '../views/partials/header.php' ?>
<?php require_once '../views/gradesTable.php' ?>
<?php require_once '../views/partials/footer.php' ?>
