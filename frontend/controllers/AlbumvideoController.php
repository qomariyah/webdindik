<?php

namespace frontend\controllers;

namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use yii\data\Pagination;
use frontend\models\VAlbumVideo;

class AlbumvideoController extends \yii\web\Controller
{

    public function actionIndex()
    {
        $query = VAlbumVideo::find()
    		->where([
    				'id_instansi' => 'G09018',
    				'status_album' => 'ON',
    				'jenis_album' => 'VIDEO',
                ])
    		->orderBy('tanggal_album DESC');
        $countQuery = $query->count();
        $pages = new Pagination(['pageSize' => 9 , 'totalCount' => $countQuery]);
        $daftarvideo = $query->offset($pages->offset)
            ->limit($pages->limit)
            ->all();

        return $this->render('index', [
            'daftarvideo' => $daftarvideo,
            'pages' => $pages,
        ]);
    }

    public function actionView($id)
    {
    	$avideo = VAlbumVideo::find()
            ->where([
                    'id_instansi' => 'G09018',
                    'slug_album' => $id
                ])
            ->one();
        //script untuk menambahkan jumlah hit_berita -> hit_berita+1
        $avideo->updateCounters(['hit_album' => 1]);

        return $this->render('view', ['avideo' => $avideo]);
    }

}
