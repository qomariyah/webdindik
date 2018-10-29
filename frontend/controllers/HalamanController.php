<?php

namespace frontend\controllers;

use Yii;
use yii\base\Controller;
use frontend\models\VHalaman;

class HalamanController extends \yii\web\Controller
{
    public function actionSejarah($id)
    {
    	$sejarah = VHalaman::find()
    		->where([
    				'instansi_id' => 'G09018',
    				'status_halaman' => 'ON',
    				'id_halaman' => '20180411085958',
    				'slug_halaman' => $id,
    			])
    		->one();
    	$sejarah->updateCounters(['hit_halaman' => 1]);

        return $this->render('sejarah', [
        	'sejarah' => $sejarah,
        ]);
    }

}
