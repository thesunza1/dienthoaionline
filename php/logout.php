<?php
    session_start();
    session_destroy();
    session_commit();
    header("Location:./index.php");
?>