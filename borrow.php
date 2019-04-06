<?php
// adding stuff into our database
require_once 'login.php';
$conn = new mysqli($hn, $un, $pw, $db);
if ($conn->connect_error) die ($conn->connect_error);

$query = "INSERT INTO users(user_id, user_name, password, book_id) VALUES" .
"('', 'Pola', 'Pass12345', '')";
$result = $conn->query($query);
if (!$result) echo "INSERT failed: $query<br>" .
    $conn->error . "<br><br>";
?>