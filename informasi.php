<?php require 'system/koneksi.php';?>

<!DOCTYPE html>
<html lang="zxx">

<head>
    <title><?php echo $rowpengaturanweb['namaweb'];?> - Pusat Informasi</title>
    <?php require 'system/head.php';?>
</head>

<body>

    <?php require 'system/menu.php';?>

    <section class="uni-banner">
            <div class="container">
                <div class="uni-banner-text-area">
                    <h1>Pusat Informasi <?php echo $rowpengaturanweb['namaweb'];?></h1>
                    <ul>
                        <li><a href="/">Beranda</a></li>
                        <li>Informasi</li>
                    </ul>
                </div>
            </div>
        </section>

        <section class="blog-details pt-70 pb-100">
            <div class="container">
                <div class="row">
                    <?php 
                    $stmt = $mysqli->prepare("SELECT * FROM informasi");
                    $stmt->execute();
                    $result = $stmt->get_result();
                    if($result->num_rows === 0) {
                        echo '<div class="text-center"><h5>Belum ada data</h5></div>';
                    } else { while($row = $result->fetch_assoc()) {?>
                        <div class="col-12">
                            <div class="blog-card">
                                <div class="blog-card-text-area">
                                    <h2><i class="fas fa-bullhorn"></i> <?php echo $row['judul'];?></h2>
                                    <hr>
                                    <p class="mt-2"><?php  echo $row['isi']?></p>
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