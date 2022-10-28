<?php
require_once 'db.inc.php';
// Hämtar blogginlägg från data basen genon en sql-querry och publicerar dem på index-sidan.
function getBlogPosts($connection){
    $sql = "SELECT postId, content, authorId, title, uploadDate, users.Fullname  FROM blogposts JOIN users ON blogposts.authorId = users.usersId ORDER BY uploadDate DESC;";
    $result = mysqli_query($connection, $sql);
    $resultCheck = mysqli_num_rows($result);

    $output = "<div id=wrapper>";
    if ($resultCheck > 0){
        while ($row = mysqli_fetch_assoc($result)) {
            $output .= "<a href='specificPostPage.php?fullPost=" . $row['postId'] . "'><div class=blogPost><div><h2>". $row['title'] . "</h2>" . "<p class=date>" . $row['uploadDate'] . "</p></div>" . "<p class=content>" . $row['content'] . "</p>" . "<h3>" . $row['Fullname'] . "</h3></div></a>"  ;
        }
    }
    $output .= "</div>";

    return $output;
}