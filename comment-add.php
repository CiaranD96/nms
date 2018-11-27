<?php
include'includes/dbconx.php';
$commentId = htmlspecialchars(mysqli_real_escape_string($conn, $_POST['comment_id'] ? $_POST['comment_id'] : ""));
$comment = htmlspecialchars(mysqli_real_escape_string($conn, $_POST['comment'] ? $_POST['comment'] : ""));
$commentSenderName = htmlspecialchars(mysqli_real_escape_string($conn, $_POST['name'] ? $_POST['name'] : ""));
$date = date('Y-m-d H:i:s');

//insert variable data in to the database
$sql = "INSERT INTO comments(parent_comment_id,comment,comment_sender_name,date) VALUES ('" . $commentId . "','" . $comment . "','" . $commentSenderName . "','" . $date . "')";

$result = mysqli_query($conn, $sql);

if (! $result) {
    $result = mysqli_error($conn);
}
echo $result;
?>
