<?php require 'system/koneksi.php';?>

<!DOCTYPE html>
<html lang="zxx">

<head>
    <title><?php echo $rowpengaturanweb['namaweb'];?> - Pemerintahan Desa</title>
    <?php require 'system/head.php';?>
</head>

<body>

    <?php require 'system/menu.php';?>

    <section class="uni-banner">
            <div class="container">
                <div class="uni-banner-text-area">
                    <h1>Pemerintahan <?php echo $rowpengaturanweb['namaweb'];?></h1>
                    <ul>
                        <li><a href="/">Beranda</a></li>
                        <li>Pemerintahan Desa (Struktur Organisasi)</li>
                    </ul>
                </div>
            </div>
        </section>

        <section class="team pt-70 pb-100">
            <div class="container">
                <div class="row justify-content-center">
                    <?php 
                    $stmt = $mysqli->prepare("SELECT * FROM pemerintahdesa");
                    $stmt->execute();
                    $result = $stmt->get_result();
                    if($result->num_rows === 0) {} else { while($row = $result->fetch_assoc()) {?>
                        <div class="col-xl-3 col-lg3 col-md-3 col-6">
                            <div class="team-card">
                                <div class="team-card-img">
                                    <img src="uploads/<?php echo $row['foto'];?>" alt="<?php echo $row['nama'];?>" />
                                    <div class="team-social-icons">
                                        <div class="team-card-text">
                                            <h4 class="text-white"><?php echo $row['nama'];?></h4>
                                            <p class="text-white"><?php echo $row['jabatan'];?></p>
                                        </div>
                                    </div>
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