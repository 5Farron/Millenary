<?php
    session_start();
    unset($_SESSION['personne']);
    unset($_SESSION['code']);
    header('Location: ../index.php');
?>