<?php require 'system/koneksi.php';
$_GET   = filter_input_array(INPUT_GET, FILTER_SANITIZE_STRING);
$_POST  = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

if(isset($_GET['id'])) {
    $id = $mysqli->real_escape_string($_GET['id']);

    $stmtvq2 = $mysqli->prepare("SELECT * FROM datadesa WHERE id = ?");
    $stmtvq2->bind_param("i", $id);
    $stmtvq2->execute();
    $resultvq2 = $stmtvq2->get_result();
    if($resultvq2->num_rows === 0) {
        header("Location: /");
    } else {
        $rowvq2 = $resultvq2->fetch_assoc();
    }
} else {
    header("Location: /");
}

?>

<!DOCTYPE html>
<html lang="zxx">

<head>
    <title><?php echo $rowpengaturanweb['namaweb'];?> - <?php echo $rowvq2['judul'];?></title>
    <?php require 'system/head.php';?>
</head>

<body>

    <?php require 'system/menu.php';?>

    <br><br>
    <section class="blog-details pb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mb-md-0 mb-3">
                    <div class="blog-details-text-area details-text-area">                        
                        <h2 class="text-success fw-bold"><?php echo $rowvq2['judul'];?></h2>
                        <hr>
                        <p><?php echo $rowvq2['isi'];?></p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="sidebar-area pl-20">
                        <div class="sidebar-card sidebar-category">
                            <h3>Daftar Data Desa</h3>
                            <ul>
                                <?php
                                $stmtv2 = $mysqli->prepare("SELECT * FROM datadesa");
                                $stmtv2->execute();
                                $resultv2 = $stmtv2->get_result();
                                if($resultv2->num_rows === 0) {?>
                                    <li><a href="#">Belum Ada Data Desa</a></li>
                                <?php } else { while($rowv2 = $resultv2->fetch_assoc()) {?>
                                    <li><a href="lihatdata?id=<?php echo $rowv2['id'];?>"><i class="fas fa-angle-right"></i> <?php echo $rowv2['judul'];?></a></li>
                                <?php } }?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <?php require 'system/bottom.php';?>
</body>

</html>