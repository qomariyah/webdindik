<?php

use yii\helpers\Html;
use yii\helpers\Url;

$this->title = $galeri->nama_gallery

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
                            <center>
                                <section class="demo-section demo-section--light" id="demo">
                                    <div class="container">
                                        <?php if($galeri->gambar_gallery != null) { ?>
                                            <div class="vid">
                                                <iframe width="853" height="480" src="https://www.youtube.com/embed/<?= $galeri->gambar_gallery ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                            </div><!--./vid -->
                                        <?php } else { ?>
                                            <?= Html::img('@web/upload/No_Image_Available.jpg', ['alt' => 'No Image Available']); ?>
                                        <?php } ?>
                                    </div>
                                </section>    
                            </center>
                        </div>
                        <div class="post-data">
                            <a href="#" class="post-title">
                                <h6><?= $galeri->nama_gallery ?></h6>
                            </a>
                            <div class="post-meta">
                                <p class="post-author"><b>Oleh <?= $galeri->nama_user ?> - <?= date('d F Y', strtotime($galeri->tanggal_gallery)) ?></b></p>
                                <h4><?= $galeri->keterangan_gallery ?></h4>
                                <div class="newspaper-post-like d-flex align-items-center justify-content-between">
                                    <!-- Tags -->
                                    <div class="newspaper-tags d-flex">
                                        <span>Tags:</span>
                                        <ul class="d-flex">
                                            <!-- <li><a href="#">finacial,</a></li> -->
                                            <li><a href=""><?= $galeri->tag_gallery ?></a></li>
                                        </ul>
                                    </div>

                                    <!-- Post Like & Post Comment -->
                                    <div class="d-flex align-items-center post-like--comments">
                                        <h4 class="post-like"><img src="<?= Url::to(['img/core-img/view.png'])?>" alt=""> <span><?= $galeri->hit_gallery ?></span></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                </div>
            </div>
            <hr>
        </div>
    </div>
</div>
<!-- ##### Blog Area End ##### -->