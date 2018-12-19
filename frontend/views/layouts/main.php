<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>

<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">

        <?php foreach(frontend\controllers\SiteController::actionWebsite() as $row) { ?>
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="description" content="<?= $row->meta_description ?>">
            <meta name="keywords" content="<?= $row->meta_keyword ?>">
            <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php } ?>
        <?php
            $this->registerMetaTag(Yii::$app->params['og_title'], 'og_title');
            $this->registerMetaTag(Yii::$app->params['og_description'], 'og_description');
            $this->registerMetaTag(Yii::$app->params['og_image'], 'og_image');
            $this->registerMetaTag(Yii::$app->params['og_imgtype'], 'og_imgtype');
        ?>

        <link rel="icon" href="<?= Url::to(['img/core-img/favicon-pkl.ico'])?>">

        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
    </head>

    <body>
    <?php $this->beginBody() ?>

        <?= $this->render('header') ?>
        <?= $content ?>
        <?= $this->render('footer') ?>

    <?php $this->endBody() ?>
    </body>
</html>
<script>
    baguetteBox.run('.cards-gallery', { animation: 'slideIn'});
</script>
<?php $this->endPage() ?>
