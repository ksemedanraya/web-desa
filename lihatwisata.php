<?php require 'system/koneksi.php';
$_GET   = filter_input_array(INPUT_GET, FILTER_SANITIZE_STRING);
$_POST  = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

if(isset($_GET['id'])) {
    $id = $mysqli->real_escape_string($_GET['id']);

    $stmtqe1 = $mysqli->prepare("SELECT * FROM destinasiwisata WHERE id = ?");
    $stmtqe1->bind_param("i", $id);
    $stmtqe1->execute();
    $resultqe1 = $stmtqe1->get_result();
    if($resultqe1->num_rows === 0) {
        header("Location: /");
    } else {
        $rowqe1 = $resultqe1->fetch_assoc();
    }
} else {
    header("Location: /");
}

?>

<!DOCTYPE html>
<html lang="zxx">

<head>
    <title><?php echo $rowpengaturanweb['namaweb'];?> - <?php echo $rowqe1['judul'];?></title>
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
                        <img src="uploads/<?php echo $rowqe1['foto'];?>" class="w-100" alt="<?php echo $rowqe1['judul'];?>" />
                        
                        <h3 class="mt-3"><?php echo $rowqe1['judul'];?></h3>
                        <p><?php echo $rowqe1['isi'];?></p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="sidebar-area pl-20">
                        <div class="sidebar-card recent-news">
                            <h3>Destinasi Wisata</h3>
                            <?php
                            $stmtv2 = $mysqli->prepare("SELECT * FROM destinasiwisata");
                            $stmtv2->execute();
                            $resultv2 = $stmtv2->get_result();
                            if($resultv2->num_rows === 0) {?>
                                <div class="w-100 text-center">
                                    <h5>Belum Ada Destinasi Wisata</h5>
                                </div>
                            <?php } else { while($rowv2 = $resultv2->fetch_assoc()) {?>
                                <div class="recent-news-card">
                                    <a href="lihatwisata?id=<?php echo $rowv2['id'];?>"><img style="width: 90px;" src="uploads/<?php echo $rowv2['foto'];?>" alt="<?php echo $rowv2['judul'];?>" /></a>
                                    <h5><a href="lihatwisata?id=<?php echo $rowv2['id'];?>"><?php echo $rowv2['judul'];?></a></h5>
                                    <a href="lihatwisata?id=<?php echo $rowv2['id'];?>" class="btn btn-md btn-success text-white fw-bold">Lihat Wisata</a>
                                </div>
                            <?php } }?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <?php require 'system/bottom.php';?>
</body>

</html>