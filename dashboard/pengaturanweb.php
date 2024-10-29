<?php 
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

require '../system/koneksi.php';
require 'system/core.php';

session_start();
if(empty($_COOKIE['sudahmasuk'])) {
    echo "<script>window.location.href='$linkaplikasi/dashboard/masuk';</script>";
} else {}

if(isset($_POST['simpan'])) {
    if($modeaplikasi == "Demo") {
        echo "<script>alert('Anda sedang berada di dalam mode Demo, silahkan kontak developer untuk keluar dari mode demo!');window.location.href='$fullurl';</script>";
    } else {
   
        $id = $_POST['id'];	
        $namaweb = $_POST['namaweb'];	
        $nohp = $_POST['nohp'];
        $email = $_POST['email'];
        $lokasi = $_POST['lokasi'];
        $googlemaps = $_POST['googlemaps'];

        if($_FILES['foto']['name'] == "") {
            $stmt = $mysqli->prepare("UPDATE pengaturanweb SET namaweb = ?, lokasi = ?, googlemaps = ?, nohp = ?, email = ? WHERE id = ?");
            $stmt->bind_param("sssssi", $namaweb, $lokasi, $googlemaps, $nohp, $email, $id);
            if($stmt->execute()){
                echo "<script>alert('Data berhasil di perbarui!');window.location.href='$fullurl';</script>";
            }else{
                echo "<script>alert('Data gagal di perbarui!');window.location.href='$fullurl';</script>";
            }
        } else {
            $ekstensi_diperbolehkan	= array('png','jpg','jpeg','gif','webp');
            $nama = $_FILES['foto']['name'];
            $new = uniqid();
            $newnama = "$new$nama";
            $x = explode('.', $newnama);
            $ekstensi = strtolower(end($x));
            $ukuran	= $_FILES['foto']['size'];
            $file_tmp = $_FILES['foto']['tmp_name'];	

            $stmtv2 = $mysqli->prepare("SELECT * FROM pengaturanweb WHERE id = ?");
            $stmtv2->bind_param("i", $id);
            $stmtv2->execute();
            $resultv2 = $stmtv2->get_result();
            if($resultv2->num_rows === 0) {} else {
                $rowv2 = $resultv2->fetch_assoc();
                $foto = "../uploads/$rowv2[logo]";
                if(isset($foto) && unlink("$foto")) {
                    if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
                        if($ukuran < 1044070){			
                            move_uploaded_file($file_tmp, '../uploads/'.$newnama);

                            $stmt = $mysqli->prepare("UPDATE pengaturanweb SET namaweb = ?, logo = ?, lokasi = ?, googlemaps = ?, nohp = ?, email = ? WHERE id = ?");
                            $stmt->bind_param("ssssssi", $namaweb, $newnama, $lokasi, $googlemaps, $nohp, $email, $id);
                            if($stmt->execute()) {
                                echo "<script>alert('Data berhasil diperbarui');window.location.href='$fullurl';</script>";
                            } else {
                                echo "<script>alert('Data gagal diperbarui, silahkan coba lagi!');window.location.href='$fullurl';</script>";
                            }
                        }else{
                            echo "<script>alert('Ukuran berkas terlalu besar, silahkan coba lagi!');window.location.href='$fullurl';</script>";
                
                        }
                    }else{
                        echo "<script>alert('Ekstensi yang diperbolehkan hanya jpg,png,jpeg,gif. Silahkan coba lagi!');window.location.href='$fullurl';</script>";
                    }
                } else {
                    $stmt = $mysqli->prepare("UPDATE pengaturanweb SET namaweb = ?, lokasi = ?, googlemaps = ?, nohp = ?, email = ? WHERE id = ?");
                    $stmt->bind_param("sssssi", $namaweb, $lokasi, $googlemaps, $nohp, $email, $id);
                    if($stmt->execute()){
                        echo "<script>alert('Data berhasil di perbarui!');window.location.href='$fullurl';</script>";
                    }else{
                        echo "<script>alert('Data gagal di perbarui!');window.location.href='$fullurl';</script>";
                    }
                }
            }
        }
    }
}

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title><?php echo $rowpengaturanweb['namaweb'];?> &mdash; Pengaturan Web</title>
        <?php require 'system/head.php';?>
    </head>

    <body>
        <div id="app">
            <div class="main-wrapper main-wrapper-1">
                
                <?php require 'system/menu.php';?>
        
                <div class="main-content">
                    <div class="row">
                        <div class="col-12 p-2">
                            <div class="section">
                                <div class="section-body bg-white p-3">
                                    <h4 class="text-primary">Pengaturan Web</h4>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="row">
                                                <?php
                                                $stmt = $mysqli->prepare("SELECT * FROM pengaturanweb");
                                                $stmt->execute();
                                                $result = $stmt->get_result();
                                                if($result->num_rows === 0) {} else { $row = $result->fetch_assoc(); {?>
                                                    <div class="col-12">
                                                        <div class="card">
                                                            <div class="card-body">
                                                                <form action="" method="post" enctype="multipart/form-data">
                                                                    <div class="row">
                                                                        <div class="col-md-3 col-12">
                                                                            <br><br>
                                                                            <img src="../uploads/<?php echo $row['logo'];?>" class="w-100">
                                                                        </div>
                                                                        <div class="col-md-9 col-12">
                                                                            <div class="form-group">
                                                                                <label>Nama Website</label>
                                                                                <input type="text" name="namaweb" required class="form-control" value="<?php echo $row['namaweb'];?>" placeholder="Masukkan Nama Website...">
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label>Logo Website</label>
                                                                                <input type="file" name="foto" class="form-control" accept="image/*">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-12">
                                                                            <div class="form-group">
                                                                                <label>Lokasi Organisasi</label>
                                                                                <input type="text" name="lokasi" required class="form-control" value="<?php echo $row['lokasi'];?>" placeholder="Masukkan lokasi organisasi...">
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label>Email Organisasi</label>
                                                                                <input type="text" name="email" required class="form-control" value="<?php echo $row['email'];?>" placeholder="Masukkan email organisasi...">
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label>No Hp Organisasi</label>
                                                                                <input type="text" name="nohp" required class="form-control" value="<?php echo $row['nohp'];?>" placeholder="Masukkan no hp organisasi...">
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label>Google Maps Organisasi</label>
                                                                                <input type="text" name="googlemaps" required class="form-control" value="<?php echo $row['googlemaps'];?>" placeholder="Masukkan Link Google Maps Organisasi...">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <input type="hidden" name="id" value="<?php echo $row['id'];?>">
                                                                    <button type="submit" name="simpan" class="btn btn-sm btn-primary mt-2 w-100"><i class="fas fa-save"></i> Simpan Pengaturan</button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php } }?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>                        
                    </div>
                </div>
            </div>
        </div>
        
        <?php require 'system/bottom.php';?>
    </body>
</html>
