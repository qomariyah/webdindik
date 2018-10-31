<?php 
use yii\helpers\Url;
?>


    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area">

        <!-- Main Footer Area -->
        <div class="main-footer-area">
            <div class="container">
                <div class="row">
                    <?php foreach(frontend\controllers\SiteController::actionWebsite() as $row) { ?>
                        <!-- Footer Widget Area -->
                        <div class="col-12 col-sm-6 col-lg-4">
                            <div class="footer-widget-area mt-80">
                                <!-- Footer Logo -->
                                <div class="footer-logo">
                                    <a href="index.html"><img src="<?= Url::to(['img/pkl.png'])?>" alt=""></a>
                                </div>
                                <!-- List -->
                                <ul class="list">
                                    <li><a href="<?= $row->alamat_website ?>"><?= $row->nama_website ?></a></li>
                                    <li><a href="https://goo.gl/maps/yZANiTiQP8L2" target="_blank"><?= $row->kantor_website ?></a></li>
                                    <li><p>Telp/Fax : <?= $row->kontak_website ?></p></li>
                                    <li><p><?= $row->email_website ?></p></li>
                                </ul>

                                <ul class="social-network social-circle">
                                    <li><a href="<?= $row->facebook_website ?>" target="_blank" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="<?= $row->twitter_website ?>" target="_blank" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="<?= $row->instagram_website ?>" target="_blank" class="icoGoogle" title="Instagram"><i class="fa fa-instagram"></i></a></li>
                                    <li><a href="<?= $row->youtube_website ?>" target="_blank" class="icoLinkedin" title="Youtube"><i class="fa fa-youtube"></i></a></li>
                                </ul>
                                
                            </div>
                        </div>
                    <?php } ?>

                    <!-- Footer Widget Area -->
                    <div class="col-12 col-sm-6 col-lg-2">
                        <div class="footer-widget-area mt-80">
                            <!-- Title -->
                            <h4 class="widget-title">Link Terkait</h4>
                            <!-- List -->
                            <ul class="list">
                                <?php foreach(frontend\controllers\SiteController::actionLinkTerkait() as $link) { ?>
                                    <li><a href="<?= $link->url_link ?>" target="_blank"><?= $link->text_link ?></a></li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>

                    <!-- Footer Widget Area -->
                    <div class="col-12 col-sm-4 col-lg-6">
                        <div class="footer-widget-area mt-80">
                            <!-- Title -->
                            <h4 class="widget-title">Berita Populer</h4>
                            <!-- List -->
                            <ul class="list">
                                <?php foreach(frontend\controllers\SiteController::actionBeritapopuler() as $bp) { ?>
                                    <li><a href="<?= Url::to(['/site/view', 'id'=>$bp->slug_berita])?>"><?= $bp->judul_berita ?></a></li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <br>

        <!-- Bottom Footer Area -->
        <div class="bottom-footer-area">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12">
                        <!-- Copywrite -->
                        <p>
                            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ##### Footer Area Start ##### -->
