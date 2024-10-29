<?php require 'system/koneksi.php';?>

<!DOCTYPE html>
<html lang="zxx">

<head>
    <title><?php echo $rowpengaturanweb['namaweb'];?> - Selamat Datang</title>
    <?php require 'system/head.php';?>
</head>

<body>

    <?php require 'system/menu.php';?>



<section class="about pt-0 pt-md-5 mb-2 mb-md-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="why-we-text-area about-text-area-2">
                    <div class="default-section-title">
                        <span style="font-size: 30px; color: #FF5733;">BUDAYA</span>
                        
                        <?php
                        $stmt345q = $mysqli->prepare("SELECT * FROM sejarah");
                        $stmt345q->execute();
                        $result345q = $stmt345q->get_result();
                        if ($result345q->num_rows > 0) {
                            $row345q = $result345q->fetch_assoc(); ?>
                            <p><?php echo $row345q['isi']; ?></p>
                        <?php } ?>

                        <!-- Artikel Terkait -->
                        <span style="font-size: 30px; color: #FF5733;">ARTIKEL TERKAIT</span>
                        <p>Jelajahi lebih lanjut tentang Budaya Horas Eco Wisata melalui artikel kami.</p>

                      


                        <style>
    /* Styling container untuk layout grid dengan maksimal 4 kolom */
    .thumbnail-container {
        display: grid;
        grid-template-columns: repeat(4, 1fr); /* Membatasi 4 video per baris */
        gap: 20px;
        justify-items: center;
        margin-top: 20px;
    }

    /* Styling untuk setiap card video */
    .video-card {
        position: relative;
        width: 100%; /* Menyesuaikan lebar sesuai kolom */
        max-width: 300px; /* Membatasi lebar maksimal */
        overflow: hidden;
        border-radius: 10px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    /* Efek hover */
    .video-card:hover {
        transform: scale(1.05);
        box-shadow: 0 8px 15px rgba(0, 0, 0, 0.4);
    }

    /* Styling untuk deskripsi */
    .video-card p {
        text-align: center;
        margin-top: 10px;
        font-size: 1rem;
        color: #333;
    }

    /* Responsif: mengurangi jumlah kolom pada layar kecil */
    @media (max-width: 768px) {
        .thumbnail-container {
            grid-template-columns: repeat(2, 1fr); /* 2 kolom per baris di layar sedang */
        }
    }

    @media (max-width: 480px) {
        .thumbnail-container {
            grid-template-columns: 1fr; /* 1 kolom per baris di layar kecil */
        }
    }
</style>





                        <!-- Konten Video -->
                        <span style="font-size: 30px; color: #FF5733;">KONTEN VIDEO</span>
                        <p>Ikuti kami di sosial media untuk melihat konten video terbaru:</p>

                        <!-- Contoh video YouTube -->
                        <div class="video-container" style="display: flex; gap: 15px;">
    <!-- <div>
        <a href="https://www.youtube.com/watch?v=YfEIdI2ZaW8" target="_blank">
        <img src="https://img.youtube.com/vi/YfEIdI2ZaW8/0.jpg" alt="Thumbnail Video" style="width: 100%; max-width: 300px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); border-radius: 5px;">
        <p>Ponot Nih Gais</p>
        </a>
    </div> -->











    <style>
    /* Styling container untuk layout grid dengan maksimal 4 kolom */
    .thumbnail-container {
        display: grid;
        grid-template-columns: repeat(4, 1fr); /* Membatasi 4 video per baris */
        gap: 20px;
        justify-items: center;
        margin-top: 20px;
    }

    /* Styling untuk setiap card video */
    .video-card {
        position: relative;
        width: 100%; /* Menyesuaikan lebar sesuai kolom */
        max-width: 300px; /* Membatasi lebar maksimal */
        overflow: hidden;
        border-radius: 10px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    /* Efek hover */
    .video-card:hover {
        transform: scale(1.05);
        box-shadow: 0 8px 15px rgba(0, 0, 0, 0.4);
    }

    /* Styling untuk deskripsi */
    .video-card p {
        text-align: center;
        margin-top: 10px;
        font-size: 1rem;
        color: #333;
    }

    /* Responsif: mengurangi jumlah kolom pada layar kecil */
    @media (max-width: 768px) {
        .thumbnail-container {
            grid-template-columns: repeat(2, 1fr); /* 2 kolom per baris di layar sedang */
        }
    }

    @media (max-width: 480px) {
        .thumbnail-container {
            grid-template-columns: 1fr; /* 1 kolom per baris di layar kecil */
        }
    }
</style>

<div class="thumbnail-container">
    <a href="https://www.instagram.com/reel/DAgLP8tKb98/?igsh=dzM4OXpheHJjbnFq" target="_blank" class="video-card">
        <iframe src="https://www.instagram.com/reel/DAgLP8tKb98/embed" width="300" height="400" frameborder="0" scrolling="no" allowtransparency="true"></iframe>
        <p>Ponot Nih Gais</p>
    </a>

    <a href="https://www.instagram.com/reel/DAVAEVEOFhr/?igsh=N2N3Mm03NW55NzVw" target="_blank" class="video-card">
        <iframe src="https://www.instagram.com/reel/DAVAEVEOFhr/embed" width="300" height="400" frameborder="0" scrolling="no" allowtransparency="true"></iframe>
        <p>Ponot Nih Gais</p>
    </a>

    <a href="https://www.instagram.com/reel/DAgLP8tKb98/?igsh=dzM4OXpheHJjbnFq" target="_blank" class="video-card">
        <iframe src="https://www.instagram.com/reel/DAgLP8tKb98/embed" width="300" height="400" frameborder="0" scrolling="no" allowtransparency="true"></iframe>
        <p>Ponot Nih Gais</p>
    </a>
    <a href="https://www.instagram.com/reel/DAVAEVEOFhr/?igsh=N2N3Mm03NW55NzVw" target="_blank" class="video-card">
        <iframe src="https://www.instagram.com/reel/DAVAEVEOFhr/embed" width="300" height="400" frameborder="0" scrolling="no" allowtransparency="true"></iframe>
        <p>Ponot Nih Gais</p>
    </a>




    <a href="https://www.instagram.com/reel/DAgLP8tKb98/?igsh=dzM4OXpheHJjbnFq" target="_blank" class="video-card">
        <iframe src="https://www.instagram.com/reel/DAgLP8tKb98/embed" width="300" height="400" frameborder="0" scrolling="no" allowtransparency="true"></iframe>
        <p>Ponot Nih Gais</p>
    </a>

    <a href="https://www.instagram.com/reel/DAVAEVEOFhr/?igsh=N2N3Mm03NW55NzVw" target="_blank" class="video-card">
        <iframe src="https://www.instagram.com/reel/DAVAEVEOFhr/embed" width="300" height="400" frameborder="0" scrolling="no" allowtransparency="true"></iframe>
        <p>Ponot Nih Gais</p>
    </a>

</div>

</div>





                       
                        

                        <!-- Tambahkan lebih banyak video sesuai kebutuhan -->
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
                            <h4 style="font-weight: bold;">RUMAH BUMN HUMBANG HASANDUTAN</h4>
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
                            <h4 style="font-weight: bold;">RUMAH BUMN TOBA</h4>
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
                            <span style="font-size: 30px; color: #FF5733;">PAKET</span>
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
                            <span style="font-size: 30px; color: #FF5733;">GALERI</span>
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
                            <span style="font-size: 30px; color: #FF5733;">ARTIKEL</span>
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
