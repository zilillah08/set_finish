<?php
$host = 'localhost';        
$username = 'mitg9525_mitra_jamur_admin';         
$password = '0_A(*c5baaW@';            
$dbname = 'mitg9525_worksmartful1';

$conn = new mysqli($host, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>
