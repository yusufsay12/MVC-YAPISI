<?php
$servername = "sql112.infinityfree.com";  
$username = "	if0_37711681";                
$password = "gU3BMuChh2JKC";                
$dbname = "if0_37711681_denemedb2121";         

// Veritabanı bağlantısı
$conn = new mysqli($servername, $username, $password, $dbname);

// Bağlantı kontrolü
if ($conn->connect_error) {
    die("Veritabanı bağlantısı başarısız: " . $conn->connect_error);
}

// Karakter setini ayarla
$conn->set_charset("utf8mb4");
?>