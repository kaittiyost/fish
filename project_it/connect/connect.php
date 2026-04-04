<?php
$host = "127.0.0.1";
$dbuser = "fishweb";
$password = "12345";
$dbname = "fishdb";

// สร้างการเชื่อมต่อ
$conn = new mysqli($host, $dbuser, $password, $dbname);

// ตรวจสอบการเชื่อมต่อ
if ($conn->connect_error) {
	die("Not Connect Database: " . $conn->connect_error);
}

// ตั้งค่า charset
$conn->set_charset("utf8");

echo "Connect Success";
?>