<?php require 'system/koneksi.php';?>

<!DOCTYPE html>
<html lang="zxx">

<head>
    <title><?php echo $rowpengaturanweb['namaweb'];?> - BPD</title>
    <?php require 'system/head.php';?>
</head>

<body>

    <?php require 'system/menu.php';?>

    <section class="uni-banner">
            <div class="container">
                <div class="uni-banner-text-area">
                    <h1>BPD <?php echo $rowpengaturanweb['namaweb'];?></h1>
                    <ul>
                        <li><a href="/">Beranda</a></li>
                        <li>BPD</li>
                    </ul>
                </div>
            </div>
        </section>


        <section class="about pt-100 mb-5">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="why-we-text-area about-text-area-2">
                            <div class="default-section-title">
                                <?php
                                $stmt = $mysqli->prepare("SELECT * FROM bpd");
                                $stmt->execute();
                                $result = $stmt->get_result();
                                if($result->num_rows === 0) {} else { $row = $result->fetch_assoc(); {?>
                                    <p><?php echo $row['isi'];?></p>
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