<?php
$host = "localhost";
$user = "root";  // เปลี่ยนเป็น username ของคุณ
$pass = "";      // เปลี่ยนเป็นรหัสผ่านของคุณ
$dbname = "crud_db";

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
