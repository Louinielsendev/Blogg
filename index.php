<?php
    session_start();

    if (isset($_SESSION['id'])){
        include_once 'logoutheader.php';
    }
    else {
        include_once 'loginheader.php';
    }
?>

</body>
</html>