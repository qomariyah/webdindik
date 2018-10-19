<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "v_link_terkait".
 *
 * @property string $id_link
 * @property string $instansi_id
 * @property string $text_link
 * @property string $gambar_link
 * @property string $url_link
 * @property int $urutan_link
 * @property string $id_instansi
 * @property string $nama_instansi
 * @property string $singkatan_instansi
 * @property int $urutan_instansi
 */
class VLinkTerkait extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'v_link_terkait';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_link', 'instansi_id', 'text_link', 'gambar_link', 'url_link', 'urutan_link', 'id_instansi', 'nama_instansi', 'singkatan_instansi', 'urutan_instansi'], 'required'],
            [['urutan_link', 'urutan_instansi'], 'integer'],
            [['id_link', 'instansi_id'], 'string', 'max' => 25],
            [['text_link', 'nama_instansi'], 'string', 'max' => 100],
            [['gambar_link', 'url_link', 'singkatan_instansi'], 'string', 'max' => 255],
            [['id_instansi'], 'string', 'max' => 15],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_link' => 'Id Link',
            'instansi_id' => 'Instansi ID',
            'text_link' => 'Text Link',
            'gambar_link' => 'Gambar Link',
            'url_link' => 'Url Link',
            'urutan_link' => 'Urutan Link',
            'id_instansi' => 'Id Instansi',
            'nama_instansi' => 'Nama Instansi',
            'singkatan_instansi' => 'Singkatan Instansi',
            'urutan_instansi' => 'Urutan Instansi',
        ];
    }
}
