<?php require 'core.php';?>
<div class="navbar-bg"></div>
<nav class="navbar navbar-expand-lg main-navbar">
    <form class="form-inline mr-auto">
        <ul class="navbar-nav mr-3">
            <li>
                <a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a>
            </li>
        </ul>
    </form>
    <ul class="navbar-nav navbar-right">
        <li class="dropdown">
            <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                <img alt="image" src="assets/img/avatar/avatar-1.png" class="rounded-circle mr-1" />
                <div class="d-sm-none d-lg-inline-block">Hai, <?php echo $rowpengguna['namalengkap'];?></div>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
                <a href="#" data-toggle="modal" data-target="#gantikatasandi" class="dropdown-item has-icon text-dark"> <i class="fas fa-key"></i> Ganti Kata Sandi</a>
                <a href="logout" class="dropdown-item has-icon text-danger"> <i class="fas fa-sign-out-alt"></i> Keluar</a>
            </div>
        </li>
    </ul>
</nav>
<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html"><?php echo $rowpengaturanweb['namaweb'];?></a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">GDC</a>
        </div>
        <ul class="sidebar-menu">
            <?php
            
            function RemoveSpecialChar($str) {
                $res = str_replace( array( '\'', '/',
                ',' , ';', '<', '>' ), '/', $str);
            
                return $res;
            }
            
            $linknya = RemoveSpecialChar($pathurl);?>
            <li class="<?php if($linknya == "/dashboard/"){ echo 'active'; } else {}?>">
                <a href="/dashboard/"  class="nav-link"><span>Beranda</span></a>
            </li>
            
            <li class="dropdown <?php if($linknya == "/dashboard/pemerintahandesa"){ echo 'active'; } elseif($linknya == "/dashboard/bpd"){ echo 'active'; } elseif($linknya == "/dashboard/kelembagaan"){ echo 'active'; } else {}?>">
              <a href="#" class="nav-link has-dropdown"><span>Perangkat Desa</span></a>
              <ul class="dropdown-menu">
                <li class="<?php if($linknya == "/dashboard/pemerintahandesa"){ echo 'active'; } else {}?>"><a class="nav-link" href="pemerintahandesa">&mdash; Pemerintahan Desa</a></li>
                <li class="<?php if($linknya == "/dashboard/bpd"){ echo 'active'; } else {}?>"><a class="nav-link" href="bpd">&mdash; BPD</a></li>
                <li class="<?php if($linknya == "/dashboard/kelembagaan"){ echo 'active'; } else {}?>"><a class="nav-link" href="kelembagaan">&mdash; Kelembagaan</a></li>
              </ul>
            </li>
            
            <li class="<?php if($linknya == "/dashboard/datadesa"){ echo 'active'; } else {}?>">
                <a href="datadesa"  class="nav-link"><span>Data Desa</span></a>
            </li>
            
            <li class="<?php if($linknya == "/dashboard/potensidesa"){ echo 'active'; } else {}?>">
                <a href="potensidesa"  class="nav-link"><span>Potensi Desa</span></a>
            </li>
            
            <li class="<?php if($linknya == "/dashboard/destinasiwisata"){ echo 'active'; } else {}?>">
                <a href="destinasiwisata"  class="nav-link"><span>Destinasi Wisata</span></a>
            </li>
            
            <li class="dropdown <?php if($linknya == "/dashboard/berita"){ echo 'active'; } elseif($linknya == "/dashboard/informasi"){ echo 'active'; } elseif($linknya == "/dashboard/galeri"){ echo 'active'; } elseif($linknya == "/dashboard/pelayanan"){ echo 'active'; } else {}?>">
              <a href="#" class="nav-link has-dropdown"><span>Menu Publik</span></a>
              <ul class="dropdown-menu">
                <li class="<?php if($linknya == "/dashboard/berita"){ echo 'active'; } else {}?>"><a class="nav-link" href="berita">&mdash; Berita</a></li>
                <li class="<?php if($linknya == "/dashboard/informasi"){ echo 'active'; } else {}?>"><a class="nav-link" href="informasi">&mdash; Informasi</a></li>
                <li class="<?php if($linknya == "/dashboard/galeri"){ echo 'active'; } else {}?>"><a class="nav-link" href="galeri">&mdash; Galeri</a></li>
                <li class="<?php if($linknya == "/dashboard/pelayanan"){ echo 'active'; } else {}?>"><a class="nav-link" href="pelayanan">&mdash; Pelayanan</a></li>
              </ul>
            </li>
            
            <li class="<?php if($linknya == "/dashboard/hubungikami"){ echo 'active'; } else {}?>">
                <a href="hubungikami"  class="nav-link"><span>Data Hubungi Kami</span></a>
            </li>
            
            <li class="<?php if($linknya == "/dashboard/pengaturanweb"){ echo 'active'; } else {}?>">
                <a href="pengaturanweb"  class="nav-link"><span>Pengaturan Website</span></a>
            </li>

        </ul>
    

        <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
            <a href="logout" class="btn btn-primary btn-lg btn-block btn-icon-split"> <i class="fas fa-sign-out-alt"></i> Keluar</a>
        </div>
    </aside>
</div>