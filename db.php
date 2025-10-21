<?php
$servername = "localhost";
$username = "root";
$password = ""; // 根據你的 XAMPP 設定修改密碼
$dbname = "ComputerScience";

// 建立連線
$conn = new mysqli($servername, $username, $password, $dbname);

// 檢查連線
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}
// echo "Connected successfully";


// $conn->close(); // 用完記得關閉連線
?>

