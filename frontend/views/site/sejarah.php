<?php

use yii\helpers\Html;
use yii\helpers\Url;

$this->title = $sejarah->judul_halaman 

?>

<br>
<br>

<!-- ##### Blog Area Start ##### -->
<div class="blog-area section-padding-0-80">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-12">
                <div class="blog-posts-area">

                    <!-- Single Featured Post -->
                    <div class="single-blog-post featured-post single-post">
                        <div class="post-thumb">
                            <a href="#">
                                <?php if($sejarah->gambar_halaman != null) { ?>
                                    <?= Html::img('@web/upload/halaman/'.$sejarah->gambar_halaman.'', ['alt' => ''.$sejarah->gambar_halaman.'']); ?>
                                <?php } else { ?>
                                    <?= Html::img('@web/upload/No_Image_Available.jpg'); ?>
                                <?php } ?>
                            </a>

                        </div>
                        <div class="post-data">
                            <a href="#" class="post-title">
                                <h6><?= $sejarah->judul_halaman ?></h6>
                            </a>
                            <div class="post-meta">
                                <p class="post-author"><b>Oleh <?= $sejarah->nama_user ?> </b></p>
                                    <?= $sejarah->isi_halaman ?>
                                <div class="newspaper-post-like d-flex align-items-center justify-content-between">
                                    <!-- Tags -->
                                    <div class="newspaper-tags d-flex">
                                    </div>

                                    <!-- Post Like & Post Comment -->
                                    <div class="d-flex align-items-center post-like--comments">
                                        <h4 class="post-like"><img src="<?= Url::to(['img/core-img/view.png'])?>" alt=""> <span><?= $sejarah->hit_halaman ?></span></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- About Author -->
                    <div class="blog-post-author d-flex">
                        <div class="author-thumbnail">
                            <img src="<?= Url::to(['img/bg-img/32.jpg'])?>" alt="">
                        </div>
                        <div class="author-info">
                            <a href="#" class="author-name">James Smith, <span>The Author</span></a>
                            <p>Donec turpis erat, scelerisque id euismod sit amet, fermentum vel dolor. Nulla facilisi. Sed pellen tesque lectus et accu msan aliquam. Fusce lobortis cursus quam, id mattis sapien.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ##### Blog Area End ##### -->