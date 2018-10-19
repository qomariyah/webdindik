<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "tb_menu".
 *
 * @property string $id_menu
 * @property string $instansi_id
 * @property string $nama_menu
 * @property string $link_menu
 * @property int $urutan_menu
 */
class TbMenu extends \yii\db\ActiveRecord
{
    public $instansi_id = "G09018";
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tb_menu';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_menu', 'instansi_id', 'nama_menu', 'link_menu', 'urutan_menu'], 'required'],
            [['urutan_menu'], 'integer'],
            [['id_menu'], 'string', 'max' => 25],
            [['instansi_id'], 'string', 'max' => 15],
            [['nama_menu', 'link_menu'], 'string', 'max' => 100],
            [['id_menu'], 'unique'],
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
        ];
    }
}
