<?php
include_once("inc/inc_koneksi.php");
include_once("inc/inc_fungsi.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Platform Historiaberita.</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <nav>
        <div class="wrapper">
            <div class="logo"><a href=''>Historiaberita</a></div>
            <div class="menu">
                <ul>
                    <li><a href="#home">Home</a></li>
                    <li><a href="#aboutus">About Us</a></li>
                    <li><a href="#article">Article</a></li>
                    <li><a href="#gallery">Gallery</a></li>
                    <li><a href="#contact">Contact</a></li>
                    <li><a href="" class="tbl-hitam">Sign Up</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="wrapper">
        <!-- untuk home -->
        <section id="home">
            <img src="<?php echo ambil_gambar('20') ?>" />
            <div class="kolom">
                <p class="deskripsi"><?php echo ambil_kutipan('20') ?></p>
                <h2><?php echo ambil_judul('20') ?></h2>
                <?php echo ambil_isi('20') ?>
                <p><a href="<?php echo buat_link_halaman('20') ?>" class="tbl-hitam">Pelajari Lebih Lanjut</a></p>
            </div>
        </section>

        <!-- untuk about us -->
        <section id="aboutus">
            <div class="kolom">
                <p class="deskripsi"><?php echo ambil_kutipan('21') ?></p>
                <h2><?php echo ambil_judul('21') ?></h2>
                <?php echo ambil_isi('21') ?>
                <p><a href="<?php echo buat_link_halaman('21') ?>" class="tbl-hitam">Pelajari Lebih Lanjut</a></p>
            </div>
            <img src="<?php echo ambil_gambar('21') ?>" />
        </section>

        <!-- untuk article -->
        <section id="article">
      <div class="tengah">
        <div class="kolom">
          <p class="deskripsi">Our Top Article</p>
          <h2>Article</h2>
          <p>Disini kami hadirkan beberapa artikel tentang prestasi dan event terbaru mahasiswa PENS !</article>
          </p>
        </div>

        <div class="article-list">
          <div class="kartu-article">
            <img src="https://www.pens.ac.id/wp-content/uploads/2021/09/triweb-400x250.png"/>
            <p></p>
            <p><a href="" class="tbl-hitam">Kunjungi Artikel </a></p>
          </div>
          <div class="kartu-article">
            <img src="https://www.pens.ac.id/wp-content/uploads/2021/09/Watermark-web-Dok-ENT-400x250.png"/>
            <p></p>
            <p><a href="" class="tbl-hitam">Kunjungi Artikel</a></p>
          </div>
          <div class="kartu-article">
            <img src="https://www.pens.ac.id/wp-content/uploads/2021/08/IMG_2324-1080x675.jpg"/>
            <p></p>
            <p><a href="" class="tbl-hitam">Kunjungi Artikel</a></p>
          </div>
          <div class="kartu-article">
            <img src="https://www.pens.ac.id/wp-content/uploads/2021/08/sae-400x250.png"/>
            <p></p>
            <p><a href="" class="tbl-hitam">Kunjungi Artikel</a></p>
          </div>
        </div>
      </div>
    </section>
        <!-- untuk gallery -->
        <section id="gallery">
            <div class="tengah">
                <div class="kolom">
                    <p class="deskripsi">Our Top Gallery</p>
                    <h2>Gallery</h2>
                    <p> Kami hadirkan gallery terbaru terkait event dan berita terbaru PENS.</p>
                    <p><a href="" class="tbl-hitam">Kunjungi Gallery </a></p>
                </div>

                <div class="gallery-list">
                    <div class="kartu-gallery">
                        <img src="https://www.pens.ac.id/wp-content/uploads/2021/03/Team-Sierra-Web-400x250.jpg" />
                    </div>
                    <div class="kartu-gallery">
                        <img src="https://www.pens.ac.id/wp-content/uploads/2021/04/web-trans-400x250.jpg" />
                    </div>
                    <div class="kartu-gallery">
                        <img src="https://www.pens.ac.id/wp-content/uploads/2021/04/webbb-400x250.jpg" />
                    </div>
                    <div class="kartu-gallery">
                        <img src="https://www.pens.ac.id/wp-content/uploads/2021/05/Kakateam-web-400x250.jpg" />
                    </div>
                </div>
                <div class="kartu-gallery">
                    <img src="https://www.pens.ac.id/wp-content/uploads/2020/12/p3tv-web-400x250.jpg" />
                </div>
                <div class="kartu-gallery">
                    <img src="https://www.pens.ac.id/wp-content/uploads/2020/12/vfweb-400x250.jpg" />
                </div>
                <div class="kartu-gallery">
                    <img src="https://www.pens.ac.id/wp-content/uploads/2021/06/foto-web-new-400x250.jpg" />
                </div>
                <div class="kartu-gallery">
                    <img src="https://www.pens.ac.id/wp-content/uploads/2021/05/prestasiweb1-400x250.png" />
                </div>

            </div>
    </div>
    </section>
    </div>

    <div id="contact">
        <div class="wrapper">
            <div class="footer">
                <div class="footer-section">
                    <h3>Historiaberita.</h3>
                    <p>Jujur, Orisisnil, Semangat, dan santun!</p>
                </div>
                <div class="footer-section">
                    <h3>About Us</h3>
                    <p>Platform berita terbaru Politeknik terbaik PENS.</p>
                </div>
                <div class="footer-section">
                    <h3>Contact</h3>
                    <p>WA 08813350131</p>
                </div>
                <div class="footer-section">
                    <h3>Social</h3>
                    <p><b>Instagram admin : </b>@nbhawaa_</p>
                    <p><b>Instagram PENS : </b>@penseepis</p>
                    <p><b>WEB PENS : </b>https://www.pens.ac.id</p>
                    <p><b>Media Ent PENS : </b>https://www.ent.pens.ac.id</p>
                </div>
            </div>
        </div>
    </div>

    <div id="copyright">
        <div class="wrapper">
            &copy; 2021. <b>Hawa Project.</b> All Rights Reserved.
        </div>
    </div>

</body>

</html>