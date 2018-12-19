<?php

namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use yii\data\Pagination;
use frontend\models\VAlbumFoto;
use frontend\models\VGalleryFoto;

class AlbumfotoController extends \yii\web\Controller
{

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
        $afoto->updateCounters([
            'hit_album' => 1,
        ]);

        return $this->render('view', ['afoto' => $afoto]);
    }

    public function actionViewfoto($id)
    {
        $galeri = VGalleryFoto::find()
            ->where([
                    'id_instansi' => 'G09018',
                    'slug_gallery' => $id
                ])
            ->one();
        //script untuk menambahkan jumlah hit_berita -> hit_berita+1
        $galeri->updateCounters(['hit_gallery' => 1]);

        return $this->render('viewfoto', ['galeri' => $galeri]);
    }

}
