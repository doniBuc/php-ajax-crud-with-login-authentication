<?php
// Redirect the user to the login page if a session does not exist
function validate_session() {
    if (!isset($_SESSION['account_id'])) {
        header("Location: index.php");
        exit();
    }
}

// Logs the user automatically if a session exists
function auto_login() {
    if (isset($_SESSION['account_id'])) {
        header("Location: dashboard.php");
        exit();
    }
}
?>