<?php 
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
        $isi = $_POST['isi'];	

        $stmt = $mysqli->prepare("UPDATE bpd SET isi = ? WHERE id = ?");
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
        <title><?php echo $rowpengaturanweb['namaweb'];?> &mdash; BPD</title>
        <?php require 'system/head.php';?>
    </head>

    <body>
        <div id="app">
            <div class="main-wrapper main-wrapper-1">
                
                <?php require 'system/menu.php';?>
                

                <div class="main-content">
                    <div class="row">
                        <div class="col-md-12 col-12 p-2">
                            <div class="section">
                                <div class="section-body bg-white p-3">
                                    <h4 class="text-primary">BPD <?php echo $rowpengaturanweb['namaweb'];?></h4>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="row">
                                                <?php
                                                $stmt = $mysqli->prepare("SELECT * FROM bpd");
                                                $stmt->execute();
                                                $result = $stmt->get_result();
                                                if($result->num_rows === 0) {} else { $row = $result->fetch_assoc(); {?>
                                                    <div class="col-12">
                                                        <div class="card">
                                                            <div class="card-body">
                                                                <form action="" method="post">
                                                                    <input type="hidden" name="id" value="<?php echo $row['id'];?>">
                                                                    <textarea class="summernote" name="isi"><?php echo $row['isi'];?></textarea>
                                                                    <button type="submit" name="simpan" class="btn btn-sm btn-primary mt-2 w-100"><i class="fas fa-save"></i> Simpan Data</button>
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
