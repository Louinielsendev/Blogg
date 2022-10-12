<?php
    session_start();

    if (isset($_SESSION['ID'])){
        include_once 'logoutheader.php';
    }
    else {
        header("Location: index.php");
    }
?>

<form action="" method="post">
    <input type="text">
</form>

    
</body>
</html>