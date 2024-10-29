<?php
error_reporting(0);
date_default_timezone_set('Asia/Jakarta');

$linkaplikasi = "http://localhost/sc_organisasidesa";
$mysqli = new mysqli("localhost", "root", "", "organisasidesa");
if($mysqli->connect_error) {
  exit('Error connecting to database'); 
}
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$mysqli->set_charset("utf8mb4");

$fullurl = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$pathurl = $_SERVER['REQUEST_URI'];

$satu = "1";
$stmtpengaturanweb = $mysqli->prepare("SELECT * FROM pengaturanweb WHERE id = ?");
$stmtpengaturanweb->bind_param("i", $satu);
$stmtpengaturanweb->execute();
$resultpengaturanweb = $stmtpengaturanweb->get_result();
if($resultpengaturanweb->num_rows === 0) {} else {
    $rowpengaturanweb = $resultpengaturanweb->fetch_assoc();
}

$modeaplikasi = "Live"; //Demo & Live

?>