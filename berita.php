<?php require 'system/koneksi.php';?>

<!DOCTYPE html>
<html lang="zxx">

<head>
    <title><?php echo $rowpengaturanweb['namaweb'];?> - Berita</title>
    <?php require 'system/head.php';?>
</head>

<body>

    <?php require 'system/menu.php';?>

        <section class="uni-banner">
            <div class="container">
                <div class="uni-banner-text-area">
                    <h1>Berita <?php echo $rowpengaturanweb['namaweb'];?></h1>
                    <ul>
                        <li><a href="/">Beranda</a></li>
                        <li>Berita</li>
                    </ul>
                </div>
            </div>
        </section>

        <section class="blog-details pt-70 pb-100">
            <div class="container">
                <div class="row">
                    <?php 
                    $stmt = $mysqli->prepare("SELECT * FROM berita");
                    $stmt->execute();
                    $result = $stmt->get_result();
                    if($result->num_rows === 0) {} else { while($row = $result->fetch_assoc()) {?>
                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="blog-card">
                                <div class="blog-card-img">
                                    <a href="lihatberita?id=<?php echo $row['id'];?>"><img src="uploads/<?php echo $row['foto'];?>" alt="<?php echo $row['judul'];?>" /></a>
                                </div>
                                <div class="blog-card-text-area">
                                    <h4><a href="lihatberita?id=<?php echo $row['id'];?>"><?php echo $row['judul'];?></a></h4>
                                    <p>
                                        <?php 
                                        $wordlayananv2 = explode(" ", $row['isi']);
                                        $tampilayananv2 = implode(" ", array_splice($wordlayananv2, 0, 50));
                                        echo $tampilayananv2;?>....
                                    </p>
                                    <a class="read-more-btn" href="lihatberita?id=<?php echo $row['id'];?>">Baca Selengkapnya</a>
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