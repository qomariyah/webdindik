<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "v_halaman".
 *
 * @property string $id_halaman
 * @property string $user_id
 * @property string $judul_halaman
 * @property string $slug_halaman
 * @property string $gambar_halaman
 * @property string $isi_halaman
 * @property string $status_halaman
 * @property int $hit_halaman
 * @property string $timestamp_halaman
 * @property string $id_user
 * @property string $password_user
 * @property string $instansi_id
 * @property string $level_user
 * @property string $nama_user
 * @property string $alamat_user
 * @property string $hp_user
 * @property string $email_user
 * @property string $gambar_user
 * @property string $status_user
 * @property string $timestamp_user
 * @property string $id_instansi
 * @property string $nama_instansi
 * @property string $singkatan_instansi
 * @property int $urutan_instansi
 * @property string $alamat_website
 */
class VHalaman extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'v_halaman';
    }

    public static function PrimaryKey()
    {
        return ['id_halaman'];
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_halaman', 'user_id', 'judul_halaman', 'slug_halaman', 'gambar_halaman', 'isi_halaman', 'hit_halaman', 'id_user', 'password_user', 'instansi_id', 'level_user', 'nama_user', 'alamat_user', 'hp_user', 'email_user', 'gambar_user', 'id_instansi', 'nama_instansi', 'singkatan_instansi', 'urutan_instansi', 'alamat_website'], 'required'],
            [['isi_halaman', 'status_halaman', 'level_user', 'status_user'], 'string'],
            [['hit_halaman', 'urutan_instansi'], 'integer'],
            [['timestamp_halaman', 'timestamp_user'], 'safe'],
            [['id_halaman', 'instansi_id'], 'string', 'max' => 25],
            [['user_id', 'nama_user', 'nama_instansi'], 'string', 'max' => 100],
            [['judul_halaman', 'slug_halaman'], 'string', 'max' => 500],
            [['gambar_halaman', 'password_user', 'alamat_user', 'email_user', 'gambar_user', 'singkatan_instansi', 'alamat_website'], 'string', 'max' => 255],
            [['id_user', 'hp_user'], 'string', 'max' => 50],
            [['id_instansi'], 'string', 'max' => 15],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_halaman' => 'Id Halaman',
            'user_id' => 'User ID',
            'judul_halaman' => 'Judul Halaman',
            'slug_halaman' => 'Slug Halaman',
            'gambar_halaman' => 'Gambar Halaman',
            'isi_halaman' => 'Isi Halaman',
            'status_halaman' => 'Status Halaman',
            'hit_halaman' => 'Hit Halaman',
            'timestamp_halaman' => 'Timestamp Halaman',
            'id_user' => 'Id User',
            'password_user' => 'Password User',
            'instansi_id' => 'Instansi ID',
            'level_user' => 'Level User',
            'nama_user' => 'Nama User',
            'alamat_user' => 'Alamat User',
            'hp_user' => 'Hp User',
            'email_user' => 'Email User',
            'gambar_user' => 'Gambar User',
            'status_user' => 'Status User',
            'timestamp_user' => 'Timestamp User',
            'id_instansi' => 'Id Instansi',
            'nama_instansi' => 'Nama Instansi',
            'singkatan_instansi' => 'Singkatan Instansi',
            'urutan_instansi' => 'Urutan Instansi',
            'alamat_website' => 'Alamat Website',
        ];
    }
}
