<?php require 'system/koneksi.php';?>

<?php if($modeaplikasi == "Demo") {?>
    <div class="white-bg p-3 pb-0">
        <marquee><h5 class="text-success">Dibuat Oleh <a href="https://instagram.com/wafarifki_"><u>Wafa Rifqi Anafin</u></a> | Silahkan lunasi pembayaran untuk menghilangkan copyright ini</h5></marquee>
    </div>
<?php } else {}?>

<div class="navbar-area">
    <div class="main-responsive-nav">
        <div class="container-fluid plr-100v2">
            <div class="mobile-nav">
                <a href="<?php echo $linkaplikasi;?>/" class="logo">
                    <img src="uploads/<?php echo $rowpengaturanweb['logo'];?>" alt="<?php echo $rowpengaturanweb['namaweb'];?>"/>
                </a>
                <ul class="menu-sidebar menu-small-device">
                    <li><a class="default-button" href="<?php echo $linkaplikasi;?>/hubungikami">Hubungi Kami<i class="fas fa-angle-right"></i></a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="main-nav plr-100v2">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-md navbar-light">
                <a class="navbar-brand" href="<?php echo $linkaplikasi;?>/">
                    <img src="uploads/<?php echo $rowpengaturanweb['logo'];?>" alt="<?php echo $rowpengaturanweb['namaweb'];?>" />
                </a>
                <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item ">
                            <a href="<?php echo $linkaplikasi;?>/" class="nav-link">Beranda</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link dropdown-toggle">Rumah BUMN</a>
                            <ul class="dropdown-menu">
                                <li class="nav-item"><a href="<?php echo $linkaplikasi;?>/visimisi" class="nav-link">Profil</a></li>
                                <li class="nav-item"><a href="<?php echo $linkaplikasi;?>/sejarah" class="nav-link">Katalog Produk</a></li>
                                <li class="nav-item"><a href="<?php echo $linkaplikasi;?>/gambaranumum" class="nav-link">Layanan</a></li>
                            </ul>
                        </li>
                    
                       
                        <li class="nav-item">
                            <a href="#" class="nav-link dropdown-toggle">UMKM</a>
                            <ul class="dropdown-menu">
                                <?php 
                                $stmtvv = $mysqli->prepare("SELECT * FROM potensidesa ORDER BY id ASC");
                                $stmtvv->execute();
                                $resultvv = $stmtvv->get_result();
                                if($resultvv->num_rows === 0) {?>
                                    <li class="nav-item"><a href="#" class="nav-link">Belum Ada Potensi Desa</a></li>
                                <?php } else { while($rowvv = $resultvv->fetch_assoc()) {?>
                                    <li class="nav-item"><a href="<?php echo $linkaplikasi;?>/lihatpotensi?id=<?php echo $rowvv['id'];?>" class="nav-link"><?php echo $rowvv['judul'];?></a></li>
                                <?php } } ?>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link dropdown-toggle">Destinasi Wisata</a>
                            <ul class="dropdown-menu">
                                <?php 
                                $stmt = $mysqli->prepare("SELECT * FROM destinasiwisata ORDER BY id DESC");
                                $stmt->execute();
                                $result = $stmt->get_result();
                                if($result->num_rows === 0) {?>
                                    <li class="nav-item"><a href="#" class="nav-link">Belum Ada Wisata</a></li>
                                <?php } else { while($row = $result->fetch_assoc()) {?>
                                    <li class="nav-item"><a href="<?php echo $linkaplikasi;?>/lihatwisata?id=<?php echo $row['id'];?>" class="nav-link"><?php echo $row['judul'];?></a></li>
                                <?php } } ?>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link dropdown-toggle">Menu Publik</a>
                            <ul class="dropdown-menu">
                                <li class="nav-item"><a href="<?php echo $linkaplikasi;?>/berita" class="nav-link">Berita</a></li>
                                <li class="nav-item"><a href="<?php echo $linkaplikasi;?>/informasi" class="nav-link">Informasi</a></li>
                                <li class="nav-item"><a href="<?php echo $linkaplikasi;?>/galeri" class="nav-link">Galeri</a></li>
                                <li class="nav-item"><a href="<?php echo $linkaplikasi;?>/pelayanan" class="nav-link">Pelayanan</a></li>
                            </ul>
                        </li>
                    </ul>

                    <div class="menu-sidebar">
                        <ul>
                            <li><a class="default-button" href="<?php echo $linkaplikasi;?>/hubungikami">Hubungi Kami</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Website Horas Eco</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <!-- Link to Font Awesome and any additional styles if needed -->
  <link rel="stylesheet" href="assets/css/fontawesome-all.css">
  
  <!-- Custom CSS -->
  <style>
    /* Reset some default styles */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    /* Full viewport header with background image */
    header {
      width: 100%;
      height:100vh; /* Full viewport height */
      background-image: url('assets/images/Waterfall.png');
      background-size: cover; /* Scale image to cover the entire area */
      background-position: right; /* Center the image */
      background-repeat: no-repeat;
      display: flex;
      align-items: center;
      justify-content: center;
      color: white;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif
    }

    /* Optional navbar or brand styles */
    .nav-brand {
      text-align: center;
    }

    .nav-brand h1 {
      font-size: 3rem;
      margin: 0;
      color: black;
    }

    .nav-brand p {
      font-size: 1.2rem;
      margin-top: 10px;
      color: black;
    }
  </style>
</head>
<body>

</body>
</html>
