<?php 
use yii\helpers\Url;
use yii\helpers\Html;
use yii\widgets\LinkPager;

$this->title = 'Dinas Pendidikan Kota Pekalongan';
?>

<br>
<br>


<!-- ##### Blog Area Start ##### -->
    <div class="blog-area section-padding-0-80">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8">
                    <div class="blog-posts-area">
                        <?php foreach($daftarpengumuman as $dp) { ?>
                            <!-- Single Featured Post -->
                            <div class="single-blog-post featured-post mb-30">
                                <div class="post-thumb">
                                    <a href="<?= Url::to(['/pengumuman/view', 'id'=>$dp->slug_pengumuman])?>">
                                        <?php if($dp->gambar_pengumuman != null) { ?>
                                            <?= Html::img('@web/upload/pengumuman/'.$dp->gambar_pengumuman.'', ['class' => 'img-news-list'] , ['alt' => ''.$dp->gambar_pengumuman.'']) ?>
                                        <?php } else { ?>
                                            <?= Html::img('@web/upload/No_Image_Available.jpg', ['class' => 'img-news-list'] , ['alt' => 'No Image Available']); ?>
                                        <?php } ?>
                                    </a>
                                </div>
                                <div class="post-data">
                                    <a href="<?= Url::to(['/pengumuman/view', 'id'=>$dp->slug_pengumuman])?>" class="post-title">
                                        <h6><?= $dp->judul_pengumuman ?></h6>
                                    </a>
                                    <div class="post-meta">
                                        <p class="post-author">Oleh <b><?= $dp->nama_user ?> - <?= date('d F Y', strtotime($dp->tanggal_pengumuman)) ?></b></p>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>

                    </div>

                    <nav aria-label="Page navigation example">
                        <ul class="pagination mt-50">
                            <?= LinkPager::widget([
                                'pagination' => $pages,
                                'options' => ['tag' => 'li', 'class' => 'page-item'],
                                //Previous option value
                                'prevPageLabel' => '&laquo;',
                                //Next option value
                                'nextPageLabel' => '&raquo;',
                                //Current Active option value
                                'activePageCssClass' => 'page-item active',
                                //Max count of allowed options
                                'maxButtonCount' => 5,

                                // Css for each options. Links
                                'linkOptions' => ['tag' => 'a', 'class' => 'page-link'],

                                // Customzing CSS class for navigating link
                                'prevPageCssClass' => 'page-link',
                                'nextPageCssClass' => 'page-link',
                                'firstPageCssClass' => 'page-link',
                                'lastPageCssClass' => 'page-link',
                            ]) ?>
                        </ul>
                    </nav>
                </div>

                <div class="col-12 col-lg-4">
                    <div class="blog-sidebar-area">
                        <div class="section-heading">
                            <h6>Pengumuman Populer</h6>
                        </div>
                        <!-- Latest Posts Widget -->
                        <div class="latest-posts-widget mb-50">
                            <?php foreach($populer as $populer) { ?>
                                <div class="single-blog-post small-featured-post d-flex">
                                    <div class="post-thumb">
                                        <a href="#">
                                            <?php if($populer->gambar_pengumuman != null) { ?>
                                                <?= Html::img('@web/upload/pengumuman/'.$populer->gambar_pengumuman.'', ['class' => 'img-content-kota'] , ['alt' => ''.$populer->gambar_pengumuman.'']) ?>
                                            <?php } else { ?>
                                                <?= Html::img('@web/upload/No_Image_Available.jpg', ['class' => 'img-content-kota'] , ['alt' => 'No Image Available']); ?>
                                            <?php } ?>
                                        </a>
                                    </div>
                                    <div class="post-data">
                                        <a href="#" class="post-catagory"><?= $populer->judul_pengumuman ?></a>
                                        <div class="post-meta"> 
                                            <p class="post-date"><span><?= $populer->nama_user ?></span> | <span><?= date('d F Y', strtotime($populer->tanggal_pengumuman)) ?></span></p>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>

                <!-- <div class="col-12 col-lg-4">
                    <div class="blog-sidebar-area">
                
                        Latest Posts Widget
                        <div class="latest-posts-widget mb-50">
                
                            Single Featured Post
                            <div class="single-blog-post small-featured-post d-flex">
                                <div class="post-thumb">
                                    <a href="#"><img src="img/bg-img/19.jpg" alt=""></a>
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
                
                            Single Featured Post
                            <div class="single-blog-post small-featured-post d-flex">
                                <div class="post-thumb">
                                    <a href="#"><img src="img/bg-img/20.jpg" alt=""></a>
                                </div>
                                <div class="post-data">
                                    <a href="#" class="post-catagory">Politics</a>
                                    <div class="post-meta">
                                        <a href="#" class="post-title">
                                            <h6>Sed a elit euismod augue semper congue sit amet ac sapien.</h6>
                                        </a>
                                        <p class="post-date"><span>7:00 AM</span> | <span>April 14</span></p>
                                    </div>
                                </div>
                            </div>
                
                            Single Featured Post
                            <div class="single-blog-post small-featured-post d-flex">
                                <div class="post-thumb">
                                    <a href="#"><img src="img/bg-img/21.jpg" alt=""></a>
                                </div>
                                <div class="post-data">
                                    <a href="#" class="post-catagory">Health</a>
                                    <div class="post-meta">
                                        <a href="#" class="post-title">
                                            <h6>Pellentesque mattis arcu massa, nec fringilla turpis eleifend id.</h6>
                                        </a>
                                        <p class="post-date"><span>7:00 AM</span> | <span>April 14</span></p>
                                    </div>
                                </div>
                            </div>
                
                            Single Featured Post
                            <div class="single-blog-post small-featured-post d-flex">
                                <div class="post-thumb">
                                    <a href="#"><img src="img/bg-img/22.jpg" alt=""></a>
                                </div>
                                <div class="post-data">
                                    <a href="#" class="post-catagory">Finance</a>
                                    <div class="post-meta">
                                        <a href="#" class="post-title">
                                            <h6>Augue semper congue sit amet ac sapien. Fusce consequat.</h6>
                                        </a>
                                        <p class="post-date"><span>7:00 AM</span> | <span>April 14</span></p>
                                    </div>
                                </div>
                            </div>
                
                            Single Featured Post
                            <div class="single-blog-post small-featured-post d-flex">
                                <div class="post-thumb">
                                    <a href="#"><img src="img/bg-img/23.jpg" alt=""></a>
                                </div>
                                <div class="post-data">
                                    <a href="#" class="post-catagory">Travel</a>
                                    <div class="post-meta">
                                        <a href="#" class="post-title">
                                            <h6>Pellentesque mattis arcu massa, nec fringilla turpis eleifend id.</h6>
                                        </a>
                                        <p class="post-date"><span>7:00 AM</span> | <span>April 14</span></p>
                                    </div>
                                </div>
                            </div>
                
                            Single Featured Post
                            <div class="single-blog-post small-featured-post d-flex">
                                <div class="post-thumb">
                                    <a href="#"><img src="img/bg-img/24.jpg" alt=""></a>
                                </div>
                                <div class="post-data">
                                    <a href="#" class="post-catagory">Politics</a>
                                    <div class="post-meta">
                                        <a href="#" class="post-title">
                                            <h6>Augue semper congue sit amet ac sapien. Fusce consequat.</h6>
                                        </a>
                                        <p class="post-date"><span>7:00 AM</span> | <span>April 14</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
    <!-- ##### Blog Area End ##### -->