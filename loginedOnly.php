<?php
if (!isset($_SESSION['isLogined'])) {
    header('location:index.php');
}
