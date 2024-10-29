<?php 
require '../system/koneksi.php';
require 'system/core.php';

session_start();
if(empty($_COOKIE['sudahmasuk'])) {
    echo "<script>window.location.href='$linkaplikasi/dashboard/masuk';</script>";
} else {}


if(isset($_POST['hapus'])) {
    if($modeaplikasi == "Demo") {
        echo "<script>alert('Anda sedang berada di dalam mode Demo, silahkan kontak developer untuk keluar dari mode demo!');window.location.href='$fullurl';</script>";
    } else {
        $id = $_POST['id'];

        $stmtv2 = $mysqli->prepare("SELECT * FROM galeri WHERE id = ?");
        $stmtv2->bind_param("i", $id);
        $stmtv2->execute();
        $resultv2 = $stmtv2->get_result();
        if($resultv2->num_rows === 0) {} else {
            $rowv2 = $resultv2->fetch_assoc();
            $foto = "../uploads/$rowv2[gambar]";

            if(isset($foto) && unlink("$foto")) {
                $stmt = $mysqli->prepare("DELETE FROM galeri WHERE id = ?");
                $stmt->bind_param("i", $id);
                if($stmt->execute()) {
                    echo "<script>alert('Data berhasil dihapus');window.location.href='$fullurl';</script>";
                } else {
                    echo "<script>alert('Data gagal dihapus, silahkan coba lagi!');window.location.href='$fullurl';</script>";
                }
            } else {
                $stmt = $mysqli->prepare("DELETE FROM galeri WHERE id = ?");
                $stmt->bind_param("i", $id);
                if($stmt->execute()) {
                    echo "<script>alert('Data berhasil dihapus');window.location.href='$fullurl';</script>";
                } else {
                    echo "<script>alert('Data gagal dihapus, silahkan coba lagi!');window.location.href='$fullurl';</script>";
                }
            }
        }
    }
}

if(isset($_POST['tambahdata'])) {
    if($modeaplikasi == "Demo") {
        echo "<script>alert('Anda sedang berada di dalam mode Demo, silahkan kontak developer untuk keluar dari mode demo!');window.location.href='$fullurl';</script>";
    } else {
        $ekstensi_diperbolehkan	= array('png','jpg','jpeg','gif','webp');
        $nama = $_FILES['foto']['name'];
        $new = uniqid();
        $newnama = "$new$nama";
        $x = explode('.', $newnama);
        $ekstensi = strtolower(end($x));
        $ukuran	= $_FILES['foto']['size'];
        $file_tmp = $_FILES['foto']['tmp_name'];	

        if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
            if($ukuran < 1044070){			
                move_uploaded_file($file_tmp, '../uploads/'.$newnama);

                $stmt = $mysqli->prepare("INSERT INTO galeri (gambar) VALUES (?)");
                $stmt->bind_param("s", $newnama);
                if($stmt->execute()){
                    echo "<script>alert('Berkas berhasil di upload!');window.location.href='$fullurl';</script>";
                }else{
                    echo "<script>alert('Berkas gagal di upload!');window.location.href='$fullurl';</script>";
                }
            }else{
                echo "<script>alert('Ukuran berkas terlalu besar, silahkan coba lagi!');window.location.href='$fullurl';</script>";

            }
        }else{
            echo "<script>alert('Ekstensi yang diperbolehkan hanya jpg,png,jpeg,gif. Silahkan coba lagi!');window.location.href='$fullurl';</script>";
        }
    }
}

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title><?php echo $rowpengaturanweb['namaweb'];?> &mdash; Galeri</title>
        <?php require 'system/head.php';?>
    </head>

    <body>
        <div id="app">
            <div class="main-wrapper main-wrapper-1">
                
                <?php require 'system/menu.php';?>
                

                <div class="main-content">
                    <section class="section">
                        <div class="section-header">
                            <h1>Galeri</h1>
                            <div class="section-header-breadcrumb">
                                <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#tambahdata"><i class="fas fa-plus"></i> Tambah Data</button>
                            </div>
                        </div>

                        <div class="section-body">

                            <div class="row">
                                <div class="col-12">
                                    <div class="row">
                                        <?php
                                        $stmt = $mysqli->prepare("SELECT * FROM galeri");
                                        $stmt->execute();
                                        $result = $stmt->get_result();
                                        if($result->num_rows === 0) {} else { while($row = $result->fetch_assoc()) {?>
                                            <div class="col-6 col-md-3">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <img class="w-100" src="../uploads/<?php echo $row['gambar'];?>">
                                                        <form action="" method="post">
                                                            <input type="hidden" name="id" value="<?php echo $row['id'];?>">
                                                            <button type="submit" name="hapus" class="btn btn-sm btn-danger mt-2 w-100"><i class="fas fa-trash"></i> Hapus</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php } }?>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </section>

                    <div class="modal fade" id="tambahdata" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form action="" method="post" enctype="multipart/form-data">
                                    <div class="modal-body mb-0">
                                        <div class="form-group">
                                            <label>Pilih Foto</label>
                                            <input type="file" class="form-control" name="foto" required>
                                            <p class="mb-0 text-danger" style="font-size: 11px;">Untuk hasil terbaik, siapkan foto dengan ukuran: lebar 410 piksel & tinggi 300 piksel</p>
                                        </div>
                                    </div>
                                    <div class="modal-footer pt-0 mt-0">
                                        <button type="reset" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="submit" name="tambahdata" class="btn btn-primary">Tambah Data</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
        
        <?php require 'system/bottom.php';?>
    </body>
</html>
