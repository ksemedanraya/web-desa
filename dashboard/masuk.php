<?php 
  error_reporting(0);
  require '../system/koneksi.php';
  require 'system/core.php';
  session_start();
  
  if(empty($_COOKIE['sudahmasuk'])) {} else {
    echo "<script>window.location.href='$linkaplikasi/dashboard/';</script>";
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title><?php echo $rowpengaturanweb['namaweb'];?> &mdash; Silahkan Masuk</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no, user-scalable=no" name="viewport">

  <link rel="stylesheet" href="assets/modules/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/modules/fontawesome/css/all.min.css">

  <link rel="stylesheet" href="assets/modules/bootstrap-social/bootstrap-social.css">

  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/components.css">
</head>

<body>
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
            <div class="login-brand text-center">
              <h3><?php echo $rowpengaturanweb['namaweb'];?></h3>
            </div>

            <div class="card card-primary">
              <div class="card-header mb-0 pb-0"><h4>Login</h4></div>

              <div class="card-body">
                <?php 
                if(isset($_POST['masuk'])) {

                    $namapengguna = $mysqli->real_escape_string($_POST['namapengguna']);
                    $katasandi = $mysqli->real_escape_string($_POST['password']);
                    
                    $stmtfungsi = $mysqli->prepare("SELECT * FROM admin WHERE username = ? LIMIT 1");
                    $stmtfungsi->bind_param("s", $namapengguna);
                    $stmtfungsi->execute();
                    $resultfungsi = $stmtfungsi->get_result();
                    if($resultfungsi->num_rows === 0) {
                        echo '<p class="text-danger mb-0">Nama pengguna salah, Coba lagi!</p>';
                        echo '<br>';
                    } else {
                        $rowfungsi = $resultfungsi->fetch_assoc();
                        $terhash = $rowfungsi['password'];
                        if (password_verify($katasandi, $terhash)) {
                            $_COOKIE['sudahmasuk'] = true;
                            $idadminx = $rowfungsi['id'];
                            setcookie("sudahmasuk", "SUDAH", 2147483647);
                            setcookie("id", "$idadminx", 2147483647);

                            echo "<script>window.location.href='/dashboard/';</script>";
                        } else {
                            echo '<p class="text-danger mb-0">Kata sandi salah, Coba lagi!</p>';
                            echo '<br>';
                        }
                    }
                }
                ?>
                <form method="post" autocomplete="off" action="" class="needs-validation" novalidate="">
                  <div class="form-group">
                    <label for="email">Username</label>
                    <input id="username" type="text" class="form-control" name="namapengguna" placeholder="Masukkan username anda..." tabindex="1" required autofocus>
                    <div class="invalid-feedback">
                      Silahkan isi username Anda
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="d-block">
                    	<label for="password" class="control-label">Kata Sandi</label>
                    </div>
                    <input id="password" type="password" class="form-control" name="password" placeholder="Masukkan kata sandi anda..." tabindex="2" required>
                    <div class="invalid-feedback">
                      Silahkan isi kata sandi Anda
                    </div>
                  </div>

                  <div class="form-group">
                    <button type="submit" name="masuk" class="btn btn-primary btn-lg btn-block" tabindex="4">
                      Masuk
                    </button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

  <script src="assets/modules/jquery.min.js"></script>
  <script src="assets/modules/popper.js"></script>
  <script src="assets/modules/tooltip.js"></script>
  <script src="assets/modules/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/modules/nicescroll/jquery.nicescroll.min.js"></script>
  <script src="assets/modules/moment.min.js"></script>
  <script src="assets/js/stisla.js"></script>
  <script src="assets/js/scripts.js"></script>
  <script src="assets/js/custom.js"></script>
</body>
</html>