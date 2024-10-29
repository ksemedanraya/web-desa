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

        $stmt = $mysqli->prepare("DELETE FROM hubungikami WHERE id = ?");
        $stmt->bind_param("i", $id);
        if($stmt->execute()) {
            echo "<script>alert('Data berhasil dihapus');window.location.href='$fullurl';</script>";
        } else {
            echo "<script>alert('Data gagal dihapus, silahkan coba lagi!');window.location.href='$fullurl';</script>";
        }
    }
}


?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title><?php echo $rowpengaturanweb['namaweb'];?> &mdash; Data Hubungi Kami</title>
        <?php require 'system/head.php';?>
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
                            <h1>Data Hubungi Kami</h1>
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
                                                            <th>Nama</th>
                                                            <th>Aksi</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php
                                                    $stmt = $mysqli->prepare("SELECT * FROM hubungikami");
                                                    $stmt->execute();
                                                    $result = $stmt->get_result();
                                                    $nomor = "1";
                                                    if($result->num_rows === 0) {} else { while($row = $result->fetch_assoc()) {?>
                                                        <tr>
                                                            <td class="pt-3 text-center"><?php echo $nomor++;?></td>
                                                            <td class="pt-3"><a href="#" data-toggle="modal" data-target="#lihatdata<?php echo $row['id'];?>"><?php echo $row['nama'];?></a></td>
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
                    $stmtv321 = $mysqli->prepare("SELECT * FROM hubungikami");
                    $stmtv321->execute();
                    $result321 = $stmtv321->get_result();
                    if($result321->num_rows === 0) {} else { while($row321 = $result321->fetch_assoc()) {?>
                        <div class="modal fade" id="lihatdata<?php echo $row321['id'];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel"><?php echo $row321['nama'];?></h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body mb-0">
                                        <div class="form-group">
                                            <label>Nama Lengkap</label>
                                            <input type="text" class="form-control" readonly disabled value="<?php echo $row321['nama'];?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Nama Email</label>
                                            <input type="text" class="form-control" readonly disabled value="<?php echo $row321['email'];?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Nomor Whatsapp</label>
                                            <input type="text" class="form-control" readonly disabled value="<?php echo $row321['nohp'];?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Isi Pesan</label>
                                            <textarea class="form-control" readonly disabled><?php echo $row321['isipesan'];?></textarea>
                                        </div>
                                    </div>
                                    <div class="modal-footer pt-0 mt-0">
                                        <a href="mailto:<?php echo $row321['email'];?>" target="_blank" class="btn btn-warning text-white">Email</a>
                                        <a href="https://wa.me/+<?php echo $row321['nohp'];?>" target="_blank" class="btn btn-success text-white">Whatsapp</a>
                                        <button type="button" data-dismiss="modal" class="btn btn-primary">Tutup</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } }?>
                </div>

            </div>
        </div>
        
        <?php require 'system/bottom.php';?>
        
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
