<?php
    session_start();

    if (isset($_SESSION['ID'])){
        include_once 'headers/logoutheader.php';
    }
    else {
        header("Location: index.php");
    }
?>

<form id="writer" action="functions/writer.inc.php" method="POST">
    <input type="text" name="title" placeholder="Rubrik">
    <textarea name="content" id="textarea" cols="30" rows="10"></textarea>
    <button type="submit" name="submit">Publicera</button>
</form>
<?php
    if (isset($_GET["succes"])){
        echo "<p class=message>Inlägget publicerades!<p>";
    }
    if (isset($_GET["titleError"])){
        echo "<p class=message>Rubriken är tom!<p>";
        
    }
    if (isset($_GET["contentError"])){
        echo "<p class=message>Brödtexten är tom!<p>";
    }
    ?>
</body>
</html>