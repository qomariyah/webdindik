<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "tb_website".
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
 */
class TbWebsite extends \yii\db\ActiveRecord
{

    public $instansi_id = "G09018";
    
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tb_website';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_website', 'instansi_id', 'nama_website', 'meta_description', 'meta_keyword', 'header_website', 'logo_website', 'alamat_website', 'facebook_website', 'twitter_website', 'instagram_website', 'youtube_website', 'kantor_website', 'kontak_website', 'email_website', 'hit_website'], 'required'],
            [['hit_website'], 'integer'],
            [['id_website', 'instansi_id'], 'string', 'max' => 25],
            [['nama_website', 'meta_description', 'meta_keyword', 'header_website', 'logo_website', 'alamat_website', 'kantor_website'], 'string', 'max' => 255],
            [['facebook_website', 'twitter_website', 'instagram_website', 'youtube_website', 'kontak_website', 'email_website'], 'string', 'max' => 100],
            [['id_website'], 'unique'],
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
        ];
    }
}
