<?php
    session_start();
        if (!isset($_SESSION['userData1'])) {
            header('location:frontend/blog/index.php');
        } else {
            header('location:backend/layout/dashboard.php');
        }
?>