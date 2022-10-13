
<?php
    session_start();
    require_once 'functions/loadPosts.inc.php';
    require_once 'functions/db.inc.php';

    if (isset($_SESSION['ID'])){
        include_once 'headers/logoutheader.php';
    }
    else {
        include_once 'headers/loginheader.php';
    }

    $blogPosts = getBlogPosts($connection);
    echo $blogPosts;
?>

</body>
</html>