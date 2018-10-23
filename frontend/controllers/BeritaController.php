<?php
namespace frontend\controllers;

use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use yii\data\ActiveDataProvider;
use common\models\LoginForm;
use frontend\models\VBeritaInstansi;
use frontend\models\VBeritaKota;
use frontend\models\VLinkTerkait;
use yii\data\Pagination;

/**
 * Site controller
 */
class BeritaController extends Controller
{

    public function actionIndex($id)
    {
        $berita = VBeritaInstansi::find()->where(['slug_berita' => $id])->one();

        return $this->render('index', ['berita' => $berita]);
    }


}
