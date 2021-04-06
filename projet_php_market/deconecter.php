<?php
    session_start();
    // $_SESSION['nom'] = null;
    session_destroy();
    header('Location: index.php');
?>