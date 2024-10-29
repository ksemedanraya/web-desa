<?php require 'system/koneksi.php';?>

<!DOCTYPE html>
<html lang="zxx">

<head>
    <title><?php echo $rowpengaturanweb['namaweb'];?> - Galeri</title>
    <?php require 'system/head.php';?>
</head>

<body>

    <?php require 'system/menu.php';?>

    <section class="uni-banner">
            <div class="container">
                <div class="uni-banner-text-area">
                    <h1>Galeri <?php echo $rowpengaturanweb['namaweb'];?></h1>
                    <ul>
                        <li><a href="/">Beranda</a></li>
                        <li>Galeri</li>
                    </ul>
                </div>
            </div>
        </section>

        <section class="team pt-70 pb-100">
            <div class="container">
                <div class="row justify-content-center">
                    <?php 
                    $stmt = $mysqli->prepare("SELECT * FROM galeri");
                    $stmt->execute();
                    $result = $stmt->get_result();
                    if($result->num_rows === 0) {} else { while($row = $result->fetch_assoc()) {?>
                        <div class="col-xl-4 col-lg-4 col-md-4 col-6">
                            <div class="team-card">
                                <div class="team-card-img">
                                    <img src="uploads/<?php echo $row['gambar'];?>" alt="Galeri <?php echo $rowpengaturanweb['namaweb'];?>" />
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