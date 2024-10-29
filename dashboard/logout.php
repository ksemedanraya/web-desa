<?php 
    require '../system/koneksi.php';

    if(empty($_COOKIE['sudahmasuk'])) {
        header("Location: $linkaplikasi/dashboard/masuk");
        exit();
    } else {
        setcookie("sudahmasuk", "", -2147483647);
        setcookie("id", "", -2147483647);
        session_unset();
        header("Location: $linkaplikasi/dashboard/masuk");
        exit();
    }
?>