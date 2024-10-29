-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 29 Jan 2023 pada 22.16
-- Versi server: 10.5.18-MariaDB-cll-lve
-- Versi PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `organisasidesa`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(2000) NOT NULL,
  `namalengkap` varchar(255) NOT NULL,
  `nohp` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `namalengkap`, `nohp`) VALUES
(1, 'admin', '$2y$10$2gEzDFK3/yoEheiBTkzWJOJottqDq4kXLR7tnL3TiMhaQa/h/7sLW', 'Administrator', '089502122418');

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE `berita` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `isi` varchar(5000) NOT NULL,
  `foto` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `berita`
--

INSERT INTO `berita` (`id`, `judul`, `isi`, `foto`) VALUES
(7, 'Pemerintah Desa Mandalahayu Memperingati HUT RI Ke 77 Terpusat Di Lembah Palahlar', '<p><b><span style=\"font-family: &quot;Times New Roman&quot;;\">desamandalahayu.co.id-&nbsp;</span></b><span style=\"font-family: Verdana; font-size: 17px;\">pemerintah desa mandalahayu kecamatan salopa beserta masyarakat memperingati Hut-Ri yang ke,77 di lokasi wisata palahlar,</span></p><p style=\"font-family: Verdana, Geneva, sans-serif; font-size: 17px; line-height: 1.72; overflow-wrap: break-word; margin-bottom: 24px;\"><span style=\"font-family: Verdana;\">Kegiatan hari ini merupakan kegiatan terakhir dalam rangka meriahkan kemerdekaan RI ke- 77, pasalnya panitia pelaksana mengemas beberapa rangkaian acara dan hari ini acara puncak yang di isi oleh jalan santai berhadiah dengan bermacam Door prize yang di sediakan oleh panitia.</span></p><p style=\"font-family: Verdana, Geneva, sans-serif; font-size: 17px; line-height: 1.72; overflow-wrap: break-word; margin-bottom: 24px;\"><span style=\"font-family: Verdana;\">untuk tahun ini kegiatan perlombaan dalam rangka memeriahkan Kemerdekaan sengaja dilaksanakan di tempat ini, dengan tujuan untuk memperkenalkan tempat ini kepada masyarakat desa mandalahayu sejauh mana progres program yang dilaksanakan oleh pemerintah desa</span><br></p><p style=\"font-family: Verdana, Geneva, sans-serif; font-size: 17px; line-height: 1.72; overflow-wrap: break-word; margin-bottom: 24px;\"><span style=\"font-family: Verdana;\">Dan juga untuk bisa dipromosikan di media sosial dimana desa mandalahayu merupakan desa wisata yang merupakan upaya peningkatan PAdes desa mandalahayu adapun sepensor kegiatan diantaranya dari swadaya masyarakat, dari perusahaan Logam Jaya dan UPK Salopa</span></p><p style=\"font-family: Verdana, Geneva, sans-serif; font-size: 17px; line-height: 1.72; overflow-wrap: break-word; margin-bottom: 24px;\"><span style=\"font-family: Verdana;\">Kegiatan ini merupakan bentuk edukasi kemasyarakat desa mandalahayu sehingga menjadi daya tarik untuk masyarakat luar untuk datang ke situ palahlar dan mudah mudahan membawakan berkah dan juga membakan hasil untuk desa mandalahayu.</span></p>', '63062f60cda9eWhatsApp Image 2022-08-21 at 17.56.58.jpeg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `bpd`
--

CREATE TABLE `bpd` (
  `id` int(11) NOT NULL,
  `isi` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `bpd`
--

INSERT INTO `bpd` (`id`, `isi`) VALUES
(1, '<p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(104, 104, 104); font-family: &quot;Helvetica Neue&quot;, Helvetica, arial, tahoma, sans-serif; font-size: 16px;\"><span style=\"font-weight: 700;\">LEMBAGA BPD</span></p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(104, 104, 104); font-family: &quot;Helvetica Neue&quot;, Helvetica, arial, tahoma, sans-serif; font-size: 16px; text-align: justify;\">BPD timbul dari, oleh dan untuk masyarakat desa, hal ini sebagaimana dijelaskan dalam undang-undang nomor 32 tahun 2004 tentang pemerintahan Daerah pasal 209 menyebutkan “Badan Permusyawaratan Desa “BPD” berfungsi menetapkan peraturan desa bersama kepala desa, menapung dan menyalurkan aspirasi masyarakat.</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(104, 104, 104); font-family: &quot;Helvetica Neue&quot;, Helvetica, arial, tahoma, sans-serif; font-size: 16px; text-align: justify;\"><span style=\"font-weight: 700;\">Pengertian BPD</span></p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(104, 104, 104); font-family: &quot;Helvetica Neue&quot;, Helvetica, arial, tahoma, sans-serif; font-size: 16px; text-align: justify;\">Badan Permusyawaratan Desa “BPD” merupakan lembaga perwujudan demokrasi dalam penyelenggaraan pemerintahan desa, BPD dapat dianggap sebagai “parlemen”-nya desa, BPD merupakan lembaga baru di desa pada era otonomi daerah di Indonesia. Sesuai dengan fungsinya, maka BPD ini dapat dikatakan sebagai lembaga kemasyarakatan. Karena berkisar pada pemikiran pokok yang dalam kesadaran masyarakat. hal ini sejalan dengan ungkapan Soekanto “2004:219”.</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(104, 104, 104); font-family: &quot;Helvetica Neue&quot;, Helvetica, arial, tahoma, sans-serif; font-size: 16px; text-align: justify;\">Anggota BPD ialah wakil dari penduduk desa bersangkutan berdasarkan keterwakilan wilayah yang ditetapkan dengan cara musyawarah dan mufakat. Aanggota BPD terdiri dari ketua Rukun Warga, pemangku adat, golongan profesi, pemuka agama dan tokoh atau pemuka masyarakat lainnya. Masa jabatan anggota BPD ialah 6 tahun dan dapat diangkut/diusulkan kembali untuk satu kali masa jabatan berikutnya. Pimpinan dan Anggota BPD tidak diperbolehkan merangkap jabatan sebagai Kapala Desa dan Perangkat Desa.</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(104, 104, 104); font-family: &quot;Helvetica Neue&quot;, Helvetica, arial, tahoma, sans-serif; font-size: 16px; text-align: justify;\">Peresmian anggota BPD ditetapkan dengan Keputusan Bupati/Walikota dimana sebelum memangku jabatannya mengucapkan sumpah/janji secara bersama-sama dihadapan masyarakat dan dipandu oleh Bupati/Walikota. Ketua BPD dipilih dari dan oleh anggota BPD secara langsung dalam Rapat BPD yang diadakan secara khusus. BPD berfungsi menetapkan peraturan desa bersama kepala desa, menampung dan menyalurkan aspirasi masyarakat.</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(104, 104, 104); font-family: &quot;Helvetica Neue&quot;, Helvetica, arial, tahoma, sans-serif; font-size: 16px;\"><span style=\"font-weight: 700;\">Tujuan BPD</span></p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(104, 104, 104); font-family: &quot;Helvetica Neue&quot;, Helvetica, arial, tahoma, sans-serif; font-size: 16px;\">Didirikannya BPD memiliki beberapa tujuan antara lain yaitu:</p><ul style=\"margin-bottom: 10px; color: rgb(104, 104, 104); font-family: &quot;Helvetica Neue&quot;, Helvetica, arial, tahoma, sans-serif; font-size: 16px;\"><li>Memberikan pedoman pada anggota masyarakat bagaimana mereka harus bertingkahlaku atau bersikap sesuai dengan kedudukannya menghadapi masalah dalam masyarakat yang menyangkut kebutuhan masyarakat.</li><li>Menjaga keutuhan masyarakat.</li><li>Memberikan pedoman kepada masyarakat untuk mengadakan sistem pengendalian sosial. Artinya sistem pengawasan masyarakat terhadap tingkah laku anggotannya.</li><li>Sebagai wahana demokrasi di desa, anggota BPD dipilih dari dan oleh penduduk desa yang telah memenuhi persyaratan. Sedangkan pimpinan BPD dipih dari dan oleh anggota BPD sendiri.</li></ul><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(104, 104, 104); font-family: &quot;Helvetica Neue&quot;, Helvetica, arial, tahoma, sans-serif; font-size: 16px;\"><span style=\"font-weight: 700;\">Tugas Dan Wewenang BPD</span></p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(104, 104, 104); font-family: &quot;Helvetica Neue&quot;, Helvetica, arial, tahoma, sans-serif; font-size: 16px;\">Adapun BPD memiliki tuga dan wewenang yang diantaranya yaitu:</p><ul style=\"margin-bottom: 10px; color: rgb(104, 104, 104); font-family: &quot;Helvetica Neue&quot;, Helvetica, arial, tahoma, sans-serif; font-size: 16px;\"><li>Membahas rancangan peraturan desa bersama kepala desa.</li><li>Melaksanakan pengawasan terhadap pelaksanaan peraturan desa dan peraturan kepala desa.</li><li>Mengusulkan pengangkatan dan pemberhentian kepala desa.</li><li>Membentuk panitia pemilihan kepada desa.</li><li>Menggali, menampung, menghimpun, mermuskan dan menyalurkan aspirasi masyarakat.</li><li>Memberi persetujuan pemberhentian/pemberhentian sementara perangkat desa.</li><li>Menyusun tata tertib BPD.</li></ul><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(104, 104, 104); font-family: &quot;Helvetica Neue&quot;, Helvetica, arial, tahoma, sans-serif; font-size: 16px;\">BPD mempunyai hak</p><ul style=\"margin-bottom: 10px; color: rgb(104, 104, 104); font-family: &quot;Helvetica Neue&quot;, Helvetica, arial, tahoma, sans-serif; font-size: 16px;\"><li>Meminta keterangan kepada pemerintah desa.</li><li>Menyatakan pendapat.</li></ul><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(104, 104, 104); font-family: &quot;Helvetica Neue&quot;, Helvetica, arial, tahoma, sans-serif; font-size: 16px;\">Anggota BPD mempunyai hak</p><ul style=\"margin-bottom: 10px; color: rgb(104, 104, 104); font-family: &quot;Helvetica Neue&quot;, Helvetica, arial, tahoma, sans-serif; font-size: 16px;\"><li>Mengajukan rancangan poeraturan desa</li><li>Mengajukan pertanyaan.</li><li>Menyampaikan usul dan pendapat.</li><li>Memilik dan dipilih.</li><li>Dan memperoleh tunjangan.</li></ul><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(104, 104, 104); font-family: &quot;Helvetica Neue&quot;, Helvetica, arial, tahoma, sans-serif; font-size: 16px;\">Syarat Calon Anggota BPD</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(104, 104, 104); font-family: &quot;Helvetica Neue&quot;, Helvetica, arial, tahoma, sans-serif; font-size: 16px;\">Ada beberapa syarat untuk menjadi calon anggota BPD antara lain:</p><ul style=\"margin-bottom: 10px; color: rgb(104, 104, 104); font-family: &quot;Helvetica Neue&quot;, Helvetica, arial, tahoma, sans-serif; font-size: 16px;\"><li>Bertaqwa kepada Tuhan Yang Maha Esa.</li><li>Setia dan taat kepada Pancasila dan undang-undang dasar 1945 serta pemerintah Republik Indonesia.</li><li>Berijazah paling rendah sekolah lanjutan tingkat pertama.</li><li>Berumur paling rendah 25 “dua puluh lima” tahun.</li><li>Sehat jasmani dan rohani.</li><li>Berkelakuan baik.</li><li>Tidak pernah dihukum karena melakukan tindak pidana kejahatan dengan ancaman paling sedikit 5 “lima” tahun.</li><li>Mengenal desanya dan dikenal masyarakat di desa setempat.</li><li>Mendaftar secara sah sebagai penduduk desa dan bertempat tinggal di desa yang bersangkutan sekurang-kurangnya 6 “enam” bulan berturut-turut dan tidak terputus.</li></ul>');

-- --------------------------------------------------------

--
-- Struktur dari tabel `datadesa`
--

CREATE TABLE `datadesa` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `isi` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `datadesa`
--

INSERT INTO `datadesa` (`id`, `judul`, `isi`) VALUES
(1, 'Data Wilayah Administratif', 'Desa Mandalahayu Terletak Sebelah Barat Ibukota Kabupaten Tasikmalaya Dengan Jarak Ke Ibukota Kecamatan Salopa ± 1 Km Dengan Waktu Tempuh ± 5 – 10 Menit. Jarak Ke Ibukota Kabupaten Tasikmalaya ± 40 Km Dengan Waktu Tempuh Menggunakan Kendaraan Bermotor± 1.5 Jam. Desa Mandalahayu Termasuk Desa Perbukitan, Memiliki Luas Wilayah 1114.760 Ha, Dengan Ketinggian 500 Dpl Dari Permukaan Laut.<br><br>Secara Astronomis Desa Mandalahayu Terletak Antara 1080.15 - 1080.17 LS Dan 70.28 – 70.31 Ls. Adapun Secara Administrasi Desa Mandalahayu Terdiri Dari 5 (Lima) Wilayah Kedusunan, 9 (Sembilan) RW, Dan 30 (Tiga Puluh) RT, Dengan Batas-batas Sebagai Berikut :<br>-&nbsp;&nbsp;&nbsp;&nbsp;Sebelah Utara&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: Desa Kawitan<br>-&nbsp;&nbsp;&nbsp;&nbsp;Sebelah Selatan&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: Desa Karyamandala<br>-&nbsp;&nbsp;&nbsp;&nbsp;Sebelah Barat&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: Desa Kertarahayu<br>-&nbsp;&nbsp;&nbsp;&nbsp;Sebelah Timur&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: Desa Mulyasari'),
(2, 'Data Pendidikan Dalam KK', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.<br></p>'),
(3, 'Data Pendidikan Ditempuh', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.<br></p>'),
(4, 'Data Pekerjaan', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.<br></p>'),
(5, 'Data Agama', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.<br></p>'),
(6, 'Data Jenis Kelamin', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.<br></p>'),
(7, 'Data Kelompok Umur', '<img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAABLgAAAGqCAIAAACH4Wo2AAAAAXNSR0IArs4c6QAAIABJREFUeJzt3c9rHFe+//93fZm/QFszTkwkDZK1EUEhtMYkIIMiaxMT0EC4WIuBVq4XkRIw99oYcgPG+gwGR8rC1xLMQmIYiCDEG6kjsMDBYzHEBG9kmbjbeOJBd6l/ob+Lru6uU+dU9Y96n2q1/XxwYaxS9avederUqTpdpdzg//7v/8SDnZ2dCxcu+Eg+afztKckkk0wyySSTTDLJJJPMFvO3s7MTrK2t9boMAAAAAMAJEuw9O/aROzUy4Cn5pOnHPaXmfFBzPqg5H9ScD2rOBzXng5rzQc0nU7/v49TIwP/X6xoAAAAAACcLE0UAAAAAgIGJIgAAAADAwEQRAAAAAGBgoggAAAAAMDBRBAAAAAAYmCgCAAAAAAxMFAEAAAAABiaKAAAAAAADE0UAAAAAgIGJIgAAAADAwEQRAAAAAGBgoggAAAAAMDBR7LGjzempkYGpkYGpT+8etfGrcOFX9/Mu1K7n1d3Paz+ODEyNfPFzfPX7t83ljY9/vvkyx6rjZfz81UByGebKLXbQn3jNkUqmv3+VvvLL7z+t15xjJ7EPbjsdO3oI8u/Y8TJSD7dVc2/a2e69Ke3s7Or5t3O8jNR2tmruTTuL1VAp7Wyv7FySA2OjrYYvs8JetLOrwsR2TtidvNvZLiOlnR2/6lF/tq4gaf3ZdbnpQX+OlZHen+M196Cdm00aGcGS2tm5svT0Bs/mKLJnN0WWh1+Ex7rxDwm7we2Hzf5w+2F9/XBJsy81fyUi9UuPuX401r71eoMwUeyph19cWpbLu8d7z7Zmn1z77mHLX93/blnOjp+cUueXnx3vPTvee/bNe8ba92+PbL91dSL68b/I3b1nv1wel6fL3+Y1vjjK+Mf5471nx5tXJ6wyrJVFknfQH7uM+7enr8nVX/aeHe892/3kdNrKR5uf3Xkyv/zseG/35tmtudhQ6It9cFM7tqsn5N6x3WUkHG5r5V61c7z3prazq6v3oJ1dZSS2c2zl3rSzSLyhUtrZXtm9JAf2RlOGL2Pl3rWzWWGLdrZ3pyftbJeR0s7Gr3rUztYVJK2dnZeb/NvZWUby/Ya5ck/a+dSl3b1aeevzIhMffHgmpZ0dK4v08gbPJaHI/G+KujNxdly279e/6Xvww9PxibOJK9//x9bE7NxEY31EMVHspaOXhzJ+8f3TIvLOW5E+nfSro81b23MXPzhhpbqc//LZN+9HF5z75ttLZ0TO/H7IZ5VtlPHlORGRoxePZfwPp9JX7g2rjIfb2zL/H5fOtLWySLhfp6c/GJd/vczl4a11cNN6i6sn9KBjd9QhnSv3op1jvTe9ne2u3pN2Tj7j2ls5/3a2Gip99LNbtScDdUcbdazci3aOV9XZVaaXF8Tu5d/O1hUkrZ1dl5setHPaVa+9lXvXn3++vyFzVz453VZ/bqwsJ6A/H21OO9+YiBbZRz74aF62tn8WEbn/3fLj2Y8uJq76cHt7/OKf/nzx7NatN/nJYRImir109OJxJ7+6/92yXP7ztNeSkiSUunE1+XUsh1d3/7YlZ69+3rsvosI3Uq5uTVz+f5+1uG0V6XgHPTh6edgso9X7D6cuXZl9cu3SyMDUyLt3nuRVYk3k4KZ0bHvlXnbseIdMPdyRlXvUzvHem9rOdlfvSTs7z7ikdo6v3KN2jjdUajvbrdqTdnZuNKmd4yv3btwwKmw1bsR2p1fjht2qKeOG8auetLN9BUm78XBcbnrQzglXPXc72yv3/Do4e/68tH0drK3c2xu8mlOXdvf+89dLsXdfjSLlJNwUtevDzy+Pb/xt86U83N4ev/mnD5PWe/n9/26c/Wj61OnBt+XxTw8aXys8vjM9MDUyMDV97Wk+BZ9UTBR76dQ7sRcdG3+i88W/rV8dbd7a7t2XOnapcvqzb2tvIOzePPvk2ncPm8UnvFn68vv/vvZ0/OZ/tfk1oRdnPvl77d02uTM9cDu9ZmsHe6f2sscvl8cf//TgZWo7n/8yfC1ka1bk7TO5NbVxcFM69s/Wyr3r2GaHbNGfY723J+0c772p7RxfuUftHC8jtZ2tlXvRznZDpbTz99bKPWlnx0aT29muuTf92aowrT9bK/emP9sXhZT+7LiC9Gp8Nq4gKe38T2vl3o3PRhkp7WzX3Lt2lp//eu3p+M0/nRNpfR00Vu7tDV7TuW/2nh1vvnOrMVeMFnmSboraceb9jyae/vjt7do8MGmtV7s/PZGny+9Ojcxtizz9cbc+AZ64vFvf2ZwKPqGYKPbSqTOj8uSHf74Ke+rs+fPvfR2+/P2J9aujF49lay78hmxrLt//JIyj1Obvfvu19nVLo3jXA8OX33/67h25ufn3dp7jeXfqzGjtH6k119V3sCdOnRkVOfx35EFiOzUfbd7alvk/nvNfn4h9cFM69nvWyj3q2Mkd0tGfE1fOt51Djd6b2s7xlXs/gMQkjxv2ynm2s91QKe38e2vlnrRz2katdrZrbub0oj83KmynPzdW7m1/dlwUUq6D1sp5trN9BWlx42Gu3JN2tmtustrZrrkh7/5ce/j2n+1cB+Mr97g/Nzz8Ympk4NKLK3tfn7f3qKmnN0WGt/5wtv4Y8OjBD0/Nw33qw4tnn2xsP2n8gaXD0YMfno7f3Gz8NWbtkCHid70u4M127pvluYGr0wN3RGRu69tzqb86d7z3tYQ3uENb3+b8XM6q52hz+tJy+GbF2au/fGmMxfdvj8xti4g8vjqyMbt+/KV8e+eJiFy7NHJNRGbXj7/MY+yOl/Gnlx3UnLpyfjV/GW358ZubxnG32/mLqeKGiIhMXN7N62/NH9oHN7lj2yt/3YuObZWRdrjtmnvRzq4zLrGdHSv3YgCxy0gZNxy/etiDdn7P0SET29m1cg/a2S4jpZ0dNfeinenPOY3PjitIezce4zc3L5051Yv+bJeRdr9h72BP2rn28E3m/6NRW8p10FrZNZLk7Whz+tKPFzefHTemhbEiU+/6clO/7Znb+uS0iHz27fqvU8V3p5ZFRGbXd43DfXr6g/FrT+Xi+6dFzOnfdnFgW0Tmbl4uP5ahK+Eun5udlY2fHrz8JPE91TdRsPfs2Efu1MiAp+STph/3lJrzQc35oOZ8UHM+qDkf1JwPas4HNZ9M/b6PUyMDvHoKAAAAADAwUQQAAAAAGJgoAgAAAAAMTBQBAAAAAAYmigAAAAAAAxNFAAAAAICBiSIAAAAAwMBEEQAAAABgYKIIAAAAADAkTBQffjE1MjD16d0jEZH7t0cGbj+MLB8ZmBoZ+HzzZW5VAgAAAAByk/JEceKs/PDPV5EFr+5+XtyYXT/ee3a8tz7/dPndcPbYpqTJp8jPXw1MRX6UV3c/H3Eumf7+VcJHzA9ORVd++EXz36/ufh5+6uX3n4Zr3n6YsE5ywQAAAACQVWMa4pyPpE+LmlObJtfEKhrbnE+1lDJRHP3gI7nz1/uNn48e/PBU5v94TkREzs3OivzrZacPFa3Jp4jI/X9sTczOTWzfv2+sOS6NJUcPfng6PnG2xUfCD17ePd57drx5Ve5MJzbE0eZnd57MLz873nt2/OW5TgsGAAAAgBykT4tiUmZJHftdyu9+f+nK7Mit7/98JSzrxWMZv3gq/OU7b43L9osXImc62dzoBx8d3vnr/U++jix7uL09fnHzz/Kv6Vvf//n8J6fDxR98NP90efvnr8+/J/e/W348e/Xmv578kP6RqFOXrswuz/304OUniQVu/G3z8/cupdfvKtgyNTKQGnISUXM+qDkf1JwPas4HNeeDmvNBzfmg5tdb2rQopo1ZUvvSJooi5/909dZfHlTeFhGRU+9MyNavRyKnRERe/PZEzn70Tqfbi00+RV5+/78bZz/65dTpF2/L458evPykMXP78PPLP777t83P3zuzvT1+c/ND+ctyq48Y6lNZ1y9PXdpdfjFwdfndqeWJy7u7n3RQsMPes+MWu92VqZEBkkkmmWSSSSaZZJJJJrkft6iWlTgtikmaJT2+Mz1wJ1xn4oO2N9viv3p66tKVt3/84V+1f58ZFdn4R/hftdnelokPPuzocWLN+T9dlZ8eVMKfXu3+9ESeLr87NTK3LfL0x92j5ppn3v9o4umP397+342zH02faixO+0jUi9+eyNl3Eqey7319vPfsl8vjj6Ov17YuGAAAAADykzAtikmcJYV/mre3ezP5nVWHlv/vMc7/cejx09o/z32zeXViuzgwNTIwVdyYXd/t7mlmdPJ59OCHp+M3N5+F/4EceWL8QeCpDy+efbKx/cSYkaZ/pLna5q1wKvvWH87K458evJTIn1n+/JX554uudZwFAwAAAICy9PmIa1oU0+YsqX0Jr56e+2bvWfjP974+3qv/hd6pS7t7lzJtT0REzv9xaG77ibwtL//542MZuhJOi8/NzsrGTw9efvJhfcXT0x+MX3sqF98/LRLuZ8JHmm+fNh6tTlzerU1lP/t2/dep4rtTyyIis+u774nIny/+LVxtfvnv50XOO9ZxFAwAAAAA2d2/PTK3LSJzW4lzlgbHtCi0XRzYFpG5m5fLqROrzqX/jaIq5+Tz3HHk7wPPfxm+OvzZt88+ExGRM5/8vb7C6frCvzs/Yq7j2PQ3xhJ7TXudhNkyAAAAAGRz/stnx19GF6TNWVzTIonNaD5LnVglz5UStHz1FAAAAADwZmGiCAAAAAAwMFEEAAAAABiYKAIAAAAADEwUAQAAAAAGJooAAAAAAAMTRQAAAACAgYkiAAAAAMDARBEAAAAAYGCi6Nmru5+PDNx+WP/x4RdTI9PfvxKR+7dHBqa+up8xear2f5/ePQrDzSXUTM3UTM3UTM3UTM3UTM39VbO1FS/1p27R+371AyaKvfHzV3Pb4zc3vz6fLWbi8u7x3u7Ns0+u/WXzZWzJdw9bfLhT1EzNSaiZmpNQMzUnoWZqTkLN1NwOpfqT9Gy/ThQmir3w4IurWxOX/99np1TSTk9/MC5PX7xQCUtEzdSchJqpOQk1U3MSaqbmJNRMze3QrT9J/vt1wjBRzN/jO8sbMn7x/dNKea92f3ois+fPh+HTA1PT1+TqL1+eU8qvxVIzNbtRMzUnoWZqTkLN1JyEmqm5Hdr1J8l7v04cJor5m7i8Hn2QnUXYZZ/ObdW77MTl3ePlOXn6467q+9PUTM1JqJmak1AzNSehZmpOQs3U3A7F+pP0ZL9OHCaKvfDWZ/91deLp8mffv8oYNHF593jv2fGe+X72e3/28P40NVNzEmqm5iTUTM1JqJmak1AzNbdDrf4kPdqvE4aJYh62iwNT5n+X6dSlu5fHH9/5q4f/UpOEb1Rv388UTs2tUXMdNcdRcx01x1FzHTXHUXMdNce9qTVH5V1/Eu39OuGCvWfHPnKnRgY8JZ80/vaUZJJJJplkkkkmmWSSSWaL+ZsaGeCJIgAAAADAwEQRAAAAAGBgoggAAAAAMDBRBAAAAAAYmCgCAAAAAAxMFAEAAAAABiaKAAAAAAADE0UAAAAAgIGJIgAAAADAwEQRAAAAAGBgoggAAAAAMDBRBAAAAAAAAAAAAAAAAAAAQJuCarXqJTfwlXzS+NtTkkkmmWSSSSaZZJJJJpkt5i8IAv5GEQAAAABgYKIIAAAAADAwUQQAAAAAGJgoAgAAAAAMTBQBAAAAAAYmigAAAAAAAxNFAAAAAICBiSIAAAAAwMBEEQAAAABgYKIIAAAAADAwUQQAAAAAGJgoAgAAAAAMTBQBAAAAAAYmijkrLQTB5GpFREQqq5NBTX1JV5oxYU5kQdZsq+akJVlr7oPWcNQspYX6ooVS9zVLMyxMdm1Lq2adlvbXGv76RrNCO1g7Wa/q3JIVxw2r5mbXyNjQdmtonYNWsq8RKbpB7V7n60yhb+TVGs3FJ3ask6T7GI1sc8/V+oaVnLwsc3LCMVVIbja1wv2GSW3kyCE52iruHqJzXJ1bdJ1HHo9LZvYY6BwVW7RYtT07RZHCSrnNtatVI7m8Ugi3VtwJw2L/iK1WX7G6U3QsiXzkBGi/DavV8kqhsLJSrDVkeaVQ35XySsHRuJ0k12NijeMO7r7mhCXdJdfDpLjTN61hJpdXCmo1J7SqvRcZa67uFCXtFDoZrWEkq/WN8kqx9uGdYnw0y9jOjmSlds41ufmrTGeKu+a0cbv7ZK1eZyV7HpE0RlF/NdM3WtTc/JV2a1Q99Q2j5kzXlPJKQYorrh3PeoW1k5X6hrtmlTsZKzml5TMmNwPdh7DjEalJ+67AY3LsqNk9JLl/6mzR2M5O1etxycweAx2jYusWa+eJYmV1Mrg3GpnFdaa0MLQ1V9t+efRG+oS7UejajEhpIbgg9UbfkRvK33PkrrI6vzW3sTjcXFIYHRIRkcHhsf3DssY26onhFre3xq4vDmbIs2u2l2RVr/nkt0Y8eXB4bP1eSUSkfChzsxmi01rV3Ivu1XIqzw+KO2szKolmsl5rxJO1+sbg4lrt+A+NFsaG4wVmaWc7Waud80yuy3qmpLdzFnayVq9z1exvRNIZRf3VTN9IT67z0Rr++kZTpmvK4OKj6tqs4xeZr7CJyZk5kpXuZKxktR4eT648PyiGzTs4O1c4eK53Q+zjrsBPchtHTbkXtbw383hcsrPHQMeo2EaLdTAx7e6JouMroeQnitFNuL9L6tsnio15/E70u5CmLN9D1INiGYlt1X3Njr3QqvnEt4YzOXwM7j43MvSNpL3IXHOLZj4BreGzbzTirOis7RxP1mvn/JKTFigk2++GaCWr9Tor2duIpDeK+qvZSk5YoJDcj30jYUH2ZI99Q3Wsc9wQKrVGOfZEUa9vlI3nfprt7Lo9TmqOrpONQFfZnfaNJu1riq/k9LvoaHzyhCXzFuPnkcfjosIeA52jYmqLeZ8opp5Bia+eFnfMx6LNverXiWLZfCIbaxPnYNV597LfX3Efsa5rTt+L7DXXF53E1nAkK71ykNqq7vdXMtUcuV/VPIL6L2B46RsJPUGhneN3OHrtnFNycqZKcn1x1r4Rbw29Xpe077ojku4o6q9m+kZicsKS7Mm59A2Na4oVrXaFdQdpXFMiycp3Mrm0RvOdQbVrd53+XYGX5NSjZvYQpYliO/dmHo9LdvYYmDQqpraY9/+YTWdvwNQLXZtpfnBw8VE19sVEH6rtRe3IFVbKj6IvaJQWLhyovKo3NNrs1aVbS1lftLRrTtsLhZpF5OS2hp1ceX5QCCsdHB6Trl85SG1Vq326VM8ZGm28G1E+3Nd4+Uu5Nezkpsx9o7QQzMuGq99mbed4sl4755csonWmJLezZHzvLZas2OsSa9YekRRHUX810zdSkmvLfLRGHn1D7ZpibE31Cuuk9TcYIqrtbEvt4d0bHB5bD/8Aq7K9pXLtrtO/K/CS3OqoafaQNrZYH8/9HZfM7DGwy1Gx3Ylp16+eGl9f7RTDKW0br56afwVb/360X58oNjW+6W3OfbO9sBGZQxtfTCa3U/c1pyzpKNmu+eS3hiPZtbEukiObsFrD/dZU1tZIbunet0YufUMaT0G121mi39eptnNOyapnijT/Kyue2lm/11l9Q39EavxKuTX8nSn0jXxaI/Irb30jWzsbT1lUW8NO1uobrppDWV89tZJTjmnmmhvZ2WpO3ZjG69/ek6N/DBVv6+RjrbJF13nk77hklnY7Zd9QJLVYUPufVJXVyaGl/UZKW1+UBEEkuRlQ+3hpIbj3cXVtRkoLwYX1Rh+68tzaTmQFKe6EH6l99qQw9pRkkkkmmWSSSSaZZJJJ7lHym7xFXcHrdPh7pR/bkGSSSSaZZJJJJplkkl+/5Dd5i7qCIPD+N4oAAAAAgP7CRBEAAAAAYGCiCAAAAAAwMFEEAAAAABiYKAIAAAAADEwUAQAAAAAGJooAAAAAAAMTRQAAAACAgYkiAAAAAMDARBEAAAAAYGCiCAAAAAAwMFEEAAAAAAAAAAAAkCyoVqtecgNfySeNvz0lmWSSSSaZZJJJJplkktli/oIg4NVTAAAAAICBiSIAAAAAwMBEEQAAAABgYKIIAAAAADAwUQQAAAAAGJgoAgAAAAAMTBQBAAAAAAYmigAAAAAAAxNFAAAAAICBiSIAAAAAwMBEEQAAAABgYKIIAAAAADAwUQQAAAAAGJgo5qy0EASTqxURkcrqZBAKl2glR6IzJpcWYjH+kusLMkYntGq0dfSSPdbcXLZQ0qxZr9fl1zc81qxYdbyPNTtHliNo1RxpjKw153h2q2X7Gjdy7nX1xSf2TLHr89SfPR7BxJbvNrwZozdqeGtnK1mtnSXpbsPjKKpxixTjbeT3lKzbzibN/mzS7HXO8S1+vujeVzvT3K2lMJ6rS+4zzWrb6lfVNuwUa+sWVsrtrF6tVquR5J1i+LnySqGZUF4pRPJ2ilLcMROsFRo/RXPqpYlEA1p9NpJg/jP2KTs5dU9bKq8UCisrxXg7llcKrm10nRzJM9q84+TySrH24Z1irWX8JTv7QDfJkU3Uay2vFKS44qw3Y7K3mpvN4u4cGWpOXtJRcq59w1fNtdM85RC23c5WHyuvFHJoDVeXPpFHUKmd/Y0bufa6auK14ITUnGt/9nYEU9qno2SrNdTOFH/t7LjqaV2tkq+nGUckV2soHUGbt5HfY3LkN6qtodefbdr3SDWNilPOF4X7amea8/hqjOdexadfCTORhH7VxhPFyuq90dq5OrY03/18ubQwdHj90eJgGLq9NVYcW7qV+JWZtUKhIPHVSwvBBakfsB250fhevNVnBxevh78u3Voau14ryv5U/U794IbK1wSV1fmtuY3FYdfvCqNDqsn1vMHhsf3Dcre5g4trtbYZGi2MDQ96TtYX1jq4+Ki6Nusj2YPC6JBI5flBMeyWg7NzhYPnGv3PrjnLXvSqb+jWXHl+UNxZm+k6MRId62ODw2Pr90oiIuVDmZvtuosnt0Zle6s+dqkl+zqCWu3sb9zIs9elXwuyJTdlGqN60J+zspPVtuW4guicKf7a2cdVr1Vy1hHJ0Rreeou/kd9fcmMLWdvZQak/56hWcfr5onufVktzHV+d8dynaJ9JqjatX3U2JU19thabg9b/uVMsrOzEZqq1p4zN7xqsbx3sFZoh9Wlv0lcV7Xw2/MdOc07t+pT9IDR1T1M1Ws/YZu0guJs1Q3LkcagrvbPjbrR0Lsmu9mg/2d2qyYcxQ7Kvmo2uveP4mipLa+j0ukia/77hreYWJXeYHOtj5ZWCSNKLGFlaw71AIdnbEdRtZz/jhpXsrde5rgU6ybo159SfPR7BpCXdJJfjT43UzhR/7ZxUc/Z2dlxPlUYk15Va5wjGEj2N/F6vKeEGdEYkM1Nz5HcnK53d8SzrfFEft400u6m0x3MPIn0msdq0ftXBDrR4hGxFRz4XH/V2mu9Iul/hc6wQTuOaL45G53wS2UQ7n23UFbm+2iWJWJWn7mmaepHOUPd7FRrJ7q7b0XFPmmF5S1Z62TLWqhoTRXdymK5Zc/Q7GWfhGjVn6nUptVU99g3tms3xM2s7x24X9F4etmtL+frqJB5B1Xb2N27k0+vSR+yTU3Oe/bm++OSeKckNfXLbOaFmL8n+2lktOcrryO8pOTmzm+QECv3ZTeseqaZ+nqSdLxpjoHOL5vHVHc99aOfqk96v2v2P2VRWJ2+Mlrt8nl5YKRuvrZbure8vDQVBMLS0Hz42NiWtMLO2M7Z0a7v2Q+MZ+eDio2pzYtfWZ0VEZj4uSvHjmeRPhY8grTdeu1IrsloNT8RHxgPeodFC4gczJZcWLhxkeX1FSgvBvGw8sh9H+0sWUXpjIFOrdp6sWfPg8Nh6+L5zZXtrX+OlG7vmrO3Ti76hXfPQaOO93vKhSjuHKs8PCmEbDA6PSZaXh12tEXllPoP8jqBeO/sbN3LrdanXgkzJEcqjn+f+3KB8BFO3pSHzmRKj2M6p1P92'),
(8, 'Data Perkawinan', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.<br></p>');

-- --------------------------------------------------------

--
-- Struktur dari tabel `destinasiwisata`
--

CREATE TABLE `destinasiwisata` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `isi` varchar(6000) NOT NULL,
  `foto` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `destinasiwisata`
--

INSERT INTO `destinasiwisata` (`id`, `judul`, `isi`, `foto`) VALUES
(1, 'Curug Cimaranten', '<p class=\"MsoNormal\">Salah satu Potensi Alam Lainnya yang dimiliki Desa\r\nMandalahayu adalah Curug Cimaranten.<o:p></o:p></p><p class=\"MsoNormal\">Terletak di wilayah Kp. Tamansari RT 002 RW 007 Desa\r\nMandalahayu Kecamatan Salopa Kbaupaten Tasikmalaya.<o:p></o:p></p><p class=\"MsoNormal\">Air terjun yang memiliki tinggi 3 meter dan lebar sekitar 10\r\nmeter ini berada di muara yang menghubungkan antara sungai cimedang dan\r\nCimaranten. Memiliki debit air yang sangat kuat,<o:p></o:p></p><p class=\"MsoNormal\">Memiliki debit air yang sangat kuat, meskipun saat bulan\r\nkemarau debit airnya masih sangat kuat dan mampu mengalir Sedangkan saat musim\r\npenghujan sendiri bedit air semakin besar hingga terbelah menjadi dua bagian.\r\nInilah yang membuat anda selalu ingin menyaksikan keindahan yang ada di Curug\r\nCimaranten satu ini. Meskipun sejumlah fasilitas belum disediakan namun tak\r\nmenghalangi niat para pengunjung untuk menyaksikan keindahan alam air terjun\r\nCimaranten ini. Namun meskipun begitu jangan kuatir dengan keindahan yang\r\ndimiliki oleh air terjun di Desa Mandalahayu ini.</p>', '62fff1715c337image 9.png'),
(2, 'Paraga Stones', '<p class=\"MsoNormal\"><span lang=\"EN-US\">Kabupaten\r\nTasikmalaya dianugerahi banyak wisata alam yang mempesona, salah satunya Batu\r\nParaga atau yang biasa disebut Paraga Stone. Letaknya begitu tersembunyi di\r\nKampung BambayangDusun Tamansari Desa Mandalahayu Kecamatan Salopa Kabupaten\r\nTasikmalaya.</span><o:p></o:p></p><p class=\"MsoNormal\"><span lang=\"EN-US\">Untuk\r\nmenuju lokasi ini Kita membutuhkan waktu sekitar 2 jam perjalanan. Jaraknya\r\nkurang lebih sekitar 37 km dari pusat kota Tasikmalaya.</span><o:p></o:p></p><p class=\"MsoNormal\"><span lang=\"EN-US\">Batu Paraga\r\nmerupakan susunan batuan artistik yang berbentuk seperti balok berukuran besar\r\ndan menyerupai sebuah bukit. Formasinya pun sangat unik. Tempat wisata ini\r\ndinamakan Batu Paraga</span></p><p class=\"MsoNormal\">Diantara\r\nBatu Paraga Juga Mengalir Sungai Yang Airnya Jernih Berwarna Kehijauan Dan\r\nMempunyai Kedalaman Kurang Lebih 7 Meter. Jika Sedang Beruntung, Kita Bisa\r\nMelihat Monyet Ekor Panjang Berkeliaran Di Sekitar Tempat Ini. Wisata Batu\r\nParaga Memang Belum Dikenal Banyak Orang, Oleh Karena Itu Wisata Alam Ini Masih\r\nTerlihat Alami Dan Begitu Menawan. Namun Sayang, Potensi Wisata Ini Belum\r\nMendapat Perhatian Dari Pemerintah Setempat.<br><br>Hal Ini Disebabkan Karena\r\nAkses Menuju Sungai Cimedang Masih Belum Memadai, Karena Hanya Bisa Dilewati\r\nDengan Berjalan Kaki. Tetapi Kondisi Tersebut Tidak Menyurutkan Para Wisatawan\r\nUntuk Datang Ke Tempat Ini. Pasalnya Setelah Lokasi Ini Mulai Dikenal, Jumlah\r\nWisatawan Yang Berkunjung Ke Tempat Ini Mulai Mengalami Peningkatan Secara\r\nSignifikan Terutama Ketika Akhir Pekan Atau Pada Saat Waktu Liburan.<br>\r\n<br>\r\nSaat Ini Belum Ada Pungutan Biaya Untuk Memasuki Lokasi Ini. Hal Tersebut\r\nDikarenakan Kawasan Batu Paraga Belum Memiliki Pengelolaan Wisata Yang Baik.\r\nWalaupun Demikian, Kawasan Ini Sangat Cocok Untuk Anda Yang Butuh Relaksasi\r\nKarena Suasana Alamnya Yang Begitu Asri.</p><p class=\"MsoNormal\"><span lang=\"EN-US\">\r\n\r\n\r\n\r\n</span></p><p class=\"MsoNormal\">Selain Bisa Berfoto Dengan Keindahan Sungai Dan Formasi\r\nBebatuan Yang Unik, Anda Bisa Melakukan Kegiatan Bermain Air Seperti Berenang\r\nAtau Membuat Hammock Di Atas Sungai. Yang perlu diperhatikan adalah ketika kamu\r\nberenang usahakan agar arusnya sungainya sedang tenang, sebab Sungai Cimedang\r\nmemang cukup dalam.<o:p></o:p></p>', '62fff27d78e98image 12.png'),
(3, 'Situ Palahlar', '<p class=\"MsoNormal\">Situ\r\nPalahlar Merupakan Suatu Destinasi Wisata Yang Sedang Dirintis Oleh Pemerintah\r\nDesa Mandalahayu.</p><p class=\"MsoNormal\">Sejalan Dengan Visi Misi\r\nKepala Desa Mandalahayu Dimana Ingin Menjadikan Desa Mandalahayu Sebagai Desa\r\nWisata.</p><p class=\"MsoNormal\">Situ Palahlar Terletak Di\r\nDusun Sukahurip Desa Mandalahayu Kurang Lebih 2 Km Dari Kantor Desa\r\nMandalahayu.</p><p class=\"MsoNormal\">Situ Palahlar Sendiri Di\r\nBangun Di Atas Tanah Kas Desa Hasil Dari Tukar Guling Dengan Masjid Besar\r\nSalopa dan Gedung NU Salopa.</p><p class=\"MsoNormal\">Situ Palahlar Sekarang Masih Dalam Tahap Pmbangunan dan Penataan,\r\nSedangkan Anggaran Yang Di Gunakan Bersumber Dari Anggaran Dana Desa Tahun 2021\r\nSebesar Rp. 222.389.900,- Dan Tahun 2022 Sebesar Rp. 418.713.680,-</p><p class=\"MsoNormal\"><o:p></o:p></p>', '62fff1339d454image 8.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `galeri`
--

CREATE TABLE `galeri` (
  `id` int(11) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `galeri`
--

INSERT INTO `galeri` (`id`, `gambar`) VALUES
(10, '62fff619ed927Group 2 (1).png'),
(12, '62fff63167fc9Group 2.png'),
(13, '62fff63dcb754Group 2 (2).png'),
(14, '62fff649ef97eGroup 2 (3).png'),
(15, '62fff65a07262Group 2 (4).png'),
(16, '62fff66588b7bGroup 2 (5).png'),
(18, '62fff67d2189bimage 12.png'),
(19, '62fff688dbdacimage 11.png'),
(20, '6305b3ad4182fDSC_0256.JPG');

-- --------------------------------------------------------

--
-- Struktur dari tabel `gambaranumum`
--

CREATE TABLE `gambaranumum` (
  `id` int(11) NOT NULL,
  `isi` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `gambaranumum`
--

INSERT INTO `gambaranumum` (`id`, `isi`) VALUES
(1, '<p class=\"MsoNormal\">Desa Mandalahayu Merupakan Satu Dari Sembilan Desa Yang\r\nBerada Di Wilayah Kecamatan Salopa Kabupaten Tasikmalaya. Desa Mandalahayu\r\nTerletak Sebelah Barat Ibukota Kabupaten Tasikmalaya Dengan Jarak Ke Ibukota\r\nKecamatan Salopa ± 1 Km Dengan Waktu Tempuh ± 5 – 10 Menit. Jarak Ke Ibukota\r\nKabupaten Tasikmalaya ± 40 Km Dengan Waktu Tempuh Menggunakan Kendaraan\r\nBermotor± 1.5 Jam. Desa Mandalahayu Termasuk Desa Perbukitan, Memiliki Luas\r\nWilayah 1114.760 Ha, Dengan Ketinggian 500 Dpl Dari Permukaan Laut.<br>\r\n<br>\r\nSecara Astronomis Desa Mandalahayu Terletak Antara 1080.15 - 1080.17 LS Dan\r\n70.28 – 70.31 Ls. Adapun Secara Administrasi Desa Mandalahayu Terdiri Dari 5\r\n(Lima) Wilayah Kedusunan, 9 (Sembilan) RW, Dan 30 (Tiga Puluh) RT, Dengan\r\nBatas-batas Sebagai Berikut :<br>\r\n-    Sebelah Utara            : Desa Kawitan<br>\r\n-    Sebelah Selatan         : Desa Karyamandala<br>\r\n-    Sebelah Barat             : Desa Kertarahayu<br>\r\n-    Sebelah Timur            : Desa Mulyasari<o:p></o:p></p>');

-- --------------------------------------------------------

--
-- Struktur dari tabel `hubungikami`
--

CREATE TABLE `hubungikami` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `nohp` varchar(255) NOT NULL,
  `isipesan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `hubungikami`
--

INSERT INTO `hubungikami` (`id`, `nama`, `email`, `nohp`, `isipesan`) VALUES
(1, 'Asdasd', 'asdasd@gmail.com', '6289502122418', 'wafasdasd'),
(2, 'alert(&#39;makin Tua&#39;);', 'asd1@gmail.com', '628950213141', 'alert(&#39;Makin Tua&#39;);');

-- --------------------------------------------------------

--
-- Struktur dari tabel `informasi`
--

CREATE TABLE `informasi` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `isi` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `informasi`
--

INSERT INTO `informasi` (`id`, `judul`, `isi`) VALUES
(2, 'DUKUNGAN MASYARAKAT DESA DALAM PEMBANGUNAN DESA', 'Dalam pelaksanaan kegiatan pembangunan masyarakt Desa Mandalahayu dalam bentuk dukungan dengan adanya swadaya masyarakat di setiap wilayah titik pembangunan seperti terlihat dalam gambar ketika gotongroyong masyarakt dalam suatu kegiatan yang dilaksanakan oleh pemerintah Desa.'),
(3, 'AKTIVITAS PEMERINTAHAN DESA MANDALAHAYU', 'Dari Mulai Tahun 2013 sampai sekarang  Kepemerintahan Desa Mandalahayu di pimpin oleh Bapak ITANG SULAEMAN sebagai Kelapa Desa Mandalahayu Kecamatan Salopa Kabupaten Tasikmalaya, dibawah kepemerintahannya selalu kerjasama baik dengan Pemerintah. Lembaga ataupun dalam pelaksanaan kegiatan dijalankan dengan baik, seiring dengan pandemi COVID-19 beberapa kegiatan sosialisi, Musyawarah dalam Percepatan Penangan dan Pencegahan Covid-19 terus dilaksanaakn sampai saat ini, adapun permasalahan-permasalahan selalu diselesaikan lewat musyawarah seperti terlihat beberapa kegiatan digambar yang dilaksanakan oleh Pemerintah Desa Mandalahayu.'),
(4, 'UNDANGAN PERPISAHAN KKN IAIT TAHUN 2022', 'Kepada Yth.\r\n1. Ketua BPD dan Anggota\r\n2. Ketua MUI\r\n3. Ketua LPM\r\n4. KEtua Karangtaruna\r\n5. Kepala Dusun\r\n6. Ketua RW dan RT\r\n\r\nSalam silaturhami Kami sampaikan Semoga Bapak/Ibu semua Senantiasa ada dalam\r\nkeadaan sehat, serta selalu ada dalam ridho dan karunia Alloh. SWT. Amin.\r\n\r\nSelanjutnya, dikarenakan Masa Khidmat KKN IAIT Tasikmalaya Tahun 2022 akan\r\nsegera berakhir Maka Kami atas Nama Pemerintah Desa Mandalahayu dan KKN IAIT akan\r\nmengadakan acara penutupan dan juga perpisahan KKN IAIT Tasikmalaya Tahun 2022 yang\r\ninsya Alloh akan dilaksanakan Pada :\r\nHari : Juam’at\r\nTanggal : 26 Agustus 2022\r\nWaktu : 13.00 WIB s/d Selesi\r\nTempat : Aula Desa Mandalahayu\r\nMengingat Pentingnya Kegiatan tersebut, Kami sangat mengharapkan kehadiran\r\nSeluruh Warga Masyarakat Desa Mandalahayu untuk Hadir pada waktunya.\r\nDemikian yang dapat Kami sampaikan atas kehadirannya Kami ucapkan terimakasih.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelembagaan`
--

CREATE TABLE `kelembagaan` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `isi` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `kelembagaan`
--

INSERT INTO `kelembagaan` (`id`, `judul`, `isi`) VALUES
(1, 'BUMDes', 'Badan usaha milik desa merupakan usaha desa yang dikelola oleh Pemerintah Desa, dan berbadan hukum. Pemerintah Desa dapat mendirikan Badan Usaha Milik Desa sesuai dengan kebutuhan dan potensi Desa. Pembentukan Badan Usaha Milik Desa ditetapkan dengan Peraturan Desa.'),
(2, 'PKK', 'Pemberdayaan Kesejahteraan Keluarga, disingkat PKK, adalah organisasi kemasyarakatan yang memberdayakan wanita untuk turut berpartisipasi dalam pembangunan Desa Mandalahayu.'),
(3, 'Karang Taruna', 'Sebagai organisasi sosial kepemudaan Karang Taruna merupakan wadah pembinaan dan pengembangan serta pemberdayaan dalam upaya mengembangkan kegiatan ekonomi produktif dengan pendayagunaan semua potensi yang tersedia di lingkungan baik sumber daya manusia maupun sumber daya alam yang telah ada. Sebagai organisasi kepemudaan, Karang Taruna berpedoman pada Pedoman Dasar dan Pedoman Rumah Tangga di mana telah pula diatur tentang struktur pengurus dan masa jabatan di masing-masing wilayah mulai dari Desa/ Kelurahan sampai pada tingkat Nasional. Semua ini wujud dari pada regenerasi organisasi demi kelanjutan organisasi serta pembinaan anggota Karang Taruna baik dimasa sekarang maupun masa yang akan datang.'),
(4, 'LPM', 'Lembaga Pemberdayaan Masyarakat (LPM) adalah salah satu lembaga kemasyaratan yang berada di desa. Lembaga Pemberdayaan Masyarakat mempunyai tugas menyusun rencana pembangunan secara partisipatif, menggerakkan swadaya gotong royong masyarakat, melaksanakan dan mengendalikan pembangunan.'),
(5, 'MUI', 'Majlis Ulama Indonesia yang membidangi keagamaan di Desa');

-- --------------------------------------------------------

--
-- Struktur dari tabel `misi`
--

CREATE TABLE `misi` (
  `id` int(11) NOT NULL,
  `isi` varchar(10000) NOT NULL,
  `foto` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `misi`
--

INSERT INTO `misi` (`id`, `isi`, `foto`) VALUES
(1, '<div style=\"text-align: justify;\"><div>1. Mengamalkan dan melaksanakan ajaran agama dalam kehidupan sehari-hari</div><div>2. Meningkatkan kinerja dan pelayanan aparat yang berkualitas, profesional dan berjiwa pelayanan prima</div><div>3. Meningkatkan sarana dan prasarana yang mendukung dalam kehidupan bermasyarakat</div><div>4. Meningkatkan taraf hidup masyarakat</div><div>Mengupayakan kemandirian masyarakat dalam pelaksanaan otonomi berbasis pada potensi desa</div><div>5. Meningkatkan pemberdayaan masyarakat melalui partisipasi aktif dalam pembangunan maupun kegiatan ekonomi produktif</div><div>6. Meningkatkan ketertiban dan keamanan serta penghormatan terhadap supremasi hukum</div><div>7. Meningkatkan kerja sama dan gotong royong dalam bermasyarakat yang berazazkan kekeluargaan</div></div>', '630fb5d1bd8fcsedang_1612685137_musyawarah-desa.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelayanan`
--

CREATE TABLE `pelayanan` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `isi` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pelayanan`
--

INSERT INTO `pelayanan` (`id`, `judul`, `isi`) VALUES
(3, 'Test Pelayanan', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.'),
(4, 'SURAT KETERANGAN USAHA', 'Persayaratan : \r\n1. KTP Pemohon\r\n2. KK Pemohon\r\n3. Bukti Usaha');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemerintahdesa`
--

CREATE TABLE `pemerintahdesa` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jabatan` varchar(255) NOT NULL,
  `foto` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pemerintahdesa`
--

INSERT INTO `pemerintahdesa` (`id`, `nama`, `jabatan`, `foto`) VALUES
(5, 'ITANG SULAEMAN', 'KEPALA DESA', '62fffe4109fddimage 17.png'),
(6, 'RIZWAN FARIZ', 'SEKRETARIS DESA', '62fffe6155f4aimage 18.png'),
(7, 'E. SAMSUL MARIP, S.Pd.', 'KAUR TATA USAHA &UMUM', '62fffe8a65439image 19.png'),
(8, 'NANDANG SIHABUDIN, S.Pd.', 'KAUR KEUANGAN', '62fffeb25621dimage 20.png'),
(9, 'MAMAN SURYAMAN', 'KASIE PELAYANAN', '6306330d08310pk maman 4x6.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengaturanweb`
--

CREATE TABLE `pengaturanweb` (
  `id` int(11) NOT NULL,
  `namaweb` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `lokasi` varchar(255) NOT NULL,
  `googlemaps` mediumtext NOT NULL,
  `nohp` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pengaturanweb`
--

INSERT INTO `pengaturanweb` (`id`, `namaweb`, `logo`, `lokasi`, `googlemaps`, `nohp`, `email`) VALUES
(1, 'Desa Mandalahayu', '62fbad8228a50logos.png', 'Desa Mandalahayu Kecamatan Salopa, Tasikmalaya, Jawa Barat 46192 - Indonesia', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1014116.2633650467!2d107.34470215464539!3d-6.843562385137026!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e65f05a5b36af91%3A0x4f805a2b9d4eeaa5!2sKantor%20Desa%20Mandalahayu!5e0!3m2!1sid!2sid!4v1660548843379!5m2!1sid!2sid', '085324999715', 'desamandalahayusalopa@gmail.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `potensidesa`
--

CREATE TABLE `potensidesa` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `isi` varchar(10000) NOT NULL,
  `foto` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `potensidesa`
--

INSERT INTO `potensidesa` (`id`, `judul`, `isi`, `foto`) VALUES
(1, 'Produksi', '<p class=\"MsoNormal\">Desa Mandalahayu, Kecamatan Salopa sebagai salah satu desa\r\ndi Salopa yang memiliki Banyak Pengrajin Olahan Makanan Ringan Berbahan Baku\r\nsingkong, Seperti Pikca, Kicimpring, Keripik dll.<o:p></o:p></p><p class=\"MsoNormal\">Sebagai daerah sebagian besar masyarakat di desa ini bermata\r\npencaharian sebagai Petani, Maka bahan Baku singkong tidak sulit didapatkan,\r\nsehingga mempermudah Pengrajin untuk mendapatkan bahan baku<o:p></o:p></p><p>\r\n\r\n\r\n\r\n</p><p class=\"MsoNormal\">Namun Di Tengah Moderninasi, Perajin Yang Ada Di Desa\r\nMandalahayu Ini Diharapkan Mampu Mengikuti Tren Pasar Dengan Terus Berinovasi\r\nDalam Mengembangkan Produksinya Sehingga Dapat Menghasilkan Hasil Yang\r\nMemuaskan Dan Dapat Menarik Daya Beli Sehingga Banyak Konsumen Yang Bermaksud\r\nMembeli Ataupun Melihat Serta Belajar.</p><p class=\"MsoNormal\">Hal itu dilakukan selain untuk menjawab kebutuhan pasar yang\r\nmakin beragam juga untuk meningkatkan kreativitas dalam produksi sehingga mampu\r\n berkembang guna memenuhi keinginan konsumen. Demikian pula dampak semua\r\nitu akan berpengaruh pada suatu tempat yang jika dikaji dan dicermati akan\r\nmenjadi potensi lahirnya Desa Wisata.<br><br>\r\nSejauh ini,  di Desa MANDALAHAYU untuk\r\nsemakin berinovasi untuk menjadikan desa MANDALAHAYU sebagai Desa Wisata selain\r\nPotensi-poten lain yang berada diwilayah Desa<o:p></o:p></p>', '62ffee1637491Frame 1.png'),
(5, 'Peternakan Ikan Nila', '<p class=\"MsoNormal\">Salah satu Potensi yang ada di Desa MANDALAHAYU selain\r\nPRODUKSI OLAHAN MAKANAN, Sumber daya Alam, Kesenian Budaya adalah Peternakan\r\nIkan GURAME DAN NILA, yang berada di daerah Kp. TAMANSARI, yang telah lama\r\nterus mengembangkan budidaya ikan GURAME DAN NILA tersebut sehingga kampung\r\ntersebut dinamakan Kampung GURAME, hingga saat ini peternakan Budidaya ikan\r\nGURAME tersebut masih terus berjalandan masyarakat disekitarnya ikut serta\r\nbudidaya ikan GURAME.<o:p></o:p></p>', '62fff01a347adFrame 1 (1).png'),
(6, 'Pertanian', '<p class=\"MsoNormal\">Tidak ketinggalan Sarana Pertanian yang ada&nbsp; diwilayah Desa Mandalahayu beraneka ragan\r\njenis tanaman pangan atau tahunan yang ditanam baik Padi sayuran, buah-buahan\r\ndan jenis-jenis pohon bahan bangunan seperti terlihat digambar.<o:p></o:p></p>', '62fff57f8c6acGroup 2 (4).png'),
(7, 'Infrastruktur Jalan', '<p class=\"MsoNormal\">Sarana Transportasi di Desa mandalahayu Alhamdulillah di\r\nlalui oleh jalan Kabupaten yang dilalui oleh beberapa trayek angkutan umum\r\nsehingga memudahkan mobilisasi warga yang hendak bepergian ke kabupaten/kota,\r\nataupun mobilisasi barang.<br>\r\nSedangkan Untuk jalan desa dan jalan lingkungan di wilayah Desa\r\nMandalahayu&nbsp; sudah hampir semua wilayah\r\nsudah dibagun Sarana Transportasi dari bebagai anggran, Baik dana Desa, Banprov\r\nserta Bantuan Keuangan Kabupaten, Serta Anggaran Lainnya Seperti Program PISEW\r\ndll.<o:p></o:p></p>', '62fff1eeee18eimage 10.png'),
(8, 'Sarana Perbankan', '<p class=\"MsoNormal\">Dari sarana Perbankan yang berada Desa MANDALAHAYU terdiri\r\nDari bank bpr artha sukapura, pos Indonesia agen bri-link yang tersebar di\r\nbeberapa wilayah sehingga mempermudah akses masyarakat dalam Fasilitas\r\nperbankan,<o:p></o:p></p>', '62fff4647108bGroup 2 (2).png'),
(9, 'Sarana Keagamaan', '<p class=\"MsoNormal\">Sarana Ibadah Desa MANDALAHAYU saat ini ada beberapa mesjid\r\nyang terdiri 11 DKM yang dalam segi fisik sudah baik seperti terlihat&nbsp; 2 diantara beberapa DKM yang fisik\r\npembangunan tidak jauh seperti gambar tersebut<o:p></o:p></p>', '62fff23e56813image 11.png'),
(10, 'Sarana Pendidikan', '<p class=\"MsoNormal\">Beberapa Potensi Sarana Pendidikan Desa MANDALAHAYU\r\ndiantaranya :<br>\r\n1. PAUD (TK,KB,RA,TAAM)&nbsp;&nbsp;&nbsp;&nbsp;: 7\r\nSekolah <br>\r\n2. SD/MI&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:\r\n4 Sekolah<br>\r\n3. SMP/MTS&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;:\r\n2 Sekolah<br>\r\n4. SLTA SEDERAJAT&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:\r\n2 Sekolah<br>\r\n5. MADRASAH DINIYAH&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: 10\r\nDINIYAH<br>\r\n6. PONDOK PESANTREN&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;: 3 PONPES<br>\r\nYang semuanya berada di wilayah Desa MANDALAHAYU yang telah memeilik IJIN\r\nOPERASIONAL sampai saat ini semakin pesat perkembangannya.<o:p></o:p></p>', '62fff34855bc8Group 2.png'),
(11, 'Sarana Perekonomian', '<p class=\"MsoNormal\">Dari sarana Perekonomian Desa Mandalahayu sudah didukung\r\noleh berbagai Vasilitas perdagangan, dari mulai Ruko, Mini Market, Rumah Makan\r\nPOM, Rest Area, serta warung warung kecil dan grosir, sehingga memudahkan\r\nMasyarakat dalam menjalankan roda perekonomian.<o:p></o:p></p><p class=\"MsoNormal\">Namun yang disayangkan Desa Mandalahayu belum memiliki\r\nfasilitas Pasar Desa dikarenakan Desa Mandalahayu tidak memiliki Tanah Kas Desa\r\nyang Luas dan Strategis, dikarenakan Tanah Kas Desa yang Strategis Sudah Habis\r\ndipakai untuk Fasilitas Umum seperti Puskesmas, Gedung Dakwah, Serta Markas\r\nKoramil dan lain-lain.&nbsp; <o:p></o:p></p><p>\r\n\r\n\r\n\r\n</p><p class=\"MsoNormal\">Dalam Upaya meningkatkan Daya saing di Pasar Global, serta\r\nuntuk meningkatkan kreativitas warga dalam hal Produksi dan Pemasaran,\r\nPemerintah Desa Mandalahayu bekerja sama dengan berbagai pihak untuk\r\nmenyenggarakan berbagai jenis pelatihan untuk UMKM, dan Lainnya. Diataranya\r\nadalah Pelatihan Literasi Adopsi Teknologi Digital. Yang bekerja sama dengan\r\nPihak KOMINFO<o:p></o:p></p>', '62fff4b39d0f6Group 2 (3).png'),
(12, 'Sarana Kesehatan', '<p class=\"MsoNormal\">Dari segi Fasilitas Kesehatan Desa Mandalahayu ditunjang\r\nOleh Berbagai Sarana Kesehatan diantaranya:<o:p></o:p></p><p class=\"MsoNormal\">-    PUSKESMAS<o:p></o:p></p><p class=\"MsoNormal\">-    POLINDES<o:p></o:p></p><p class=\"MsoNormal\">-    POSYANDU<o:p></o:p></p><p class=\"MsoNormal\">-    KLINIK  <o:p></o:p></p><p class=\"MsoNormal\">Sejalan dengan VISI-MISI Desa Mandalahayu, Desa Sehat, Desa Wisata dan Desa Maju.</p><p class=\"MsoNormal\"><o:p></o:p></p><p class=\"MsoNormal\">Maka Pemerintah Desa sangat Serius dalam menyelesaikan\r\npermasalah kesehatan dengan bebagai cara dan upaya, <o:p></o:p></p><p class=\"MsoNormal\">Diantaranya melalui program, PAMSIMAS, SANITASI, serta\r\nPengadaan Alat Kesehatan Bagi Seluruh POSYANDU di Desa Mandalahayu<o:p></o:p></p><p class=\"MsoNormal\">Pada Tahun 2019 Desa Mandalahayu sudah mendeklarasikan\r\nsebagai Desa ODF, <o:p></o:p></p><p class=\"MsoNormal\">Untuk menunjang hal tesebut Maka Pemerintah Desa Mandalahayu\r\nmelakukan berbagai hal dari mulai sosialisasi tentang PHBS, dan memberikan\r\nBantuan berupa sarana sanitasi dan Juga Septic Tank Bagi Warga.<o:p></o:p></p><p class=\"MsoNormal\">Serta bekerja sama dengan semua elemen Masyarakat dalam hal\r\nmenjaga kesehatan lingkungan, mulai dari jangn buang samapah ke sungai dll.<o:p></o:p></p><p class=\"MsoNormal\">Dismping itu \r\nPemerintah Desa Bekejasama dengan Bidan Desa dan Juga Kader Posyandu\r\ndalam menanggulani dan mencegah Stanting di Desa Mandalahayu melalui Program\r\nPMT, dan Pemberian VITAMIN<o:p></o:p></p><p class=\"MsoNormal\">Program SANITASI Desa Mandalahayu Kecamatan Salopa Kabupaten\r\nTasikmalaya yang bersumber dari Anggaran DAK SANITASI DINAS PUPR Kabupaten\r\nTasikmalaya Tahun 2019.</p>', '62fff403a630fGroup 2 (1).png'),
(13, 'Sarana Olahraga', '<p class=\"MsoNormal\">Dalam menyalurkan minat dan bakat warga dalam hal olah raga\r\nPemerintah desa mempuyai beberapa fasilitas olahraga yang memadai seperti\r\nlapang futsal “green house” lapang Voly ball, lapang badminton, lapang tenis\r\nmeja, serta lapangan sepak bola<o:p></o:p></p>', '62fff5ccc15c8Group 2 (5).png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sejarah`
--

CREATE TABLE `sejarah` (
  `id` int(11) NOT NULL,
  `isi` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `sejarah`
--

INSERT INTO `sejarah` (`id`, `isi`) VALUES
(1, '<p class=\"MsoNormal\">Desa Mandalahayu merupakan satu dari sembilan desa yang\r\nberada di wilayah Kecamatan Salopa Kabupaten Tasikmalaya. Desa Mandalahayu\r\nterletak sebelah Barat Ibukota Kabupaten Tasikmalaya dengan jarak ke Ibukota\r\nKecamatan Salopa ± 1 Km dengan waktu tempuh ± 5 – 10 menit. Jarak ke Ibukota\r\nKabupaten Tasikmalaya ± 40 Km dengan waktu tempuh menggunakan kendaraan\r\nbermotor ± 1.5 Jam. Desa Mandalahayu termasuk Desa Perbukitan, memiliki luas\r\nwilayah 1114.760 Ha, dengan ketinggian 500 dpl dari permukaan laut.<o:p></o:p></p>\r\n\r\n<p class=\"MsoNormal\">Nama “Mandalahayu”, berasal dari kata “Mandala” yang artinya\r\n“Raja Mengajak Kerja”. Dahulu, bahwa Desa Mandalahayu merupakan Desa Raja yang\r\nberdiri di wilayah Kecamatan Salopa, bahkan sebelum Kecamatan Salopa Terbentuk Berdasarkan\r\nBuku ”Naskah Hari Jadi Tasikmalaya” (Sejarah Kabupaten Tasikmalayayang\r\nDiterbitkan Pada Bulah Juni 1975) Dinyatakah Bahwa Pada Tahun 1888 Masehi Yang\r\nMenjadibagian Dari/Masuk Kedalam Wilayah Kabupaten Sukapura (Sebelum Berganti\r\nNama Menjadi Kabupaten Tasikmalaya) Adalah Meliputi 14 Wilayah Distrik (Setara\r\nDengan Sebutan Kewadanaan) Dan 254 Desa, Dimana Salah Satunya Adalah Desa\r\nMandalahayu Yang Berada Di Distrik Mandala (Sekarang Kecamatan Cikatomas).</p><p class=\"MsoNormal\">Seiring Dengan\r\nDiberlakukannya Peraturan Desentraslisasi Dan Otonomi Pemerintah Hindia Belanda\r\nDi Tasikmalaya Pada Tahun 1926, Maka Wilayah Kabupaten Tasikmalaya (Sesudah Berganti\r\nNama) Mengalami Perubahan Setelah Digabungkan Satu Sama Lainnya Hanya Tinggalh\r\n10 Distrik.<br>\r\n</p><p class=\"MsoNormal\">Salah Satunya Adalah\r\nDistrik Cikatomas Yang Berganti Nama Menjadi Kewadanaan Cikatomas Dengan\r\nMembawahi 3 (Tiga) Kecamatan Yaitu ; Kecamatan Cikatomas, Kecamatan Cikalong,\r\nDan Kecamatan Salopa. Kecamatan Salopa Meliputi 9 (Sembilan) Desa, Diantaranya\r\n; Desa Bengkok, Desa Kaputihan, Desa Sekakerta, Desa Talegong, Desa Ciwarak,\r\nDesa Kersagalih, Desa Kawitan, Desa Mandalahayu, Dan Desa Cikasungka. Maka Dari\r\nUraian Diatas Dapat Ditarik Kesimpulan Bahwa Pada Tahun 1978 Desa Mandalahayu\r\nSudah Berdiri, Sedangkan Kecamatan Salopa Diperkirakan Mulai Berdiri Pada Tahun\r\n1926 Masehi.<o:p></o:p></p>');

-- --------------------------------------------------------

--
-- Struktur dari tabel `visi`
--

CREATE TABLE `visi` (
  `id` int(11) NOT NULL,
  `isi` varchar(10000) NOT NULL,
  `foto` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `visi`
--

INSERT INTO `visi` (`id`, `isi`, `foto`) VALUES
(1, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.<div style=\"margin: 0px 28.7969px 0px 14.3906px; padding: 0px; width: 436.797px; float: right; font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;\"=\"\"></div><p></p>', '637f0835c88e0download.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `bpd`
--
ALTER TABLE `bpd`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `datadesa`
--
ALTER TABLE `datadesa`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `destinasiwisata`
--
ALTER TABLE `destinasiwisata`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `gambaranumum`
--
ALTER TABLE `gambaranumum`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `hubungikami`
--
ALTER TABLE `hubungikami`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `informasi`
--
ALTER TABLE `informasi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kelembagaan`
--
ALTER TABLE `kelembagaan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `misi`
--
ALTER TABLE `misi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pelayanan`
--
ALTER TABLE `pelayanan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pemerintahdesa`
--
ALTER TABLE `pemerintahdesa`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pengaturanweb`
--
ALTER TABLE `pengaturanweb`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `potensidesa`
--
ALTER TABLE `potensidesa`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `sejarah`
--
ALTER TABLE `sejarah`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `visi`
--
ALTER TABLE `visi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `berita`
--
ALTER TABLE `berita`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `bpd`
--
ALTER TABLE `bpd`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `datadesa`
--
ALTER TABLE `datadesa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `destinasiwisata`
--
ALTER TABLE `destinasiwisata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `gambaranumum`
--
ALTER TABLE `gambaranumum`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `hubungikami`
--
ALTER TABLE `hubungikami`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `informasi`
--
ALTER TABLE `informasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `kelembagaan`
--
ALTER TABLE `kelembagaan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `misi`
--
ALTER TABLE `misi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `pelayanan`
--
ALTER TABLE `pelayanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `pemerintahdesa`
--
ALTER TABLE `pemerintahdesa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `pengaturanweb`
--
ALTER TABLE `pengaturanweb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `potensidesa`
--
ALTER TABLE `potensidesa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `sejarah`
--
ALTER TABLE `sejarah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `visi`
--
ALTER TABLE `visi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
