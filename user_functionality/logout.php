<?php
// Always start this first
session_start();

// Destroying the session clears the $_SESSION variable, thus "logging" the user
// out. This also happens automatically when the browser is closed
session_destroy();
header("Location: main_user.php");
?>

<html>
    <body>
        <h1>logged off</h1>
    </body>
</html>