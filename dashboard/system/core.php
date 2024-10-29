<?php 
if(isset($_COOKIE['sudahmasuk'])) {
    $idadmin = $_COOKIE['id'];
    $stmtpengguna = $mysqli->prepare("SELECT * FROM admin WHERE id = '$idadmin' LIMIT 1");
    $stmtpengguna->execute();
    $resultpengguna = $stmtpengguna->get_result();
    if($resultpengguna->num_rows === 0) {} else {
        $rowpengguna = $resultpengguna->fetch_assoc();
        $_COOKIE['sudahmasuk'] = true;
        $_SESSION['id'] = $rowpengguna['id'];
    }
}


?>