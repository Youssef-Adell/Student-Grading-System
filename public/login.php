<?php
$pageName = "Admin Login";

//---open if only user is not logined---
session_start();
if (isset($_SESSION['isLogined']))
    header('location:controlPanel.php');

require_once '../dbConnection.php';

$alert = "";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $statment = $pdo->prepare('SELECT * FROM admins');
    $statment->execute();
    $data = $statment->fetch(PDO::FETCH_ASSOC);

    if ($data['name'] == $username && $data['password'] == $password) {
        session_start();
        $_SESSION['isLogined'] = true;
        header('location:controlPanel.php');
    } else {
        $alert = "ERROR, Try again";
    }
}
?>

<?php require_once '../views/partials/head.php' ?>
<?php require_once '../views/loginForm.php' ?>