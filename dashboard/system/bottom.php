<?php 
if(isset($_POST['gantikatasandi'])) {
    if($modeaplikasi == "Demo") {
        echo "<script>alert('Anda sedang berada di dalam mode Demo, silahkan kontak developer untuk keluar dari mode demo!');window.location.href='$fullurl';</script>";
    } else {
        $idadminx = $_POST['idadmin'];
        $katasandi = $_POST['katasandi'];
        $newkatasandi = password_hash($katasandi, PASSWORD_DEFAULT);

        $stmtvas1 = $mysqli->prepare("UPDATE admin SET password = ? WHERE id = ?");
        $stmtvas1->bind_param("si", $newkatasandi, $idadminx);
        if($stmtvas1->execute()) {
            echo "<script>alert('Kata sandi berhasil dirubah');window.location.href='$fullurl';</script>";
        } else {
            echo "<script>alert('Kata sandi gagal dirubah, silahkan coba lagi!');window.location.href='$fullurl';</script>";
        }
    }
}
?>
<div class="modal fade" id="gantikatasandi" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Formulir Perubahan Kata Sandi</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="" method="post" enctype="multipart/form-data" autocomplete="off">
                <div class="modal-body mb-0">
                    <input type="hidden" name="idadmin" value="<?php echo $_COOKIE['id'];?>">
                    
                    <div class="form-group">
                        <label>Kata Sandi Baru</label>
                        <input type="password" placeholder="Masukkan kata sandi baru...." class="form-control" name="katasandi" required>
                    </div>
                </div>
                <div class="modal-footer pt-0 mt-0">
                    <button type="reset" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" name="gantikatasandi" class="btn btn-primary">Ganti Kata Sandi</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script src="assets/modules/jquery.min.js"></script>
<script src="assets/modules/popper.js"></script>
<script src="assets/modules/tooltip.js"></script>
<script src="assets/modules/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/modules/nicescroll/jquery.nicescroll.min.js"></script>
<script src="assets/modules/moment.min.js"></script>
<script src="assets/js/stisla.js"></script>

<script src="assets/modules/summernote/summernote-bs4.js"></script>
<script src="assets/modules/upload-preview/assets/js/jquery.uploadPreview.min.js"></script>
<script src="assets/modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>
<script src="assets/modules/jquery-selectric/jquery.selectric.min.js"></script>


<script src="assets/js/scripts.js"></script>
<script src="assets/js/custom.js"></script>