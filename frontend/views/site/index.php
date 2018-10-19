<?php

use yii\widgets\LinkPager;
use yii\helpers\Url;
use yii\helpers\Html;
use yii\grid\GridView;
use yii\base\Widget;
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
                                <?php foreach($berita_instansi_limit as $r) { ?>
                                    <li><a href="<?= Url::to(['/berita', 'id'=>$r->id_berita])?>"><?= $r->judul_berita ?></a></li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Hero Area End ##### -->

    <!-- carosal -->
   <div class="container" style="margin-bottom: 30px">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <!-- <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol> -->
            <div class="carousel-inner">

                <?php foreach($slideractive as $sa) { ?>
                    <div class="carousel-item active">
                        <?php if($sa->gambar_berita != null) { ?>
                            <?= Html::img('@web/upload/berita/'.$sa->gambar_berita.'', ['class' => 'img-slider'] ,['alt' => ''.$sa->gambar_berita.'']); ?>
                        <?php } else { ?>
                            <?= Html::img('@web/upload/No_Image_Available.jpg', ['class' => 'img-slider'], ['alt' => 'No Image Available']); ?>
                        <?php } ?>
                        <a href="<?= Url::to(['/berita', 'id'=>$sa->id_berita])?>">
                            <div class="carousel-caption d-none d-md-block bg-text">
                                <h4 class="slider-title"><?= $sa->judul_berita ?></h4>
                            </div>
                        </a>
                    </div>
                 <?php } ?>

                 <?php foreach($slideritem as $si) { ?>
                    <div class="carousel-item">
                        <?php if($si->gambar_berita != null) { ?>
                            <?= Html::img('@web/upload/berita/'.$si->gambar_berita.'', ['class' => 'img-slider'] ,['alt' => ''.$si->gambar_berita.'']); ?>
                        <?php } else { ?>
                            <?= Html::img('@web/upload/No_Image_Available.jpg', ['class' => 'img-slider'], ['alt' => 'No Image Available']); ?>
                        <?php } ?>
                        <a href="<?= Url::to(['/berita', 'id'=>$si->id_berita])?>">
                            <div class="carousel-caption d-none d-md-block bg-text">
                                <h4 class="slider-title"><?= $si->judul_berita ?></h4>
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
    <!-- end -->
 

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
                                    <a href="<?= Url::to(['/berita', 'id'=>$row->id_berita])?>">
                                        <?php if($row->gambar_berita != null) { ?>
                                            <?= Html::img('@web/upload/berita/'.$row->gambar_berita.'', ['class' => 'img-content-instansi'] , ['alt' => ''.$row->gambar_berita.'']) ?>
                                        <?php } else { ?>
                                            <?= Html::img('@web/upload/No_Image_Available.jpg', ['class' => 'img-content-instansi'] , ['alt' => 'No Image Available']); ?>
                                        <?php } ?>
                                    </a>
                                </div>
                                <div class="post-data">
                                    <a href="<?= Url::to(['/berita', 'id'=>$row->id_berita])?>" class="post-title">
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

                    </div>


                    <nav aria-label="Page navigation example">
                        <ul class="pagination mt-50">
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">4</a></li>
                            <li class="page-item"><a class="page-link" href="#">5</a></li>
                            <li class="page-item"><a class="page-link" href="#">...</a></li>
                            <li class="page-item"><a class="page-link" href="#">10</a></li>
                        </ul>
                    </nav>
                </div>

                <div class="col-12 col-lg-4">
                    <div class="section-heading">
                        <h6>Berita Kota</h6>
                    </div>
                    <?php foreach($berita_utama_instansi as $berita) { ?>
                        <div class="single-blog-post small-featured-post d-flex">
                            <div class="post-thumb">
                                <a href="#"><img src="img/bg-img/19.jpg" class="img-content-kota" alt=""></a>
                            </div>
                            <div class="post-data">
                                <a href="#" class="post-catagory"><?= $berita->judul_berita ?></a>
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