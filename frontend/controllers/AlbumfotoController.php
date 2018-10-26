<?php

namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use yii\data\Pagination;
use frontend\models\VAlbumFoto;

class AlbumfotoController extends \yii\web\Controller
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

    public function actionIndex()
    {
    	$query = VAlbumFoto::find()
    		->where([
    				'id_instansi' => 'G09018',
    				'status_album' => 'ON',
                    'jenis_album' => 'FOTO',
                ])
    		->orderBy('tanggal_album DESC');
        $countQuery = $query->count();
        $pages = new Pagination(['pageSize' => 9 , 'totalCount' => $countQuery]);
        $daftarfoto = $query->offset($pages->offset)
            ->limit($pages->limit)
            ->all();

        return $this->render('index', [
            'daftarfoto' => $daftarfoto,
            'pages' => $pages,
        ]);
    }

    public function actionView($id)
    {
    	$afoto = VAlbumFoto::find()
            ->where([
                    'id_instansi' => 'G09018',
                    'slug_album' => $id
                ])
            ->one();
        //script untuk menambahkan jumlah hit_berita -> hit_berita+1
        $afoto->updateCounters(['hit_album' => 1]);

        return $this->render('view', ['afoto' => $afoto]);
    }

}
