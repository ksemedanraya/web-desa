<?php 
require '../system/koneksi.php';
require 'system/core.php';

session_start();
if(empty($_COOKIE['sudahmasuk'])) {
    echo "<script>window.location.href='$linkaplikasi/dashboard/masuk';</script>";
} else {}


if(isset($_POST['tambahdata'])) {
    if($modeaplikasi == "Demo") {
        echo "<script>alert('Anda sedang berada di dalam mode Demo, silahkan kontak developer untuk keluar dari mode demo!');window.location.href='$fullurl';</script>";
    } else {
        $judul = $_POST['judul'];
        $subjudul = $_POST['subjudul'];
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

                $stmt = $mysqli->prepare("INSERT INTO destinasiwisata (judul, isi, foto) VALUES (?, ?, ?)");
                $stmt->bind_param("sss", $judul, $subjudul, $newnama);
                if($stmt->execute()) {
                    echo "<script>alert('Data berhasil ditambah');window.location.href='$fullurl';</script>";
                } else {
                    echo "<script>alert('Data gagal ditambah, silahkan coba lagi!');window.location.href='$fullurl';</script>";
                }
            }else{
                echo "<script>alert('Ukuran berkas terlalu besar, silahkan coba lagi!');window.location.href='$fullurl';</script>";

            }
        }else{
            echo "<script>alert('Ekstensi yang diperbolehkan hanya jpg,png,jpeg,gif,webp. Silahkan coba lagi!');window.location.href='$fullurl';</script>";
        }
    }
}

if(isset($_POST['simpan'])) {
    if($modeaplikasi == "Demo") {
        echo "<script>alert('Anda sedang berada di dalam mode Demo, silahkan kontak developer untuk keluar dari mode demo!');window.location.href='$fullurl';</script>";
    } else {
        $judul = $_POST['judul'];
        $subjudul = $_POST['subjudul'];
        $id = $_POST['id'];
        
        if($_FILES['foto']['name'] == "") {
            $stmt = $mysqli->prepare("UPDATE destinasiwisata SET judul = ?, isi = ? WHERE id = ?");
            $stmt->bind_param("sss", $judul, $subjudul, $id);
            if($stmt->execute()) {
                echo "<script>alert('Data berhasil diperbarui');window.location.href='$fullurl';</script>";
            } else {
                echo "<script>alert('Data gagal diperbarui, silahkan coba lagi!');window.location.href='$fullurl';</script>";
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

            $stmtv2 = $mysqli->prepare("SELECT * FROM destinasiwisata WHERE id = ?");
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
                
                            $stmt = $mysqli->prepare("UPDATE destinasiwisata SET judul = ?, isi = ?, foto = ? WHERE id = ?");
                            $stmt->bind_param("ssss", $judul, $subjudul, $newnama, $id);
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
                    $stmt = $mysqli->prepare("UPDATE destinasiwisata SET judul = ?, isi = ? WHERE id = ?");
                    $stmt->bind_param("sss", $judul, $subjudul, $id);
                    if($stmt->execute()) {
                        echo "<script>alert('Data berhasil diperbarui');window.location.href='$fullurl';</script>";
                    } else {
                        echo "<script>alert('Data gagal diperbarui, silahkan coba lagi!');window.location.href='$fullurl';</script>";
                    }
                }
            }
        }
    }
}


