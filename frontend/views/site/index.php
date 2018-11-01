<?php
use yii\widgets\LinkPager;
use yii\helpers\Url;
use yii\helpers\Html;
use yii\grid\GridView;
/* @var $this yii\web\View */
$this->title = 'Dinas Pendidikan Kota Pekalongan';
?>

<!-- ##### BERITA TERBARU/BREAKING NEWS Start ##### -->
    <div class="hero-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12">
                    <!-- Breaking News Widget -->
                    <div class="breaking-news-area d-flex align-items-center">
                        <div class="news-title">
                            <p>Berita Terbaru</p>
                        </div>
                        <div id="breakingNewsTicker" class="ticker">
                            <ul>
                                <?php foreach($berita_instansi_limit as $row) { ?>
                                    <li><a href="<?= Url::to(['/site/view', 'id'=>$row->slug_berita])?>"><?= $row->judul_berita ?></a></li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
    </div>
    <!-- ##### BERITA TERBARU/BREAKING NEWS End ##### -->

    <!-- ##### CAROUSEL AREA START ##### -->
   <div class="container" style="margin-bottom: 30px">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <?php foreach($slideractive as $row) { ?>
                    <div class="carousel-item active">
                        <?php if($row->gambar_berita != null) { ?>
                            <?= Html::img('@web/upload/berita/'.$row->gambar_berita.'', ['class' => 'img-slider'] ,['alt' => ''.$row->gambar_berita.'']); ?>
                        <?php } else { ?>
                            <?= Html::img('@web/upload/No_Image_Available.jpg', ['class' => 'img-slider'], ['alt' => 'No Image Available']); ?>
                        <?php } ?>
                        <a href="<?= Url::to(['/site/view', 'id'=>$row->slug_berita])?>">
                            <div class="carousel-caption d-none d-md-block bg-text">
                                <h4 class="slider-title"><?= $row->judul_berita ?></h4>
                            </div>
                        </a>
                    </div>
                 <?php } ?>
                 <?php foreach($slideritem as $row) { ?>
                    <div class="carousel-item">
                        <?php if($row->gambar_berita != null) { ?>
                            <?= Html::img('@web/upload/berita/'.$row->gambar_berita.'', ['class' => 'img-slider'] ,['alt' => ''.$row->gambar_berita.'']); ?>
                        <?php } else { ?>
                            <?= Html::img('@web/upload/No_Image_Available.jpg', ['class' => 'img-slider'], ['alt' => 'No Image Available']); ?>
                        <?php } ?>
                        <a href="<?= Url::to(['/site/view', 'id'=>$row->slug_berita])?>">
                            <div class="carousel-caption d-none d-md-block bg-text">
                                <h4 class="slider-title"><?= $row->judul_berita ?></h4>
                            </div>
                        </a>
                    </div>
                 <?php } ?>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <!-- ##### CAROUSEL AREA END #####-->
 

    <!-- ##### BERITA INSTANSI AREA START ##### -->
    <div class="popular-news-area section-padding-80-50">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8">
                    <div class="section-heading">
                        <h6>Berita Utama</h6>
                    </div>

                    <div class="row">
                        <!-- Single Post -->
                        <?php foreach($berita_instansi as $row) { ?>
                        <div class="col-12 col-md-6">
                            <div class="single-blog-post style-3">
                                <div class="post-thumb">
                                    <a href="<?= Url::to(['/site/view', 'id'=>$row->slug_berita])?>">
                                        <?php if($row->gambar_berita != null) { ?>
                                            <?= Html::img('@web/upload/berita/'.$row->gambar_berita.'', ['class' => 'img-content-instansi'] , ['alt' => ''.$row->gambar_berita.'']) ?>
                                        <?php } else { ?>
                                            <?= Html::img('@web/upload/No_Image_Available.jpg', ['class' => 'img-content-instansi'] , ['alt' => 'No Image Available']); ?>
                                        <?php } ?>
                                    </a>
                                </div>
                                <div class="post-data">
                                    <a href="<?= Url::to(['/site/view', 'id'=>$row->slug_berita])?>" class="post-title">
                                        <h6><?= $row->judul_berita ?></h6>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                        <!-- End of Single Post -->
                    </div>

                    <div class="pager d-flex align-items-center justify-content-between">
                        <div class="next">
                            <a href="<?= Url::to(['/berita-utama'])?>" class="active">Lihat Semua <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>


                <div class="col-12 col-lg-4">
                    <div class="section-heading">
                        <h6>Berita Kota</h6>
                    </div>
                    <?php foreach($berita_instansi as $row) { ?>
                        <div class="single-blog-post small-featured-post d-flex">
                            <div class="post-thumb">
                                <a href="#">
                                    <?php if($row->gambar_berita != null) { ?>
                                        <?= Html::img('@web/upload/berita/'.$row->gambar_berita.'', ['class' => 'img-content-kota'] , ['alt' => ''.$row->gambar_berita.'']) ?>
                                    <?php } else { ?>
                                        <?= Html::img('@web/upload/No_Image_Available.jpg', ['class' => 'img-content-kota'] , ['alt' => 'No Image Available']); ?>
                                    <?php } ?>
                                </a>
                            </div>
                            <div class="post-data">
                                <a href="#" class="post-catagory"><?= $row->judul_berita ?></a>
                                <div class="post-meta"> 
                                    <p class="post-date"><span><?= $row->nama_user ?></span> | <span><?= date('d F Y', strtotime($row->tanggal_berita)) ?></span></p>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
<!-- ##### BERITA INSTANSI AREA END ##### -->

<!-- ##### ALBUM FOTO AREA START ##### -->
<div class="video-post-area bg-img bg-overlay" style="background-image: url(img/bg-img/bg1.jpg);">
    <div class="container">
        <div class="row justify-content-center">
            <?php foreach ($albumfoto as $albumfoto) { ?>
                <!-- Single Video Post -->
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="single-video-post">
                        <?php if($albumfoto->gambar_album != null) { ?>
                            <?= Html::img('@web/upload/album/foto/'.$albumfoto->gambar_album.'', ['alt' => ''.$albumfoto->gambar_album.'']); ?>
                        <?php } else { ?>
                            <?= Html::img('@web/upload/No_Image_Available.jpg', ['alt' => 'No Image Available']); ?>
                        <?php } ?>
                        <!-- Video Button -->
                        <div class="videobtn">
                            <a href="<?= Url::to(['/albumfoto/view', 'id'=>$albumfoto->slug_album])?>"><?= $albumfoto->nama_album ?> <br><hr> <?= date('d F Y', strtotime($albumfoto->tanggal_album)) ?></a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
        <div class="pull-right">
            <a href="<?= Url::to(['/albumfoto/index'])?>" class="btn-next">Lihat Semua <i class="fa fa-angle-right"></i></a>
        </div>        
    </div>
    <br>
    <br>
    <div class="container">
        <div class="row justify-content-center">
            <?php foreach($albumvideo as $albumvideo) { ?>
                <!-- Single Video Post -->
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="single-video-post">
                        <?php if($albumvideo->gambar_album != null) { ?>
                            <?= Html::img('@web/upload/album/video/'.$albumvideo->gambar_album.'', ['alt' => ''.$albumvideo->gambar_album.'']); ?>
                        <?php } else { ?>
                            <?= Html::img('@web/upload/No_Image_Available.jpg', ['alt' => 'No Image Available']); ?>
                        <?php } ?>
                        <!-- Video Button -->
                        <div class="videobtn">
                            <a href="<?= Url::to(['/albumvideo/view', 'id'=>$albumvideo->slug_album])?>"><?= $albumvideo->nama_album ?> <br><hr> <?= date('d F Y', strtotime($albumvideo->tanggal_album)) ?></a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
        <div class="pull-right">
            <a href="<?= Url::to(['/albumvideo/index'])?>" class="btn-next">Lihat Semua <i class="fa fa-angle-right"></i></a>
        </div>
    </div>
</div>
<!-- ##### ALBUM FOTO AREA END ##### -->

<!-- ##### PENGUMUMAN Area Start ##### -->
<section class="newspaper-team mb-30">
    <br>
    <br>
    <br>
    <div class="container">
        <div class="section-heading">
            <h6>Pengumuman</h6>
        </div>
        <div class="row">
            <?php foreach($pengumuman as $pengumuman) { ?>
                <div class="col-12 col-sm-12 col-lg-4">
                    <div class="single-team-member">
                        <?php if($pengumuman->gambar_pengumuman != null) { ?>
                            <?= Html::img('@web/upload/pengumuman/'.$pengumuman->gambar_pengumuman.'', ['class' => 'img-announce'] , ['alt' => ''.$pengumuman->gambar_pengumuman.'']); ?>
                        <?php } else { ?>
                            <?= Html::img('@web/upload/No_Image_Available.jpg', ['alt' => 'No Image Available']); ?>
                        <?php } ?>
                        <div class="team-info">
                            <h5><a href="<?= Url::to(['/pengumuman/view', 'id'=>$pengumuman->slug_pengumuman])?>"><?= $pengumuman->judul_pengumuman ?></a></h5>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
        
        <?php if (count($pengumuman) >= 3) { ?>
            <div class="pull-right">
                <a href="<?= Url::to(['/pengumuman/index'])?>" class="btn-next-dark">Lihat Semua <i class="fa fa-angle-right"></i></a>
            </div>
        <?php } ?>
        
    </div>
</section>
<!-- ##### PENGUMUMAN Area End ##### -->

<!-- ##### TWITTER WIDGET AREA START ##### -->
<div class="editors-pick-post-area section-padding-80-50">
    <div class="container">
        <div class="row">
            <!-- Editors Pick -->
            <div class="col-12 col-md-12 col-lg-12">
                <div class="row">
                    <!-- Single Team Member -->
                    <div class="col-12 col-sm-4 col-lg-4">
                        <div class="single-team-member">
                            <a class="twitter-timeline" data-lang="id" data-height="500" href="https://twitter.com/pkl_diskominfo?ref_src=twsrc%5Etfw">Tweets by pkl_diskominfo</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script> 
                        </div>
                    </div>
                    <!-- Single Team Member -->
                    <div class="col-12 col-sm-4 col-lg-4">
                        <div class="single-team-member">
                            <a class="twitter-timeline" data-lang="id" data-height="500" data-theme="light" href="https://twitter.com/pemkotpkl?ref_src=twsrc%5Etfw">Tweets by pemkotpkl</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script> 
                        </div>
                    </div>
                    <!-- Single Team Member -->
                    <div class="col-12 col-sm-4 col-lg-4">
                        <div class="single-team-member">
                            <a class="twitter-timeline" data-lang="id" data-height="500" href="https://twitter.com/HumasPemkotPkl?ref_src=twsrc%5Etfw">Tweets by HumasPemkotPkl</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ##### TWITTER WIDGET AREA END ##### -->

