<?php
use yii\widgets\LinkPager;
use yii\helpers\Url;
use yii\helpers\Html;
use yii\grid\GridView;
/* @var $this yii\web\View */
$this->title = 'Dinas Pendidikan Kota Pekalongan';
?>

<!-- ##### Hero Area Start ##### -->
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
    <!-- ##### Hero Area End ##### -->

    <!-- Carousel -->
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
    <!-- End of Carousel-->
 

    <!-- ##### Popular News Area Start ##### -->
    <div class="popular-news-area section-padding-80-50">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8">
                    <div class="section-heading">
                        <h6>Berita Instansi</h6>
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
                                    <!-- <div class="post-meta d-flex align-items-center">
                                        <a href="#" class="post-like"><img src="img/core-img/like.png" alt=""> <span>392</span></a>
                                        <a href="#" class="post-comment"><img src="img/core-img/chat.png" alt=""> <span>10</span></a>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                        <!-- End of Single Post -->
                    </div>

                    <div class="pager d-flex align-items-center justify-content-between">
                        <div class="next">
                            <a href="<?= Url::to(['/berita-instansi'])?>">Lihat Semua <i class="fa fa-angle-right"></i></a>
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
                                <a href="#"><img src="img/bg-img/19.jpg" class="img-content-kota" alt=""></a>
                            </div>
                            <div class="post-data">
                                <a href="#" class="post-catagory"><?= $row->judul_berita ?></a>
                                <div class="post-meta">
                                    <p class="post-date">Pellentesque mattis arcu massa, nec fringilla turpis eleifend id.</p><br>  
                                    <p class="post-date"><span>7:00 AM</span> | <span>April 14</span></p>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
<!-- ##### Popular News Area End ##### -->