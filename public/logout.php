<?php
session_start();
require_once '../loginedOnly.php';

// remove all session variables
session_unset();
// destroy the session
session_destroy();

header('location:index.php');
