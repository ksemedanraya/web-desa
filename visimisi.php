<?php require 'system/koneksi.php';?>

<!DOCTYPE html>
<html lang="zxx">

<head>
    <title><?php echo $rowpengaturanweb['namaweb'];?> - Visi Misi</title>
    <?php require 'system/head.php';?>
</head>

<body>

    <?php require 'system/menu.php';?>

    <section class="uni-banner">
            <div class="container">
                <div class="uni-banner-text-area">
                    <h1>RUMAH BUMN <?php echo $rowpengaturanweb['namaweb'];?></h1>
                    <ul>
                        <li><a href="/">Beranda</a></li>
                        <li>Visi Misi</li>
                    </ul>
                </div>
            </div>
        </section>

        <section class="about pt-100 mb-5">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6 mt-2">
                        <div class="why-we-text-area about-text-area-2">
                            <div class="default-section-title">
                                <span style="font-size: 24px; color: black;">RUMAH BUMN TOBA</span>
                                
                                
                                <?php
                                $stmt = $mysqli->prepare("SELECT * FROM visi");
                                $stmt->execute();
                                $result = $stmt->get_result();
                                if($result->num_rows === 0) {} else { $row = $result->fetch_assoc(); {?>
                                    <br>
                                    <img src="uploads/<?php echo $row['foto'];?>" class="w-100" alt="<?php echo $rowpengaturanweb['namaweb'];?>">
                                    <p><?php echo $row['isi'];?></p>
                                <?php } }?>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 mt-2">
                        <div class="why-we-text-area about-text-area-2">
                            <div class="default-section-title">
                                <span style="font-size: 24px; color: black;">RUMAH BUMN HUMBANG HASANDUTAN</span>
                                
                                <?php
                                $stmtv123 = $mysqli->prepare("SELECT * FROM misi");
                                $stmtv123->execute();
                                $resultv123 = $stmtv123->get_result();
                                if($resultv123->num_rows === 0) {} else { $rowv123 = $resultv123->fetch_assoc(); {?>
                                    <br>
                                    <img src="uploads/<?php echo $rowv123['foto'];?>" class="w-100" alt="<?php echo $rowpengaturanweb['namaweb'];?>">
                                    <p><?php echo $rowv123['isi'];?></p>
                                <?php } }?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <br><br>
    <?php require 'system/bottom.php';?>
</body>

</html>