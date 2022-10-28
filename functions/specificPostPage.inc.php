<?php
require_once 'functions/db.inc.php';
// Hämtar ett specifikt blogginlägg genom blogginläggets id
function getFullPost($connection, $post){
    $sql = "SELECT postId, content, authorId, title, uploadDate, users.Fullname  FROM blogposts JOIN users ON blogposts.authorId = users.usersId WHERE postId= ".$post.";";
$result = mysqli_query($connection, $sql);
$resultCheck = mysqli_num_rows($result);

$output = "<div id=wrapper>";
if ($resultCheck > 0){
    $row = mysqli_fetch_assoc($result);
    $output .= "<div id=fullBlogPost><a href=index.php><img src=img/backarrow.svg></a><div><h2>". $row['title'] . "</h2>" . "<p>" . $row['uploadDate'] . "</p></div>" . "<p>" . $row['content'] . "</p>" . "<h3>" . $row['Fullname'] . "</h3></div>"  ;
}
$output .= "</div>";

return $output;
}