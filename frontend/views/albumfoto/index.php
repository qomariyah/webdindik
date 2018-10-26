<?php 
use yii\helpers\Url;
use yii\helpers\Html;
use yii\widgets\LinkPager;

$this->title = 'Dinas Pendidikan Kota Pekalongan';
?>

<!-- ##### Editorial Post Area Start ##### -->
    <div class="popular-news-area section-padding-80-50">
        <div class="container">
            <div class="row">
                <!-- Editors Pick -->
                <div class="col-12 col-md-12 col-lg-12">
                    <div class="section-heading">
                        <h6>Album Foto</h6>
                    </div>
                    <div class="row">
                        <?php foreach ($daftarfoto as $dfoto) { ?>
                            <!-- Single Post -->
                            <div class="col-12 col-lg-4">
                                <div class="single-blog-post">
                                    <div class="post-thumb">
                                        <a href="#">
                                            <?php if($dfoto->gambar_album != null) { ?>
                                                <?= Html::img('@web/upload/album/foto/'.$dfoto->gambar_album.'', ['class' => 'img-album-foto-list'], ['alt' => ''.$dfoto->gambar_album.'']) ?>
                                            <?php } else { ?>
                                                <?= Html::img('@web/upload/No_Image_Available.jpg', ['class' => 'img-album-foto-list'] ,['alt' => 'No Image Available']); ?>
                                            <?php } ?>
                                        </a>
                                    </div>
                                    <div class="post-data">
                                        <a href="#" class="post-title">
                                            <center>
                                                <?= $dfoto->nama_album ?><br>
                                                <?= date('d F Y', strtotime($dfoto->tanggal_album)) ?>
                                            </center>
                                        </a>
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
            </div>
        </div>
    </div>
    <!-- ##### Editorial Post Area End ##### -->