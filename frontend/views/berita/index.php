<?php

use yii\helpers\Html;

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
                                    <?= Html::img('@web/upload/No_Image_Available.jpg', ['width' => '800', 'height' => '100',]); ?>
                                <?php } ?>
                            </a>

                        </div>
                        <div class="post-data">
                            <a href="#" class="post-title">
                                <h6><?= $berita->judul_berita ?></h6>
                            </a>
                            <div class="post-meta">
                                <p class="post-author">Oleh <?= $berita->nama_user ?> - <?= date('d F Y', strtotime($berita->tanggal_berita)) ?></p>
                                <p>
                                    <?= $berita->isi_berita ?>
                                </p>
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
                                        <h4 class="post-like"><img src="img/core-img/view.png" alt=""> <span><?= $berita->hit_berita ?></span></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- About Author -->
                    <div class="blog-post-author d-flex">
                        <div class="author-thumbnail">
                            <img src="img/bg-img/32.jpg" alt="">
                        </div>
                        <div class="author-info">
                            <a href="#" class="author-name">James Smith, <span>The Author</span></a>
                            <p>Donec turpis erat, scelerisque id euismod sit amet, fermentum vel dolor. Nulla facilisi. Sed pellen tesque lectus et accu msan aliquam. Fusce lobortis cursus quam, id mattis sapien.</p>
                        </div>
                    </div>

                    <div class="pager d-flex align-items-center justify-content-between">
                    </div>

                    <div class="section-heading">
                        <h6>Related</h6>
                    </div>

                    <div class="row">
                        <!-- Single Post -->
                        <div class="col-12 col-md-6">
                            <div class="single-blog-post style-3 mb-80">
                                <div class="post-thumb">
                                    <a href="#"><img src="img/bg-img/12.jpg" alt=""></a>
                                </div>
                                <div class="post-data">
                                    <a href="#" class="post-catagory">Finance</a>
                                    <a href="#" class="post-title">
                                        <h6>Dolor sit amet, consectetur adipiscing elit. Nam eu metus sit amet odio sodales placer. Sed varius leo ac...</h6>
                                    </a>
                                    <div class="post-meta d-flex align-items-center">
                                        <a href="#" class="post-like"><img src="img/core-img/like.png" alt=""> <span>392</span></a>
                                        <a href="#" class="post-comment"><img src="img/core-img/chat.png" alt=""> <span>10</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Single Post -->
                        <div class="col-12 col-md-6">
                            <div class="single-blog-post style-3 mb-80">
                                <div class="post-thumb">
                                    <a href="#"><img src="img/bg-img/13.jpg" alt=""></a>
                                </div>
                                <div class="post-data">
                                    <a href="#" class="post-catagory">Finance</a>
                                    <a href="#" class="post-title">
                                        <h6>Dolor sit amet, consectetur adipiscing elit. Nam eu metus sit amet odio sodales placer. Sed varius leo ac...</h6>
                                    </a>
                                    <div class="post-meta d-flex align-items-center">
                                        <a href="#" class="post-like"><img src="img/core-img/like.png" alt=""> <span>392</span></a>
                                        <a href="#" class="post-comment"><img src="img/core-img/chat.png" alt=""> <span>10</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Comment Area Start -->
                    <div class="comment_area clearfix">
                        <h5 class="title">3 Comments</h5>

                        <ol>
                            <!-- Single Comment Area -->
                            <li class="single_comment_area">
                                <!-- Comment Content -->
                                <div class="comment-content d-flex">
                                    <!-- Comment Author -->
                                    <div class="comment-author">
                                        <img src="img/bg-img/30.jpg" alt="author">
                                    </div>
                                    <!-- Comment Meta -->
                                    <div class="comment-meta">
                                        <a href="#" class="post-author">Christian Williams</a>
                                        <a href="#" class="post-date">April 15, 2018</a>
                                        <p>Donec turpis erat, scelerisque id euismod sit amet, fermentum vel dolor. Nulla facilisi. Sed pellen tesque lectus et accu msan aliquam. Fusce lobortis cursus quam, id mattis sapien.</p>
                                    </div>
                                </div>
                            </li>

                            <!-- Single Comment Area -->
                            <li class="single_comment_area">
                                <!-- Comment Content -->
                                <div class="comment-content d-flex">
                                    <!-- Comment Author -->
                                    <div class="comment-author">
                                        <img src="img/bg-img/32.jpg" alt="author">
                                    </div>
                                    <!-- Comment Meta -->
                                    <div class="comment-meta">
                                        <a href="#" class="post-author">Christian Williams</a>
                                        <a href="#" class="post-date">April 15, 2018</a>
                                        <p>Donec turpis erat, scelerisque id euismod sit amet, fermentum vel dolor. Nulla facilisi. Sed pellen tesque lectus et accu msan aliquam. Fusce lobortis cursus quam, id mattis sapien.</p>
                                    </div>
                                </div>
                            </li>
                        </ol>
                    </div>

                    <div class="post-a-comment-area section-padding-80-0">
                        <h4>Leave a comment</h4>
                        
                        <!-- Reply Form -->
                        <div class="contact-form-area">
                            <form action="#" method="post">
                                <div class="row">
                                    <div class="col-12 col-lg-6">
                                        <input type="text" class="form-control" id="name" placeholder="Name*">
                                    </div>
                                    <div class="col-12 col-lg-6">
                                        <input type="email" class="form-control" id="email" placeholder="Email*">
                                    </div>
                                    <div class="col-12">
                                        <input type="text" class="form-control" id="subject" placeholder="Website">
                                    </div>
                                    <div class="col-12">
                                        <textarea name="message" class="form-control" id="message" cols="30" rows="10" placeholder="Message"></textarea>
                                    </div>
                                    <div class="col-12 text-center">
                                        <button class="btn newspaper-btn mt-30 w-100" type="submit">Submit Comment</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-4">
                <div class="blog-sidebar-area">

                    <!-- Latest Posts Widget -->
                    <div class="latest-posts-widget mb-50">

                        <!-- Single Featured Post -->
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

                        <!-- Single Featured Post -->
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

                        <!-- Single Featured Post -->
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

                        <!-- Single Featured Post -->
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

                        <!-- Single Featured Post -->
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

                        <!-- Single Featured Post -->
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

                    <!-- Latest Comments Widget -->
                    <div class="latest-comments-widget">
                        <h3>Latest Comments</h3>

                        <!-- Single Comments -->
                        <div class="single-comments d-flex">
                            <div class="comments-thumbnail mr-15">
                                <img src="img/bg-img/29.jpg" alt="">
                            </div>
                            <div class="comments-text">
                                <a href="#">Jamie Smith <span>on</span> Facebook is offering facial recognition...</a>
                                <p>06:34 am, April 14, 2018</p>
                            </div>
                        </div>

                        <!-- Single Comments -->
                        <div class="single-comments d-flex">
                            <div class="comments-thumbnail mr-15">
                                <img src="img/bg-img/30.jpg" alt="">
                            </div>
                            <div class="comments-text">
                                <a href="#">Jamie Smith <span>on</span> Facebook is offering facial recognition...</a>
                                <p>06:34 am, April 14, 2018</p>
                            </div>
                        </div>

                        <!-- Single Comments -->
                        <div class="single-comments d-flex">
                            <div class="comments-thumbnail mr-15">
                                <img src="img/bg-img/31.jpg" alt="">
                            </div>
                            <div class="comments-text">
                                <a href="#">Jamie Smith <span>on</span> Facebook is offering facial recognition...</a>
                                <p>06:34 am, April 14, 2018</p>
                            </div>
                        </div>

                        <!-- Single Comments -->
                        <div class="single-comments d-flex">
                            <div class="comments-thumbnail mr-15">
                                <img src="img/bg-img/32.jpg" alt="">
                            </div>
                            <div class="comments-text">
                                <a href="#">Jamie Smith <span>on</span> Facebook is offering facial recognition...</a>
                                <p>06:34 am, April 14, 2018</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ##### Blog Area End ##### -->