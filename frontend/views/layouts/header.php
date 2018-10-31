<?php

use yii\helpers\Url;
use yii\helpers\Html;
use frontend\models\VSubmenu;
use frontend\models\VChildmenu;

?>

<!-- ##### Header Area Start ##### -->
<header class="header-area">

    <!-- Top Header Area -->
    <div class="top-header-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="top-header-content d-flex align-items-center justify-content-between">
                        <?php foreach(frontend\controllers\SiteController::actionWebsite() as $row) { ?>
                            <!-- Logo -->
                            <div class="logo">
                                <a href="<?= Url::to(['/'])?>">
                                    <?= Html::img('@web/upload/logo/'.$row->logo_website.'',  ['alt' => ''.$row->logo_website.''], ['width' => 350]) ?>
                                </a>
                            </div>
                        <?php } ?>
                        <!-- Login Search Area -->
                        <div class="login-search-area d-flex align-items-center">
                        <!-- Search Form -->
                            <div class="search-form">
                                <form action="#" method="post">
                                    <input type="search" name="search" class="form-control" placeholder="Cari . . .">
                                    <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Navbar Area -->
    <div class="newspaper-main-menu" id="stickyMenu">
        <div class="classy-nav-container breakpoint-off">
            <div class="container">
                <!-- Menu -->
                <nav class="classy-navbar justify-content-between" id="newspaperNav">

                    <?php foreach(frontend\controllers\SiteController::actionWebsite() as $row) { ?>
                        <!-- Logo -->
                        <div class="logo">
                            <a href="<?= Url::to(['/'])?>">
                                <?= Html::img('@web/upload/logo/'.$row->logo_website.'',  ['alt' => ''.$row->logo_website.'']) ?>
                            </a>
                        </div>
                    <?php } ?>

                    <!-- Navbar Toggler -->
                    <div class="classy-navbar-toggler">
                        <span class="navbarToggler"><span></span><span></span><span></span></span>
                    </div>

                    <!-- Menu -->
                    <div class="classy-menu">

                        <!-- close btn -->
                        <div class="classycloseIcon">
                            <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                        </div>

                        <!-- Nav Start -->
                        <div class="classynav">
                            <ul>
                                <?php foreach (frontend\controllers\SiteController::actionMenu() as $menu) { ?>

                                    <?php if ($menu->link_menu != '#') { ?>
                                        <li><a href="<?= $menu->link_menu ?>"><?= $menu->nama_menu ?></a></li>
                                    <?php } else { ?>

                                        <?php
                                            $idmenu = $menu->id_menu;
                                            $submenu = VSubmenu::find()
                                                        ->where([
                                                                'instansi_id' => 'G09018',
                                                                'id_menu' => $idmenu
                                                            ])
                                                        ->orderBy('urutan_submenu')
                                                        ->all();
                                        ?>

                                        <?php if (count($submenu) > 0) { ?>
                                            <li><a href="<?= $menu->link_menu ?>"><?= $menu->nama_menu ?></a>
                                                <ul class="dropdown">
                                                    <?php foreach($submenu as $submenu) { ?>
                                                        <?php
                                                            $idsub = $submenu->id_submenu;
                                                            $childmenu = VChildmenu::find()
                                                                            ->where([
                                                                                    'instansi_id' => 'G09018',
                                                                                    'id_submenu' => $idsub
                                                                                ])
                                                                            ->orderBy('urutan_childmenu')
                                                                            ->all();
                                                        ?>
                                                        <?php if (count($childmenu) > 0) { ?>
                                                            <li>
                                                                <a href="<?= $submenu->link_submenu ?>"><?= $submenu->nama_submenu ?></a>
                                                                <ul class="dropdown">
                                                                    <?php foreach($childmenu as $cm) { ?>
                                                                        <li><a href="<?= $cm->link_childmenu ?>"><?= $cm->nama_childmenu ?></a></li>
                                                                    <?php } ?>
                                                                </ul>
                                                            </li>
                                                        <?php } else { ?>
                                                            <li><a href="<?= $submenu->link_submenu ?>"><?= $submenu->nama_submenu ?></a></li>
                                                        <?php } ?>
                                                    <?php } ?>
                                                </ul>
                                            </li>
                                        <?php } else { ?>
                                            <li><a href="<?= $menu->link_menu ?>"><?= $menu->nama_menu ?></a></li>
                                        <?php } ?>
                                    <?php } ?>
                                <?php } ?>
                            </ul>
                        </div>
                        <!-- Nav End -->
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- ##### Header Area End ##### -->