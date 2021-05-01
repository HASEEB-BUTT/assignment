<?php
<html>
</html>
    session_start();
    // Destroy session
    if(session_destroy()) {
        // Redirecting To Home Page
        header("Location: login.php");
    }
?>
