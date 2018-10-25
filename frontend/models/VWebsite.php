<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "v_website".
 *
 * @property string $id_website
 * @property string $instansi_id
 * @property string $nama_website
 * @property string $meta_description
 * @property string $meta_keyword
 * @property string $header_website
 * @property string $logo_website
 * @property string $alamat_website
 * @property string $facebook_website
 * @property string $twitter_website
 * @property string $instagram_website
 * @property string $youtube_website
 * @property string $kantor_website
 * @property string $kontak_website
 * @property string $email_website
 * @property int $hit_website
 * @property string $id_instansi
 * @property string $nama_instansi
 * @property string $singkatan_instansi
 * @property int $urutan_instansi
 */
class VWebsite extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'v_website';
    }

    /**
    * Set id_berita as primary key manually
    */
    public static function primaryKey()
    {
        return ['id_website'];
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_website', 'instansi_id', 'nama_website', 'meta_description', 'meta_keyword', 'header_website', 'logo_website', 'alamat_website', 'facebook_website', 'twitter_website', 'instagram_website', 'youtube_website', 'kantor_website', 'kontak_website', 'email_website', 'hit_website', 'id_instansi', 'nama_instansi', 'singkatan_instansi', 'urutan_instansi'], 'required'],
            [['hit_website', 'urutan_instansi'], 'integer'],
            [['id_website', 'instansi_id'], 'string', 'max' => 25],
            [['nama_website', 'meta_description', 'meta_keyword', 'header_website', 'logo_website', 'alamat_website', 'kantor_website', 'singkatan_instansi'], 'string', 'max' => 255],
            [['facebook_website', 'twitter_website', 'instagram_website', 'youtube_website', 'kontak_website', 'email_website', 'nama_instansi'], 'string', 'max' => 100],
            [['id_instansi'], 'string', 'max' => 15],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_website' => 'Id Website',
            'instansi_id' => 'Instansi ID',
            'nama_website' => 'Nama Website',
            'meta_description' => 'Meta Description',
            'meta_keyword' => 'Meta Keyword',
            'header_website' => 'Header Website',
            'logo_website' => 'Logo Website',
            'alamat_website' => 'Alamat Website',
            'facebook_website' => 'Facebook Website',
            'twitter_website' => 'Twitter Website',
            'instagram_website' => 'Instagram Website',
            'youtube_website' => 'Youtube Website',
            'kantor_website' => 'Kantor Website',
            'kontak_website' => 'Kontak Website',
            'email_website' => 'Email Website',
            'hit_website' => 'Hit Website',
            'id_instansi' => 'Id Instansi',
            'nama_instansi' => 'Nama Instansi',
            'singkatan_instansi' => 'Singkatan Instansi',
            'urutan_instansi' => 'Urutan Instansi',
        ];
    }
}
