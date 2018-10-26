<?php

use yii\helpers\Html;
use yii\helpers\Url;

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
            <?php for ($i=1; $i<7; $i++) { ?>
                <!-- Single Team Member -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-team-member">
                        <img src="<?= Url::to(['img/bg-img/bg1.jpg'])?>" alt="" class="img-album">
                        <div class="team-info">
                            <h5>James Williams</h5>
                            <h6>Senior Editor</h6>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>
<!-- ##### Team Area End ##### -->