<?php

use yii\helpers\Html;
use yii\helpers\Url;
use frontend\models\VGalleryVideo;

$this->title = $avideo->nama_album

?>

<br>
<br>

<!-- ##### About Area Start ##### -->
<section class="about-area">
    <div class="container">

        <div class="row">
            <div class="col-12">
                <h2><?= $avideo->nama_album ?></h2>
            </div>
        </div>

        <div class="post-meta">
            <p class="post-author"><b>Oleh <?= $avideo->nama_instansi ?> - <?= date('d F Y', strtotime($avideo->tanggal_album)) ?>
        </div>

        <div class="row">
            <div class="col-12 col-lg-12">
                <p><?= $avideo->keterangan_album ?></p>
            </div>
        </div>
        <div class="newspaper-post-like d-flex align-items-center justify-content-between">
            <!-- Tags -->
            <div class="newspaper-tags d-flex">
                <span>Tags:</span>
                <ul class="d-flex">
                    <!-- <li><a href="#">finacial,</a></li> -->
                    <li><a href=""><?= $avideo->tag_album ?></a></li>
                </ul>
            </div>

            <!-- Post Like & Post Comment -->
            <div class="d-flex align-items-center post-like--comments">
                <h4 class="post-like"><img src="<?= Url::to(['img/core-img/view.png'])?>" alt=""> <span><?= $avideo->hit_album ?></span></h4>
            </div>
        </div>
    </div>
</section>
<!-- ##### About Area End ##### -->

<!-- ##### Team Area Start ##### -->
<section class="newspaper-team mb-30">
    <div class="container">
        <div class="row">
            <?php
                $id_album = $avideo->id_album;
                $galeri = VGalleryVideo::find()
                        ->where([
                                'instansi_id' => 'G09018',
                                'id_album' => $id_album,
                                'status_gallery' => 'ON',
                            ])
                        ->orderBy('tanggal_gallery DESC')
                        ->all();
            
                if (count($galeri) > 0) { ?>
                <div class="container">
                    <div class="row">
                        <?php foreach($galeri as $galeri) { ?>
                            <div class="col-md-6">
                                <center>
                                    <a href="<?= Url::to(['/albumvideo/viewvideo', 'id'=>$galeri->slug_gallery])?>"><p><?= $galeri->nama_gallery ?></p></a>
                                </center>
                                <?php if($galeri->gambar_gallery != null) { ?>
                                    <div class="vid">
                                        <iframe width="853" height="480" src="https://www.youtube.com/embed/<?= $galeri->gambar_gallery ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    </div><!--./vid -->
                                <?php } else { ?>
                                    <?= Html::img('@web/upload/No_Image_Available.jpg', ['width'=>1000] , ['alt' => 'No Image Available']); ?>
                                <?php } ?>
                            </div><!--.col -->
                        <?php } ?>
                    </div><!--./row -->
                </div><!--./container -->

            <?php } else { ?>
                <div class="post-a-comment-area section-padding-80-0 col-md-6 col-md-offset-3">
                    <h4 style="color: #02031c">Maaf, tidak ada galeri video di dalam album ini.</h4>
                </div>
            <?php } ?>
        </div>
    </div>
</section>
<!-- ##### Team Area End ##### -->