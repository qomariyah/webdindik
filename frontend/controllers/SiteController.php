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
use frontend\models\VAlbumVideo;
use frontend\models\VPengumuman;
use frontend\models\VLinkTerkait;
use frontend\models\VHalaman;
use yii\data\Pagination;

/**
 * Site controller
 */
class SiteController extends Controller
{

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
                    'jenis_album' => 'FOTO',
                ])
            ->orderBy('tanggal_album DESC')
            ->limit(3)
            ->all();

        //Displays album video
        $albumvideo = VAlbumVideo::find()
            ->where([
                    'id_instansi' => 'G09018',
                    'status_album' => 'ON',
                    'jenis_album' => 'VIDEO',
                ])
            ->orderBy('tanggal_album DESC')
            ->limit(3)
            ->all();

        //Displays Announcement(Pengumuman)
        $pengumuman = VPengumuman::find()
            ->where([
                    'instansi_id' => 'G09018',
                    'utama_instansi_pengumuman' => 'ON',
                    'status_pengumuman' => 'ON',
                ])
            ->orderBy('tanggal_pengumuman DESC')
            ->limit(3)
            ->all();

        return $this->render('index', [
            'berita_instansi_limit' => $berita_instansi_limit,
            'berita_instansi'       => $berita_instansi,
            'slideractive'          => $slideractive,
            'slideritem'            => $slideritem,
            'albumfoto'             => $albumfoto,
            'albumvideo'            => $albumvideo,
            'pengumuman'            => $pengumuman,
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

    public function actionSejarah()
    {
        $sejarah = VHalaman::find()
            ->where([
                    'instansi_id' => 'G09018',
                    'status_halaman' => 'ON',
                    'id_halaman' => '20180411085958',
                ])
            ->one();
        $sejarah->updateCounters(['hit_halaman' => 1]);

        return $this->render('sejarah', [
            'sejarah' => $sejarah,
        ]);
    }

    public function actionGeografi()
    {
        $geografi = VHalaman::find()
            ->where([
                    'instansi_id' => 'G09018',
                    'status_halaman' => 'ON',
                    'id_halaman' => '20180411090143',
                ])
            ->one();
        $geografi->updateCounters(['hit_halaman' => 1]);

        return $this->render('geografi', [
            'geografi' => $geografi,
        ]);
    }

}
