<?php
$pageName = "Add Student";
require_once '../dbConnection.php';

$oldName = "";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $department = $_POST['department'];
    $year = $_POST['year'];

    $statment = $pdo->prepare('INSERT INTO students(name, department, year) VALUES (:name, :department, :year)');
    $statment->execute(['name' => $name, 'department' => $department, 'year' => $year]);
    header('location:manageStudents.php');
}
?>

<?php require_once '../views/partials/head.php' ?>
<?php require_once '../views/partials/header.php' ?>
<?php require_once '../loginedOnly.php'; ?>
<?php require_once '../views/controlPanel/studentForm.php' ?>
<?php require_once '../views/partials/footer.php' ?>