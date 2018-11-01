<?php

use yii\helpers\Html;
use yii\helpers\Url;
use frontend\models\VGalleryFoto;

$this->title = $afoto->nama_album

?>

<br>
<br>

<!-- ##### About Area Start ##### -->
<section class="about-area">
    <div class="container">

        <div class="row">
            <div class="col-12">
                <h2><?= $afoto->nama_album ?></h2>
            </div>
        </div>

        <div class="post-meta">
            <p class="post-author"><b>Oleh <?= $afoto->nama_instansi ?> - <?= date('d F Y', strtotime($afoto->tanggal_album)) ?>
        </div>

        <div class="row">
            <div class="col-12 col-lg-12">
                <p><?= $afoto->keterangan_album ?></p>
            </div>
        </div>
        <div class="newspaper-post-like d-flex align-items-center justify-content-between">
            <!-- Tags -->
            <div class="newspaper-tags d-flex">
                <span>Tags:</span>
                <ul class="d-flex">
                    <!-- <li><a href="#">finacial,</a></li> -->
                    <li><a href=""><?= $afoto->tag_album ?></a></li>
                </ul>
            </div>

            <!-- Post Like & Post Comment -->
            <div class="d-flex align-items-center post-like--comments">
                <h4 class="post-like"><img src="<?= Url::to(['img/core-img/view.png'])?>" alt=""> <span><?= $afoto->hit_album ?></span></h4>
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
                $id_album = $afoto->id_album;
                $galeri = VGalleryFoto::find()
                        ->where([
                                'instansi_id' => 'G09018',
                                'id_album' => $id_album
                            ])
                        ->orderBy('tanggal_gallery DESC')
                        ->all();
            
                if (count($galeri) > 0) { ?>
                    <!-- Single Team Member -->
                    <div class="col-12 col-sm-6 col-lg-4">
                        <?php foreach($galeri as $galeri) { ?>
                            <div class="single-team-member single-video-post">

                                 

                                <a href="<?= Url::to(['/albumfoto/viewfoto', 'id'=>$galeri->slug_gallery])?>">
                                    <?php if($galeri->gambar_gallery != null) { ?>
                                        <?= Html::img('@web/upload/gallery/foto/'.$galeri->gambar_gallery.'', ['class' => 'img-album img-responsive'], ['alt' => ''.$galeri->gambar_gallery.'']) ?>
                                    <?php } else { ?>
                                        <?= Html::img('@web/upload/No_Image_Available.jpg', ['class' => 'img-album img-responsive'] ,['alt' => 'No Image Available']); ?>
                                    <?php } ?>
                                </a>
                                <div class="team-info">
                                    <a href="<?= Url::to(['/albumfoto/viewfoto', 'id'=>$galeri->slug_gallery])?>"><h5><?= $galeri->nama_gallery ?></h5></a>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                <?php } else { ?>
                    <div class="post-a-comment-area section-padding-80-0 col-md-6 col-md-offset-3">
                        <h4 style="color: #02031c">Maaf, tidak ada galeri foto di dalam album ini.</h4>
                    </div>
                <?php } ?>
                
        </div>
    </div>
</section>
<!-- ##### Team Area End ##### -->
