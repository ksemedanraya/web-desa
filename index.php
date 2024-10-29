<?php require 'system/koneksi.php';?>

<!DOCTYPE html>
<html lang="zxx">

<head>
    <title><?php echo $rowpengaturanweb['namaweb'];?> - Selamat Datang</title>
    <?php require 'system/head.php';?>
</head>

<body>

    <?php require 'system/menu.php';?>
    <header>
    <div class="nav-brand">
  <h1 style="font-size: 4rem; color: #ffffff; text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.7); font-weight: bold; margin-bottom: 0.5em;">
    Surga Tersembunyi di Sumatera Utara
  </h1>
  <p style="font-size: 2rem; color: white; text-shadow: 1px 1px 5px rgba(0, 0, 0, 0.5); font-style: italic; font-weight: bold;">
    Nikmati Keindahan Alam, Keanekaragaman Budaya, dan Keunikan Karya
</p>

</div>

  </header>



 <section class="about pt-0 pt-md-5 mb-2 mb-md-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="why-we-text-area about-text-area-2">
                        <div class="default-section-title">
                            <span style="color: black; font-size: 1.2em;">Budaya Horas Eco Wisata</span>
                            
                        <?php
                        $stmt345q = $mysqli->prepare("SELECT * FROM sejarah");
                        $stmt345q->execute();
                        $result345q = $stmt345q->get_result();
                        if ($result345q->num_rows === 0) {
                        } else {
                            $row345q = $result345q->fetch_assoc(); { ?>
                                <p><?php echo $row345q['isi']; ?></p>
                            <?php }
                        } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>





    <section class="about pt-0 pt-md-5 mb-2 mb-md-5">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 mt-2">
                    <div class="why-we-text-area about-text-area-2">
                        <div class="default-section-title">
                            <span></span>
                            <h3><?php echo $rowpengaturanweb['namaweb'];?></h3>
                            <?php
                            $stmt = $mysqli->prepare("SELECT * FROM visi");
                            $stmt->execute();
                            $result = $stmt->get_result();
                            if($result->num_rows === 0) {} else { $row = $result->fetch_assoc(); {?>
                                <br>
                                <img src="uploads/<?php echo $row['foto'];?>" class="img-fluid" alt="<?php echo $rowpengaturanweb['namaweb'];?>">
                                <p><?php echo $row['isi'];?></p>
                            <?php } }?>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 mt-2">
                    <div class="why-we-text-area about-text-area-2">
                        <div class="default-section-title">
                            <span></span>
                            <h3><?php echo $rowpengaturanweb['namaweb'];?></h3>
                            <?php
                            $stmtv123 = $mysqli->prepare("SELECT * FROM misi");
                            $stmtv123->execute();
                            $resultv123 = $stmtv123->get_result();
                            if($resultv123->num_rows === 0) {} else { $rowv123 = $resultv123->fetch_assoc(); {?>
                                <br>
                                <img src="uploads/<?php echo $rowv123['foto'];?>" class="img-fluid" alt="<?php echo $rowpengaturanweb['namaweb'];?>">
                                <p><?php echo $rowv123['isi'];?></p>
                            <?php } }?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="about pt-0 pt-md-5 mb-2 mb-md-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="why-we-text-area about-text-area-2">
                        <div class="default-section-title">
                            <span>Sejarah</span>
                            <h3><?php echo $rowpengaturanweb['namaweb'];?></h3>
                            <?php
                            $stmt345q = $mysqli->prepare("SELECT * FROM sejarah");
                            $stmt345q->execute();
                            $result345q = $stmt345q->get_result();
                            if($result345q->num_rows === 0) {} else { $row345q = $result345q->fetch_assoc(); {?>
                                <p><?php echo $row345q['isi'];?></p>
                            <?php } }?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="about pt-0 pt-md-5 mb-2 mb-md-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="why-we-text-area about-text-area-2">
                        <div class="default-section-title">
                            <span>Galeri</span>
                            <h3><?php echo $rowpengaturanweb['namaweb'];?></h3>
                        </div>
                    </div>
                </div>
                <?php 
                $stmtv72q = $mysqli->prepare("SELECT * FROM galeri");
                $stmtv72q->execute();
                $resultv72q = $stmtv72q->get_result();
                if($resultv72q->num_rows === 0) {} else { while($rowv72q = $resultv72q->fetch_assoc()) {?>
                    <div class="col-xl-3 col-lg-3 col-md-3 col-6">
                        <div class="team-card">
                            <div class="team-card-img">
                                <img src="uploads/<?php echo $rowv72q['gambar'];?>" alt="Galeri <?php echo $rowpengaturanweb['namaweb'];?>" />
                            </div>
                        </div>
                    </div>
                <?php } } ?>
            </div>
        </div>
    </section>
    
    <section class="blog-details pt-0 pt-md-5 mb-2 mb-md-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="why-we-text-area about-text-area-2">
                        <div class="default-section-title">
                            <span>Berita</span>
                            <h3><?php echo $rowpengaturanweb['namaweb'];?></h3>
                        </div>
                    </div>
                </div>
                <?php 
                $stmt908q = $mysqli->prepare("SELECT * FROM berita");
                $stmt908q->execute();
                $result908q = $stmt908q->get_result();
                if($result908q->num_rows === 0) {} else { while($row908q = $result908q->fetch_assoc()) {?>
                    <div class="col-xl-4 col-lg-6 col-md-4 col-12">
                        <div class="blog-card">
                            <div class="blog-card-img">
                                <a href="lihatberita?id=<?php echo $row908q['id'];?>"><img src="uploads/<?php echo $row908q['foto'];?>" alt="<?php echo $row908q['judul'];?>" /></a>
                            </div>
                            <div class="blog-card-text-area">
                                <h4><a href="lihatberita?id=<?php echo $row908q['id'];?>"><?php echo $row908q['judul'];?></a></h4>
                                <p>
                                    <?php 
                                    $wordlayananv2 = explode(" ", $row908q['isi']);
                                    $tampilayananv2 = implode(" ", array_splice($wordlayananv2, 0, 50));
                                    echo $tampilayananv2;?>....
                                </p>
                                <a class="read-more-btn" href="lihatberita?id=<?php echo $row908q['id'];?>">Baca Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                <?php } } ?>
            </div>
        </div>
    </section>
    
    <?php require 'system/bottom.php';?>
</body>

</html>