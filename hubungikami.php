<?php require 'system/koneksi.php';


if(isset($_POST['hubungikami'])) {
    $_GET   = filter_input_array(INPUT_GET, FILTER_SANITIZE_STRING);
    $_POST  = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
    
    $nama = $mysqli->real_escape_string($_POST['nama']);
    $nomorwa = $mysqli->real_escape_string($_POST['nomorwa']);
    $email = $mysqli->real_escape_string($_POST['email']);
    $isipesan = $mysqli->real_escape_string($_POST['isipesan']);


    $stmt = $mysqli->prepare("INSERT INTO hubungikami (nama, email, nohp, isipesan) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $nama, $email, $nomorwa, $isipesan);
    if($stmt->execute()) {
        echo '<script>alert("Terimakasih, pesan berhasil dikirim");window.location.href="'.$fullurl.'";</script>';
    } else {
        echo '<script>alert("Pesan gagal dikirim, Silahkan coba lagi!");window.location.href="'.$fullurl.'";</script>';
    }
}

?>

<!DOCTYPE html>
<html lang="zxx">

<head>
    <title><?php echo $rowpengaturanweb['namaweb'];?> - Hubungi Kami</title>
    <?php require 'system/head.php';?>
</head>

<body>

    <?php require 'system/menu.php';?>

    <section class="uni-banner">
        <div class="container">
            <div class="uni-banner-text-area">
                <h1>Hubungi Kami</h1>
                <ul>
                    <li><a href="/">Beranda</a></li>
                    <li>Hubungi Kami</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="contact-form-area pb-100">
        <div class="container pt-4">
            <div class="section-content">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="google-map pr-20">
                            <iframe class="g-map" src="<?php echo $rowpengaturanweb['googlemaps'];?>"></iframe>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="contact-form-text-area">
                            <form action="" method="post" autocomplete="off">
                                <div class="row align-items-center">
                                    <div class="col-md-6 col-sm-6 col-12">
                                        <div class="form-group">
                                            <input class="form-control w-100" type="text" placeholder="Nama Lengkap..." name="nama" id="namalengkap" required>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-12">
                                        <div class="form-group">
                                            <input class="form-control w-100" type="email" placeholder="Alamat E-mail..." name="email" required>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <input class="form-control w-100" type="number" placeholder="Nomor Whatsapp..." value="62" id="nomorwa" name="nomorwa" required>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <textarea class="form-control w-100" placeholder="Isi Pesan..." name="isipesan" required></textarea>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-12">
                                        <button class="default-button" type="submit" name="hubungikami"><span>Kirim pesan</span></button>
                                        <div id="msgSubmit" class="h6 text-center hidden"></div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <?php require 'system/bottom.php';?>
    <script>
        $('#nomorwa').click(function(){ 
            $('#nomorwa').on('change keydown', function(e){
                if( ($('#nomorwa').val() == "62") && e.which==8){
                e.preventDefault();
                }
            });
        });

        $("#namalengkap").keyup(function() {
            toUpper(this);
        });

        function toUpper(obj) {
            var mystring = obj.value;
            var sp = mystring.split(' ');
            var wl = 0;
            var f, r;
            var word = new Array();
            for (i = 0; i < sp.length; i++) {
                f = sp[i].substring(0, 1).toUpperCase();
                r = sp[i].substring(1).toLowerCase();
                word[i] = f + r;
            }
            newstring = word.join(' ');
            obj.value = newstring;
            return true;
        }
    </script>
</body>

</html>