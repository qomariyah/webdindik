<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "v_menu".
 *
 * @property string $id_menu
 * @property string $instansi_id
 * @property string $nama_menu
 * @property string $link_menu
 * @property int $urutan_menu
 * @property string $id_instansi
 * @property string $nama_instansi
 * @property string $singkatan_instansi
 * @property int $urutan_instansi
 */
class VMenu extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'v_menu';
    }

    public static function primaryKey()
    {
        return ['id_menu'];
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_menu', 'instansi_id', 'nama_menu', 'link_menu', 'urutan_menu', 'id_instansi', 'nama_instansi', 'singkatan_instansi', 'urutan_instansi'], 'required'],
            [['urutan_menu', 'urutan_instansi'], 'integer'],
            [['id_menu'], 'string', 'max' => 25],
            [['instansi_id', 'id_instansi'], 'string', 'max' => 15],
            [['nama_menu', 'link_menu', 'nama_instansi'], 'string', 'max' => 100],
            [['singkatan_instansi'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_menu' => 'Id Menu',
            'instansi_id' => 'Instansi ID',
            'nama_menu' => 'Nama Menu',
            'link_menu' => 'Link Menu',
            'urutan_menu' => 'Urutan Menu',
            'id_instansi' => 'Id Instansi',
            'nama_instansi' => 'Nama Instansi',
            'singkatan_instansi' => 'Singkatan Instansi',
            'urutan_instansi' => 'Urutan Instansi',
        ];
    }
}
