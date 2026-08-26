<?php 
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: /banco_ideas/dashboards/loginDashboard.php");
    exit;
}
?>