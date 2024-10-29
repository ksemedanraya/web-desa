<?php 
require '../system/koneksi.php';
require 'system/core.php';

session_start();
if(empty($_COOKIE['sudahmasuk'])) {
    echo "<script>window.location.href='$linkaplikasi/dashboard/masuk';</script>";
} else {}


if(isset($_POST['simpanvisi'])) {
    if($modeaplikasi == "Demo") {
        echo "<script>alert('Anda sedang berada di dalam mode Demo, silahkan kontak developer untuk keluar dari mode demo!');window.location.href='$fullurl';</script>";
    } else {
   
        $id = $_POST['id'];	
        $isi = $_POST['isi'];
        
        if($_FILES['foto']['name'] == "") {
            $stmt = $mysqli->prepare("UPDATE visi SET isi = ? WHERE id = ?");
            $stmt->bind_param("si", $isi, $id);
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

            $stmtv2 = $mysqli->prepare("SELECT * FROM visi WHERE id = ?");
            $stmtv2->bind_param("i", $id);
            $stmtv2->execute();
            $resultv2 = $stmtv2->get_result();
            if($resultv2->num_rows === 0) {} else {
                $rowv2 = $resultv2->fetch_assoc();
                $foto = "../uploads/$rowv2[foto]";
                if(isset($foto) && unlink("$foto")) {
                    if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
                        if($ukuran < 1044070){			
                            move_uploaded_file($file_tmp, '../uploads/'.$newnama);
                
                            $stmt = $mysqli->prepare("UPDATE visi SET isi = ?, foto = ? WHERE id = ?");
                            $stmt->bind_param("ssi", $isi, $newnama, $id);
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
                    $stmt = $mysqli->prepare("UPDATE visi SET isi = ? WHERE id = ?");
                    $stmt->bind_param("si", $isi, $id);
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

if(isset($_POST['simpanmisi'])) {
    if($modeaplikasi == "Demo") {
        echo "<script>alert('Anda sedang berada di dalam mode Demo, silahkan kontak developer untuk keluar dari mode demo!');window.location.href='$fullurl';</script>";
    } else {
   
        $id = $_POST['id'];	
        $isi = $_POST['isi'];	

        if($_FILES['foto']['name'] == "") {
            $stmt = $mysqli->prepare("UPDATE misi SET isi = ? WHERE id = ?");
            $stmt->bind_param("si", $isi, $id);
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

            $stmtv2 = $mysqli->prepare("SELECT * FROM misi WHERE id = ?");
            $stmtv2->bind_param("i", $id);
            $stmtv2->execute();
            $resultv2 = $stmtv2->get_result();
            if($resultv2->num_rows === 0) {} else {
                $rowv2 = $resultv2->fetch_assoc();
                $foto = "../uploads/$rowv2[foto]";
                if(isset($foto) && unlink("$foto")) {
                    if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
                        if($ukuran < 1044070){			
                            move_uploaded_file($file_tmp, '../uploads/'.$newnama);
                
                            $stmt = $mysqli->prepare("UPDATE misi SET isi = ?, foto = ? WHERE id = ?");
                            $stmt->bind_param("ssi", $isi, $newnama, $id);
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
                    $stmt = $mysqli->prepare("UPDATE misi SET isi = ? WHERE id = ?");
                    $stmt->bind_param("si", $isi, $id);
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

if(isset($_POST['simpangambaranumum'])) {
    if($modeaplikasi == "Demo") {
        echo "<script>alert('Anda sedang berada di dalam mode Demo, silahkan kontak developer untuk keluar dari mode demo!');window.location.href='$fullurl';</script>";
    } else {
   
        $id = $_POST['id'];	
        $isi = $_POST['isi'];	

        $stmt = $mysqli->prepare("UPDATE gambaranumum SET isi = ? WHERE id = ?");
        $stmt->bind_param("si", $isi, $id);
        if($stmt->execute()){
            echo "<script>alert('Data berhasil di perbarui!');window.location.href='$fullurl';</script>";
        }else{
            echo "<script>alert('Data gagal di perbarui!');window.location.href='$fullurl';</script>";
        }
    }
}

if(isset($_POST['simpansejarah'])) {
    if($modeaplikasi == "Demo") {
        echo "<script>alert('Anda sedang berada di dalam mode Demo, silahkan kontak developer untuk keluar dari mode demo!');window.location.href='$fullurl';</script>";
    } else {
   
        $id = $_POST['id'];	
        $isi = $_POST['isi'];	

        $stmt = $mysqli->prepare("UPDATE sejarah SET isi = ? WHERE id = ?");
        $stmt->bind_param("si", $isi, $id);
        if($stmt->execute()){
            echo "<script>alert('Data berhasil di perbarui!');window.location.href='$fullurl';</script>";
        }else{
            echo "<script>alert('Data gagal di perbarui!');window.location.href='$fullurl';</script>";
        }
    }
}

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title><?php echo $rowpengaturanweb['namaweb'];?> &mdash; Dashboard</title>
        <?php require 'system/head.php';?>
    </head>

    <body>
        <div id="app">
            <div class="main-wrapper main-wrapper-1">
                
                <?php require 'system/menu.php';?>
                

                <div class="main-content">
                    <div class="row">
                        <div class="col-md-6 col-12 p-2">
                            <div class="section">
                                <div class="section-body bg-white p-3">
                                    <h4 class="text-primary">Visi <?php echo $rowpengaturanweb['namaweb'];?></h4>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="row">
                                                <?php
                                                $stmt = $mysqli->prepare("SELECT * FROM visi");
                                                $stmt->execute();
                                                $result = $stmt->get_result();
                                                if($result->num_rows === 0) {} else { $row = $result->fetch_assoc(); {?>
                                                    <div class="col-12">
                                                        <div class="card">
                                                            <div class="card-body">
                                                                <form action="" method="post" autocomplete="off" enctype="multipart/form-data">
                                                                    <div class="form-group">
                                                                        <label>Foto</label>
                                                                        <input type="file" accept="image/*" class="form-control"  name="foto">
                                                                    </div>
                                                                    <input type="hidden" name="id" value="<?php echo $row['id'];?>">
                                                                    <textarea class="summernote" name="isi"><?php echo $row['isi'];?></textarea>
                                                                    <button type="submit" name="simpanvisi" class="btn btn-sm btn-primary mt-2 w-100"><i class="fas fa-save"></i> Simpan Data</button>
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
                        <div class="col-md-6 col-12 p-2">
                            <div class="section">
                                <div class="section-body bg-white p-3">
                                    <h4 class="text-primary">Misi <?php echo $rowpengaturanweb['namaweb'];?></h4>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="row">
                                                <?php
                                                $stmt = $mysqli->prepare("SELECT * FROM misi");
                                                $stmt->execute();
                                                $result = $stmt->get_result();
                                                if($result->num_rows === 0) {} else { $row = $result->fetch_assoc(); {?>
                                                    <div class="col-12">
                                                        <div class="card">
                                                            <div class="card-body">
                                                                <form action="" method="post" autocomplete="off" enctype="multipart/form-data">
                                                                    <div class="form-group">
                                                                        <label>Foto</label>
                                                                        <input type="file" accept="image/*" class="form-control"  name="foto">
                                                                    </div>
                                                                    <input type="hidden" name="id" value="<?php echo $row['id'];?>">
                                                                    <textarea class="summernote" name="isi"><?php echo $row['isi'];?></textarea>
                                                                    <button type="submit" name="simpanmisi" class="btn btn-sm btn-primary mt-2 w-100"><i class="fas fa-save"></i> Simpan Data</button>
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
                        <div class="col-md-12 col-12 p-2">
                            <div class="section">
                                <div class="section-body bg-white p-3">
                                    <h4 class="text-primary">Gambaran Umum <?php echo $rowpengaturanweb['namaweb'];?></h4>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="row">
                                                <?php
                                                $stmt = $mysqli->prepare("SELECT * FROM gambaranumum");
                                                $stmt->execute();
                                                $result = $stmt->get_result();
                                                if($result->num_rows === 0) {} else { $row = $result->fetch_assoc(); {?>
                                                    <div class="col-12">
                                                        <div class="card">
                                                            <div class="card-body">
                                                                <form action="" method="post">
                                                                    <input type="hidden" name="id" value="<?php echo $row['id'];?>">
                                                                    <textarea class="summernote" name="isi"><?php echo $row['isi'];?></textarea>
                                                                    <button type="submit" name="simpangambaranumum" class="btn btn-sm btn-primary mt-2 w-100"><i class="fas fa-save"></i> Simpan Data</button>
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

                        <div class="col-md-12 col-12 p-2">
                            <div class="section">
                                <div class="section-body bg-white p-3">
                                    <h4 class="text-primary">Sejarah <?php echo $rowpengaturanweb['namaweb'];?></h4>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="row">
                                                <?php
                                                $stmt = $mysqli->prepare("SELECT * FROM sejarah");
                                                $stmt->execute();
                                                $result = $stmt->get_result();
                                                if($result->num_rows === 0) {} else { $row = $result->fetch_assoc(); {?>
                                                    <div class="col-12">
                                                        <div class="card">
                                                            <div class="card-body">
                                                                <form action="" method="post">
                                                                    <input type="hidden" name="id" value="<?php echo $row['id'];?>">
                                                                    <textarea class="summernote" name="isi"><?php echo $row['isi'];?></textarea>
                                                                    <button type="submit" name="simpansejarah" class="btn btn-sm btn-primary mt-2 w-100"><i class="fas fa-save"></i> Simpan Data</button>
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
