<?php
session_start();
if (isset($_POST['submit'])){
    require_once 'db.inc.php';
    $title = $_POST["title"];
    $content = $_POST["content"];

    // Sparar blogginlägg i databasen
    function createPost($connection, $title, $content){
        $sql = "INSERT INTO blogPosts (authorId, title, uploadDate, content) VALUES (?, ?, ?, ?);";
        $stmt = mysqli_stmt_init($connection);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            
            header("location: index.php");
            exit();
        }
        $date = date("Y-m-d H:i:s");
        $authorId = $_SESSION['ID'];

        mysqli_stmt_bind_param($stmt, "ssss", $authorId, $title, $date, $content);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
        header ("location: writerpage.php?succes");
    }
    createPost($connection, $title, $content);
}