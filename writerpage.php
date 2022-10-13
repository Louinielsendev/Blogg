<?php
    session_start();

    if (isset($_SESSION['ID'])){
        include_once 'headers/logoutheader.php';
    }
    else {
        header("Location: index.php");
    }
?>

<form action="functions/writer.inc.php" method="POST">
    <input type="text" name="title" placeholder="Rubrik">
    <textarea name="content" id="textarea" cols="30" rows="10"></textarea>
    <button type="submit" name="submit">Publicera</button>
</form>
<?php
    if (isset($_GET["succes"])){
        echo "<p>Inlägget publicerades!<p>";
    }
    ?>
</body>
</html>