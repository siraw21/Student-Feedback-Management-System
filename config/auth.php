<?php
session_start();
function requireLogin() {
    if (!isset($_SESSION['user_id'])) {
        header("Location: /Student-feedback-management-system/backend/login/login.php");
        exit;
    }
}
function requireRole($role) {
    if (!isset($_SESSION['role']) || $_SESSION['role'] !== $role) {
        header("Location: /Student-feedback-management-system/index.php");
        exit;
    }
}
?>