<?php
namespace frontend\controllers;

use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use yii\data\ActiveDataProvider;
use frontend\models\VBeritaInstansi;
use frontend\models\VBeritaKota;
use frontend\models\VWebsite;
use frontend\models\VAlbumFoto;
use frontend\models\VLinkTerkait;
use yii\data\Pagination;

/**
 * Site controller
 */
class SiteController extends Controller
{
    public static $id_instansi = 'G09018';

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
        //Displays Berita Terbaru
        $berita_instansi_limit = VBeritaInstansi::find()
            ->where([
                    'instansi_id' => 'G09018',
                    'instansi_berita' => 'ON'
                ])
            ->orderBy('tanggal_berita DESC')
            ->limit(5)
            ->all();
        //SELECT * FROM `v_berita_instansi` WHERE instansi_id='G09018' AND instansi_berita='ON' ORDER by tanggal_berita DESC

        //Displays Berita Instansi (Main Content of index)
        $berita_instansi = VBeritaInstansi::find()
            ->where([
                'instansi_id' => 'G09018',
                'instansi_berita' => 'ON'])
            ->orderBy('tanggal_berita DESC')
            ->limit(6)
            ->all();

        //Displays Slider
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

        // When open or reload index, it will add hit
        $hit_website = VWebsite::find()
            ->where([
                    'instansi_id' => 'G09018',
                ])
            ->one();
        $hit_website->updateCounters(['hit_website' => 1]);

        //isplays album foto
        $albumfoto = VAlbumFoto::find()
            ->where([
                    'id_instansi' => 'G09018',
                    'status_album' => 'ON',
                ])
            ->all();

        return $this->render('index', [
            'berita_instansi_limit' => $berita_instansi_limit,
            'berita_instansi'       => $berita_instansi,
            'slideractive'          => $slideractive,
            'slideritem'            => $slideritem,
            'albumfoto'             => $albumfoto,
            $hit_website,
        ]);
    }


    public function actionView($id){
        $berita = VBeritaInstansi::find()
            ->where([
                    'instansi_id' => 'G09018',
                    'slug_berita' => $id
                ])
            ->one();
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
        $pages = new Pagination(['pageSize' => 6 , 'totalCount' => $countQuery]);
        $daftar_berita_instansi = $query->offset($pages->offset)
            ->limit($pages->limit)
            ->all();

        return $this->render('daftar', [
            'daftar_berita_instansi' => $daftar_berita_instansi,
            'pages'                  => $pages,
        ]);
    }

    public function actionViewfoto($id)
    {
        $afoto = VAlbumFoto::find()
            ->where([
                    'id_instansi' => 'G09018',
                    'slug_album' => $id
                ])
            ->one();
        //script untuk menambahkan jumlah hit_berita -> hit_berita+1
        $afoto->updateCounters(['hit_album' => 1]);

        return $this->render('viewfoto', ['afoto' => $afoto]);
    }


    public function actionFooter()
    {
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

}
