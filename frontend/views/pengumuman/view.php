<?php

use yii\helpers\Html;
use yii\helpers\Url;

$this->title = $pengumuman->judul_pengumuman

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
                                <a href="#">
                                    <?php if($pengumuman->gambar_pengumuman != null) { ?>
                                        <?= Html::img('@web/upload/pengumuman/'.$pengumuman->gambar_pengumuman.'', ['alt' => ''.$pengumuman->gambar_pengumuman.'']); ?>
                                    <?php } else { ?>
                                        <?= Html::img('@web/upload/No_Image_Available.jpg'); ?>
                                    <?php } ?>
                                </a>
                            </center>
                        </div>
                        <div class="post-data">
                            <a href="#" class="post-title">
                                <h6><?= $pengumuman->judul_pengumuman ?></h6>
                            </a>
                            <div class="post-meta">
                                <p class="post-author"><b>Oleh <?= $pengumuman->nama_user ?> - <?= date('d F Y', strtotime($pengumuman->tanggal_pengumuman)) ?></b></p>
                                    <?= $pengumuman->isi_pengumuman ?>
                                <div class="newspaper-post-like d-flex align-items-center justify-content-between">
                                    <!-- Tags -->
                                    <div class="newspaper-tags d-flex">
                                        <span>Tags:</span>
                                        <ul class="d-flex">
                                            <!-- <li><a href="#">finacial,</a></li> -->
                                            <li><a href=""><?= $pengumuman->jenis_pengumuman ?></a></li>
                                        </ul>
                                    </div>

                                    <!-- Post Like & Post Comment -->
                                    <div class="d-flex align-items-center post-like--comments">
                                        <h4 class="post-like"><img src="<?= Url::to(['img/core-img/view.png'])?>" alt=""> <span><?= $pengumuman->hit_pengumuman ?></span></h4>
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