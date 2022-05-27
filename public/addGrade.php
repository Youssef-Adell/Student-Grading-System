<?php
$pageName = "Add Grade";
require_once '../dbConnection.php';

$alert = "";
try {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $st_id = $_POST['student_id'];
        $c1 = $_POST['course1'];
        $c2 = $_POST['course2'];
        $c3 = $_POST['course3'];
        $c4 = $_POST['course4'];

        $statment = $pdo->prepare('INSERT INTO grades(student_id, course1, course2, course3, course4) VALUES (:st_id, :c1, :c2, :c3, :c4)');
        $statment->execute(['st_id' => $st_id, 'c1' => $c1, 'c2' => $c2, 'c3' => $c3, 'c4' => $c4]);
        header('location:manageGrades.php');
    }
} catch (Exception $e) {
    $alert = "ERROR<br>The Grade of this Student may be added before<br>OR There is No Student With This ID";
}
?>

<?php require_once '../views/partials/head.php' ?>
<?php require_once '../views/partials/header.php' ?>
<?php require_once '../loginedOnly.php'; ?>
<?php require_once '../views/controlPanel/gradesForm.php' ?>
<?php require_once '../views/partials/footer.php' ?>