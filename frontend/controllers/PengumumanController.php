<?php

namespace frontend\controllers;

use Yii;
use yii\base\Controller;
use yii\data\Pagination;
use frontend\models\VPengumuman;


class PengumumanController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $query = VPengumuman::find()
    		->where([
    				'instansi_id' => 'G09018',
                    'utama_instansi_pengumuman' => 'ON',
                    'status_pengumuman' => 'ON',
                ])
    		->orderBy('tanggal_pengumuman DESC');
        $countQuery = $query->count();
        $pages = new Pagination(['pageSize' => 6 , 'totalCount' => $countQuery]);
        $daftarpengumuman = $query->offset($pages->offset)
            ->limit($pages->limit)
            ->all();

        $populer = VPengumuman::find()
            ->where([
                    'instansi_id' => 'G09018',
                    'status_pengumuman' => 'ON',
                ])
            ->orderBy('hit_pengumuman DESC')
            ->limit(8)
            ->all();

        return $this->render('index', [
            'daftarpengumuman' => $daftarpengumuman,
            'pages' => $pages,
            'populer' => $populer,
        ]);
    }

    public function actionView($id)
    {
    	$pengumuman = VPengumuman::find()
            ->where([
                    'instansi_id' => 'G09018',
                    'slug_pengumuman' => $id
                ])
            ->one();

        $pengumuman->updateCounters(['hit_pengumuman' => 1]);

        return $this->render('view', ['pengumuman' => $pengumuman]);
    }

}