if(isset($_POST['hapus'])) {
    if($modeaplikasi == "Demo") {
        echo "<script>alert('Anda sedang berada di dalam mode Demo, silahkan kontak developer untuk keluar dari mode demo!');window.location.href='$fullurl';</script>";
    } else {
        $id = $_POST['id'];

        $stmtv2 = $mysqli->prepare("SELECT * FROM destinasiwisata WHERE id = ?");
        $stmtv2->bind_param("i", $id);
        $stmtv2->execute();
        $resultv2 = $stmtv2->get_result();
        if($resultv2->num_rows === 0) {} else {
            $rowv2 = $resultv2->fetch_assoc();
            $foto = "../uploads/$rowv2[foto]";

            if(isset($foto) && unlink("$foto")) {
                $stmt = $mysqli->prepare("DELETE FROM destinasiwisata WHERE id = ?");
                $stmt->bind_param("i", $id);
                if($stmt->execute()) {
                    echo "<script>alert('Data berhasil dihapus');window.location.href='$fullurl';</script>";
                } else {
                    echo "<script>alert('Data gagal dihapus, silahkan coba lagi!');window.location.href='$fullurl';</script>";
                }
            } else {
                $stmt = $mysqli->prepare("DELETE FROM destinasiwisata WHERE id = ?");
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


?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title><?php echo $rowpengaturanweb['namaweb'];?> &mdash; Destinasi Wisata</title>
        <?php require 'system/head.php';?>
        <link rel="stylesheet" href="assets/modules/summernote/summernote-bs4.css" />
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css"/>
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/2.2.3/css/buttons.bootstrap4.min.css"/>
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.3.0/css/responsive.bootstrap4.min.css"/> 
        <style>
            .dt-buttons {
                display: block !important;
                margin: 0px 0px 10px 0px !important;
            }

            #datatable_filter {
                float: right !important;
                margin-top: 4px !important;
            }

            .dataTables_length {
                float: left !important;
            }

            .buttons-copy {
                width: 25% !important;
            }

            .buttons-csv {
                width: 24.5% !important;
            }

            .buttons-excel {
                width: 24.5% !important;
            }

            .buttons-pdf {
                width: 25% !important;
            }
        </style>
    </head>

    <body>
        <div id="app">
            <div class="main-wrapper main-wrapper-1">
                
                <?php require 'system/menu.php';?>
                

                <div class="main-content">
                    <section class="section">
                        <div class="section-header">
                            <h1>Destinasi Wisata</h1>
                            <div class="section-header-breadcrumb">
                                <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#tambahdata"><i class="fas fa-plus"></i> Tambah Data</button>
                            </div>
                        </div>

                        <div class="section-body">

                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div id="reminders_wrapper"></div>
                                        <div class="card-body">
                                            <div class="table-responsive" style="overflow-x: hidden !important;">
                                                <table id="datatable" class="table display nowrap" width="100%" style="overflow-x: hidden !important;">
                                                    <thead>
                                                        <tr>
                                                            <th class="text-center">No</th>
                                                            <th>Nama Destinasi Wisata</th>
                                                            <th>Aksi</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php
                                                    $stmt = $mysqli->prepare("SELECT * FROM destinasiwisata");
                                                    $stmt->execute();
                                                    $result = $stmt->get_result();
                                                    $nomor = "1";
                                                    if($result->num_rows === 0) {} else { while($row = $result->fetch_assoc()) {?>
                                                        <tr>
                                                            <td class="pt-3 text-center"><?php echo $nomor++;?></td>
                                                            <td class="pt-3"><a href="#" data-toggle="modal" data-target="#lihatdata<?php echo $row['id'];?>"><?php echo $row['judul'];?></a></td>
                                                            <td>
                                                                <form action="" method="post">
                                                                    <input type="hidden" name="id" value="<?php echo $row['id'];?>">
                                                                    <button type="submit" name="hapus" class="btn btn-sm btn-danger w-100"><i class="fas fa-trash"></i> Hapus</button>
                                                                </form>
                                                            </td>
                                                        </tr>
                                                    <?php } }?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <?php
                    $stmtv321 = $mysqli->prepare("SELECT * FROM destinasiwisata");
                    $stmtv321->execute();
                    $result321 = $stmtv321->get_result();
                    if($result321->num_rows === 0) {} else { while($row321 = $result321->fetch_assoc()) {?>
                        <div class="modal fade" id="lihatdata<?php echo $row321['id'];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel"><?php echo $row321['judul'];?></h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form action="" method="post" autocomplete="off" enctype="multipart/form-data">
                                        <div class="modal-body mb-0">
                                            <div class="row">
                                                <div class="col-12 text-center">
                                                    <img src="../uploads/<?php echo $row321['foto'];?>" class="mb-2" style="width: 180px;height: 180px;">
                                                </div>
                                                <input type="hidden" name="id" value="<?php echo $row321['id'];?>">
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label>Foto</label>
                                                        <input type="file" accept="image/*" class="form-control"  name="foto">
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label>Nama Destinasi Wisata</label>
                                                        <input type="text" class="form-control"  name="judul" required value="<?php echo $row321['judul'];?>">
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label>Deskripsi Destinasi Wisata</label>
                                                        <textarea class="summernote" name="subjudul" required><?php echo $row321['isi'];?></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer pt-0 mt-0">
                                            <button type="button" data-dismiss="modal" class="btn btn-danger">Tutup</button>
                                            <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    <?php } }?>

                    <div class="modal fade" id="tambahdata" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form action="" method="post" enctype="multipart/form-data" autocomplete="off">
                                    <div class="modal-body mb-0">
                                        <div class="form-group">
                                            <label>Gambar</label>
                                            <input type="file" class="form-control" name="foto" required>
                                            <p class="mb-0 text-danger" style="font-size: 11px;">Untuk hasil terbaik, siapkan foto dengan ukuran: lebar 410 piksel & tinggi 300 piksel</p>
                                        </div>
                                        <div class="form-group">
                                            <label>Nama Destinasi Wisata</label>
                                            <input type="text" class="form-control" placeholder="Masukkan judul..."  name="judul" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Deskripsi Destinasi Wisata</label>
                                            <textarea class="summernote" name="subjudul" placeholder="Masukkan isi Berita..." required></textarea>
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
        <script src="assets/modules/summernote/summernote-bs4.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.bootstrap4.min.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/responsive/2.3.0/js/dataTables.responsive.min.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/responsive/2.3.0/js/responsive.bootstrap4.js"></script>
        <script>
            $(document).ready(function() {
                var table = $('#datatable').DataTable({
                    "responsive": 'true',
                    "dom": 'Blfrtip',
                    "initComplete": function() {
                    $("#myTable").show();
                    },
                    "buttons": ['copy', 'csv', 'excel', 'pdf', 'print', 'colvis']
                });
                table.buttons().container().appendTo('#reminders_wrapper .col-md-12:eq(0)');
            });
        </script>
    </body>
</html>
