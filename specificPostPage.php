<?php
session_start();
    require_once 'functions/specificPostPage.inc.php';

    if (isset($_SESSION['ID'])){
        include_once 'headers/logoutheader.php';
    }
    else {
        include_once 'headers/loginheader.php';
    }

    $post = $_GET['fullPost'];
    $fullpost = getFullPost($connection, $post);
    echo $fullpost;
    