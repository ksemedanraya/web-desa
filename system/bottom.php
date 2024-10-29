<?php require 'system/koneksi.php';?>
<section class="footer">
    <div class="container">
        <div class="footer-content ptb-100">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="footer-logo-area">
                        <a href="/"><img src="uploads/<?php echo $rowpengaturanweb['logo'];?>" alt="<?php echo $rowpengaturanweb['namaweb'];?>"></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="footer-links footer-contact">
                        <h3>Kontak Kami</h3>
                        <div class="footer-contact-card">
                            <i class="fas fa-map-marker-alt"></i>
                            <h5>Lokasi: </h5>
                            <p class="text-white"><?php echo $rowpengaturanweb['lokasi'];?></p>
                        </div>
                        <div class="footer-contact-card">
                            <i class="fas fa-envelope"></i>
                            <h5>Email: </h5>
                            <p class="text-white"><a href="mailto:<?php echo $rowpengaturanweb['email'];?>"><?php echo $rowpengaturanweb['email'];?></a></p>
                        </div>
                        <div class="footer-contact-card">
                            <i class="fas fa-phone-alt"></i>
                            <h5>No Hp: </h5>
                            <p class="text-white"><a href="tel:<?php echo $rowpengaturanweb['nohp'];?>"><?php echo $rowpengaturanweb['nohp'];?></a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="footer-links footer-quick-links">
                        <h3>Tautan Cepat</h3>
                        <ul>
                            <li><i class="fas fa-angle-right"></i> <a href="visimisi">Visi & Misi</a></li>
                            <li><i class="fas fa-angle-right"></i> <a href="sejarah">Sejarah</a></li>
                            <li><i class="fas fa-angle-right"></i> <a href="gambaranumum">Gambaran Umum</a></li>
                            <li><i class="fas fa-angle-right"></i> <a href="pemerintahandesa">Pemerintahan Desa</a></li>
                            
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="footer-links footer-quick-links">
                        <h3>Menu Publik</h3>
                        <ul>
                            <li><i class="fas fa-angle-right"></i> <a href="berita">Berita</a></li>
                            <li><i class="fas fa-angle-right"></i> <a href="informasi">Informasi</a></li>
                            <li><i class="fas fa-angle-right"></i> <a href="galeri">Galeri</a></li>
                            <li><i class="fas fa-angle-right"></i> <a href="pelayanan">Pelayanan</a></li>
                            <li><i class="fas fa-angle-right"></i> <a href="hubungikami">Hubungi Kami</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php if($modeaplikasi == "Demo") {?>
        <div class="white-bg pt-0 p-3">
            <marquee><h5 class="text-white">Dibuat Oleh <a class="text-white" href="https://instagram.com/wafarifki_"><u>Wafa Rifqi Anafin</u></a> | Silahkan lunasi pembayaran untuk menghilangkan copyright ini</h5></marquee>
        </div>
    <?php }?>
</section>


<div class="go-top"><i class="fas fa-chevron-up"></i></div>

<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/jquery-ui.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/meanmenu.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/magnific-popup.min.js"></script>
<script src="assets/js/TweenMax.js"></script>
<script src="assets/js/nice-select.min.js"></script>
<script src="assets/js/form-validator.min.js"></script>
<script src="assets/js/contact-form-script.js"></script>
<script src="assets/js/ajaxchimp.min.js"></script>
<script src="assets/js/owl.carousel2.thumbs.min.js"></script>
<script src="assets/js/appear.min.js"></script>
<script src="assets/js/odometer.min.js"></script>
<script src="assets/js/custom.js"></script>