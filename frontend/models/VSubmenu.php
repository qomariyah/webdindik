<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "v_submenu".
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
 * @property string $id_submenu
 * @property string $nama_submenu
 * @property string $link_submenu
 * @property int $urutan_submenu
 */
class VSubmenu extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'v_submenu';
    }

    public static function primaryKey()
    {
        return ['id_submenu'];
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_menu', 'instansi_id', 'nama_menu', 'link_menu', 'urutan_menu', 'id_instansi', 'nama_instansi', 'singkatan_instansi', 'urutan_instansi', 'id_submenu', 'nama_submenu', 'link_submenu', 'urutan_submenu'], 'required'],
            [['urutan_menu', 'urutan_instansi', 'urutan_submenu'], 'integer'],
            [['id_menu', 'id_submenu'], 'string', 'max' => 25],
            [['instansi_id', 'id_instansi'], 'string', 'max' => 15],
            [['nama_menu', 'link_menu', 'nama_instansi', 'nama_submenu', 'link_submenu'], 'string', 'max' => 100],
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
            'id_submenu' => 'Id Submenu',
            'nama_submenu' => 'Nama Submenu',
            'link_submenu' => 'Link Submenu',
            'urutan_submenu' => 'Urutan Submenu',
        ];
    }
}
