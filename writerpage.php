<?php
    session_start();

    if (isset($_SESSION['ID'])){
        include_once 'logoutheader.php';
    }
    else {
        header("Location: index.php");
    }
?>

<form action="writer.inc.php" method="POST">
    <input type="text" name="rubrik" placeholder="Rubrik">
    <textarea name="content" id="textarea" cols="30" rows="10"></textarea>
    <button type="submit" name="submit">Publicera</button>
</form>

    
</body>
</html>