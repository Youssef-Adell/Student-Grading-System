<?php
$pageName = "Edit Student";
require_once '../dbConnection.php';

//---GET OLD INFO OF STUDENT TO EDIT IT----
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    $id = $_GET['id'];
    $oldName = $_GET['name'];
}

//---GET NEW DATA AND UPDATE DB WITH IT---
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_GET['id'];
    $name = $_POST['name'];
    $department = $_POST['department'];
    $year = $_POST['year'];

    $statment = $pdo->prepare('UPDATE students SET name=:name, department=:department, year=:year WHERE id=:id');
    $statment->execute(['name' => $name, 'department' => $department, 'year' => $year, 'id' => $id]);
    header('location:manageStudents.php');
}
?>

<?php require_once '../views/partials/head.php' ?>
<?php require_once '../views/partials/header.php' ?>
<?php require_once '../loginedOnly.php'; ?>
<?php require_once '../views/controlPanel/studentForm.php' ?>
<?php require_once '../views/partials/footer.php' ?>