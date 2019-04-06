<?php
// act of borrowing
require_once 'login.php';
$conn = new mysqli($hn, $un, $pw, $db);
if ($conn->connect_error) die ($conn->connect_error);

$query = "UPDATE users SET book_id = 1  WHERE user_id = 1";
$result = $conn->query($query);
if (!$result) echo "UPDATE failed: $query<br>" .
    $conn->error . "<br><br>";


?>