<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "v_childmenu".
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
 * @property string $id_childmenu
 * @property string $nama_childmenu
 * @property string $link_childmenu
 * @property int $urutan_childmenu
 */
class VChildmenu extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'v_childmenu';
    }

    public static function primaryKey()
    {
        return ['id_childmenu'];
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_menu', 'instansi_id', 'nama_menu', 'link_menu', 'urutan_menu', 'id_instansi', 'nama_instansi', 'singkatan_instansi', 'urutan_instansi', 'id_submenu', 'nama_submenu', 'link_submenu', 'urutan_submenu', 'id_childmenu', 'nama_childmenu', 'link_childmenu', 'urutan_childmenu'], 'required'],
            [['urutan_menu', 'urutan_instansi', 'urutan_submenu', 'urutan_childmenu'], 'integer'],
            [['id_menu', 'id_submenu', 'id_childmenu'], 'string', 'max' => 25],
            [['instansi_id', 'id_instansi'], 'string', 'max' => 15],
            [['nama_menu', 'link_menu', 'nama_instansi', 'nama_submenu', 'link_submenu', 'nama_childmenu', 'link_childmenu'], 'string', 'max' => 100],
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
            'id_childmenu' => 'Id Childmenu',
            'nama_childmenu' => 'Nama Childmenu',
            'link_childmenu' => 'Link Childmenu',
            'urutan_childmenu' => 'Urutan Childmenu',
        ];
    }
}
