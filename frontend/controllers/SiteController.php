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
class SiteController extends Controller
{
    public $id_instansi = 'G09018';
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout', 'signup'],
                'rules' => [
                    [
                        'actions' => ['signup'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex()
    {
        $berita_instansi_limit = VBeritaInstansi::find()
            ->where([
                    'instansi_id' => 'G09018',
                    'instansi_berita' => 'ON'
                ])
            ->orderBy('tanggal_berita DESC')
            ->limit(5)
            ->all();
        //SELECT * FROM `v_berita_instansi` WHERE instansi_id='G09018' AND instansi_berita='ON' ORDER by tanggal_berita DESC


        $berita_instansi = VBeritaInstansi::find()
            ->where([
                'instansi_id' => 'G09018',
                'instansi_berita' => 'ON'])
            ->orderBy('tanggal_berita DESC')
            ->limit(6)
            ->all();

        /*$berita_utama_instansi = VBeritaInstansi::find()
            ->where([
                    'instansi_id' => 'G09018',
                    'instansi_berita' => 'ON',
                    'utama_instansi_berita' => 'ON'
                ])
            ->orderBy('tanggal_berita DESC')
            ->all();*/
        
        $slideractive = VBeritaInstansi::find()
             ->where([
                    'instansi_id' => 'G09018',
                    'instansi_berita' => 'ON',
                    'utama_instansi_berita' => 'ON'
                ])
            ->orderBy('tanggal_berita DESC')
            ->limit(1)
            ->all();

        $slideritem = VBeritaInstansi::find()
             ->where([
                    'instansi_id' => 'G09018',
                    'instansi_berita' => 'ON',
                    'utama_instansi_berita' => 'ON'
                ])
            ->orderBy('tanggal_berita DESC')
            ->limit(4)
            ->offset(1)
            ->all();

        return $this->render('index', [
            'berita_instansi_limit' => $berita_instansi_limit,
            'berita_instansi'       => $berita_instansi,
            'slideractive'          => $slideractive,
            'slideritem'            => $slideritem
        ]);
    }

    public function actionView($id){
        $berita = VBeritaInstansi::find()->where(['slug_berita' => $id])->one();
        //script untuk menambahkan jumlah hit_berita -> hit_berita+1
        $berita->updateCounters(['hit_berita' => 1]);

        return $this->render('view', ['berita' => $berita]);
    }

    public function actionDaftar()
    {
        $query = VBeritaInstansi::find()
            ->where([
                'instansi_id' => 'G09018',
                'instansi_berita' => 'ON'])
            ->orderBy('tanggal_berita DESC');
        $countQuery = $query->count();
        $pages = new Pagination(['pageSize' => 1 , 'totalCount' => $countQuery]);
        $daftar_berita_instansi = $query->offset($pages->offset)
            ->limit($pages->limit)
            ->all();

        return $this->render('daftar', [
            'daftar_berita_instansi' => $daftar_berita_instansi,
            'pages'                  => $pages,
        ]);
    }

    public function actionFooter()
    {
        /*$linkterkait = new ActiveDataProvider(['query' => VLinkTerkait::find()->where(['instansi_id' => 'GO9018'])->orderBy('urutan_link ASC')]);*/


        $linkterkait = VLinkTerkait::find()
            ->where([
                    'instansi_id' => 'G09018',
                ])
            ->orderBy('urutan_link ASC')
            ->all();

        $this->view->params['linkterkait'] = $linkterkait;

        return $this->render('index', [
            'linkterkait' => $linkterkait
            /*'berita' => $berita*/
        ]);
    }


    /**
     * Displays about page.
     *
     * @return mixed
     */
    public function actionAbout()
    {
        return $this->render('about');
    }

}
