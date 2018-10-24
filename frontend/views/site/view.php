<?php

use yii\helpers\Html;
use yii\helpers\Url;

$this->title = $berita->judul_berita 

?>

<br>
<br>

<!-- ##### Blog Area Start ##### -->
<div class="blog-area section-padding-0-80">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-8">
                <div class="blog-posts-area">

                    <!-- Single Featured Post -->
                    <div class="single-blog-post featured-post single-post">
                        <div class="post-thumb">
                            <a href="#">
                                <?php if($berita->gambar_berita != null) { ?>
                                    <?= Html::img('@web/upload/berita/'.$berita->gambar_berita.'', ['alt' => ''.$berita->gambar_berita.'']); ?>
                                <?php } else { ?>
                                    <?= Html::img('@web/upload/No_Image_Available.jpg'); ?>
                                <?php } ?>
                            </a>

                        </div>
                        <div class="post-data">
                            <a href="#" class="post-title">
                                <h6><?= $berita->judul_berita ?></h6>
                            </a>
                            <div class="post-meta">
                                <p class="post-author"><b>Oleh <?= $berita->nama_user ?> - <?= date('d F Y', strtotime($berita->tanggal_berita)) ?></b></p>
                                    <?= $berita->isi_berita ?>
                                <div class="newspaper-post-like d-flex align-items-center justify-content-between">
                                    <!-- Tags -->
                                    <div class="newspaper-tags d-flex">
                                        <span>Tags:</span>
                                        <ul class="d-flex">
                                            <!-- <li><a href="#">finacial,</a></li> -->
                                            <li><a href=""><?= $berita->tag_berita ?></a></li>
                                        </ul>
                                    </div>

                                    <!-- Post Like & Post Comment -->
                                    <div class="d-flex align-items-center post-like--comments">
                                        <h4 class="post-like"><img src="<?= Url::to(['img/core-img/view.png'])?>" alt=""> <span><?= $berita->hit_berita ?></span></h4>
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

            <div class="col-12 col-lg-4">
                <div class="blog-sidebar-area">

                    <!-- Latest Posts Widget -->
                    <div class="latest-posts-widget mb-50">
                        <?php for ($i = 0; $i < 10; $i++) { ?>
                            <!-- Single Featured Post -->
                            <div class="single-blog-post small-featured-post d-flex">
                                <div class="post-thumb">
                                    <a href="#"><img src="<?= Url::to(['img/bg-img/19.jpg'])?>" alt=""></a>
                                </div>
                                <div class="post-data">
                                    <a href="#" class="post-catagory">Finance</a>
                                    <div class="post-meta">
                                        <a href="#" class="post-title">
                                            <h6>Pellentesque mattis arcu massa, nec fringilla turpis eleifend id.</h6>
                                        </a>
                                        <p class="post-date"><span>7:00 AM</span> | <span>April 14</span></p>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ##### Blog Area End ##### -->