<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "v_pengumuman".
 *
 * @property string $id_pengumuman
 * @property string $user_id
 * @property string $judul_pengumuman
 * @property string $inisial_pengumuman
 * @property string $slug_pengumuman
 * @property string $gambar_pengumuman
 * @property string $isi_pengumuman
 * @property string $utama_kota_pengumuman
 * @property string $utama_instansi_pengumuman
 * @property string $utama_lainnya_pengumuman
 * @property string $jenis_pengumuman
 * @property string $direktori_pengumuman
 * @property string $warna_pengumuman
 * @property string $status_pengumuman
 * @property int $hit_pengumuman
 * @property string $tanggal_pengumuman
 * @property string $timestamp_pengumuman
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
class VPengumuman extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'v_pengumuman';
    }

    /**
    * Set id_berita as primary key manually
    */
    public static function primaryKey()
    {
        return ['id_pengumuman'];
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_pengumuman', 'user_id', 'judul_pengumuman', 'slug_pengumuman', 'gambar_pengumuman', 'isi_pengumuman', 'hit_pengumuman', 'tanggal_pengumuman', 'id_user', 'password_user', 'instansi_id', 'level_user', 'nama_user', 'alamat_user', 'hp_user', 'email_user', 'gambar_user', 'id_instansi', 'nama_instansi', 'singkatan_instansi', 'urutan_instansi', 'alamat_website'], 'required'],
            [['slug_pengumuman', 'isi_pengumuman', 'utama_kota_pengumuman', 'utama_instansi_pengumuman', 'utama_lainnya_pengumuman', 'status_pengumuman', 'level_user', 'status_user'], 'string'],
            [['hit_pengumuman', 'urutan_instansi'], 'integer'],
            [['tanggal_pengumuman', 'timestamp_pengumuman', 'timestamp_user'], 'safe'],
            [['id_pengumuman', 'instansi_id'], 'string', 'max' => 25],
            [['user_id', 'nama_user', 'nama_instansi'], 'string', 'max' => 100],
            [['judul_pengumuman', 'inisial_pengumuman', 'gambar_pengumuman', 'password_user', 'alamat_user', 'email_user', 'gambar_user', 'singkatan_instansi', 'alamat_website'], 'string', 'max' => 255],
            [['jenis_pengumuman', 'id_instansi'], 'string', 'max' => 15],
            [['direktori_pengumuman', 'id_user', 'hp_user'], 'string', 'max' => 50],
            [['warna_pengumuman'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_pengumuman' => 'Id Pengumuman',
            'user_id' => 'User ID',
            'judul_pengumuman' => 'Judul Pengumuman',
            'inisial_pengumuman' => 'Inisial Pengumuman',
            'slug_pengumuman' => 'Slug Pengumuman',
            'gambar_pengumuman' => 'Gambar Pengumuman',
            'isi_pengumuman' => 'Isi Pengumuman',
            'utama_kota_pengumuman' => 'Utama Kota Pengumuman',
            'utama_instansi_pengumuman' => 'Utama Instansi Pengumuman',
            'utama_lainnya_pengumuman' => 'Utama Lainnya Pengumuman',
            'jenis_pengumuman' => 'Jenis Pengumuman',
            'direktori_pengumuman' => 'Direktori Pengumuman',
            'warna_pengumuman' => 'Warna Pengumuman',
            'status_pengumuman' => 'Status Pengumuman',
            'hit_pengumuman' => 'Hit Pengumuman',
            'tanggal_pengumuman' => 'Tanggal Pengumuman',
            'timestamp_pengumuman' => 'Timestamp Pengumuman',
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
