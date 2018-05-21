<?php
    session_start();
    $_SESSION['mode']='enkripsi';
    header('Location: index.php');

?>