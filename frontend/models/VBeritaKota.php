<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "v_berita_kota".
 *
 * @property string $id_berita
 * @property string $user_id
 * @property string $kategori_id
 * @property string $tema_id
 * @property string $utama_kota_berita
 * @property string $kota_berita
 * @property string $kota_instansi_berita
 * @property string $kota_lainnya_berita
 * @property string $utama_instansi_berita
 * @property string $instansi_berita
 * @property string $instansi_lainnya_berita
 * @property string $utama_lainnya_berita
 * @property string $lainnya_berita
 * @property string $judul_berita
 * @property string $jenis_berita
 * @property string $inisial_berita
 * @property string $slug_berita
 * @property string $tag_berita
 * @property string $gambar_berita
 * @property string $isi_berita
 * @property string $direktori_berita
 * @property string $warna_berita
 * @property int $hit_berita
 * @property string $tanggal_berita
 * @property string $waktu_berita
 * @property string $verifikator_berita
 * @property string $respon_berita
 * @property string $waktu_verif_berita
 * @property string $timestamp_berita
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
 * @property string $id_kategori
 * @property string $slug_kategori
 * @property string $nama_kategori
 * @property string $ket_kategori
 * @property string $timestamp_kategori
 * @property string $alamat_website
 * @property string $id_tema
 * @property string $nama_tema
 * @property string $slug_tema
 * @property string $keterangan_tema
 * @property string $status_tema
 */
class VBeritaKota extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'v_berita_kota';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_berita', 'user_id', 'kategori_id', 'tema_id', 'judul_berita', 'jenis_berita', 'inisial_berita', 'slug_berita', 'tag_berita', 'gambar_berita', 'isi_berita', 'warna_berita', 'hit_berita', 'tanggal_berita', 'waktu_berita', 'verifikator_berita', 'respon_berita', 'waktu_verif_berita', 'id_user', 'password_user', 'instansi_id', 'level_user', 'nama_user', 'alamat_user', 'hp_user', 'email_user', 'gambar_user', 'id_instansi', 'nama_instansi', 'singkatan_instansi', 'urutan_instansi', 'id_kategori', 'slug_kategori', 'nama_kategori', 'ket_kategori', 'timestamp_kategori', 'alamat_website', 'id_tema', 'nama_tema', 'slug_tema', 'keterangan_tema'], 'required'],
            [['utama_kota_berita', 'kota_berita', 'kota_instansi_berita', 'kota_lainnya_berita', 'utama_instansi_berita', 'instansi_berita', 'instansi_lainnya_berita', 'utama_lainnya_berita', 'lainnya_berita', 'slug_berita', 'isi_berita', 'level_user', 'status_user', 'status_tema'], 'string'],
            [['hit_berita', 'urutan_instansi'], 'integer'],
            [['tanggal_berita', 'waktu_berita', 'waktu_verif_berita', 'timestamp_berita', 'timestamp_user', 'timestamp_kategori'], 'safe'],
            [['id_berita', 'warna_berita'], 'string', 'max' => 20],
            [['user_id', 'direktori_berita', 'verifikator_berita', 'id_user', 'hp_user'], 'string', 'max' => 50],
            [['kategori_id', 'tema_id', 'instansi_id', 'id_kategori', 'id_tema'], 'string', 'max' => 25],
            [['judul_berita', 'inisial_berita', 'tag_berita', 'gambar_berita', 'respon_berita', 'password_user', 'alamat_user', 'email_user', 'gambar_user', 'singkatan_instansi', 'slug_kategori', 'alamat_website', 'slug_tema', 'keterangan_tema'], 'string', 'max' => 255],
            [['jenis_berita'], 'string', 'max' => 10],
            [['nama_user', 'nama_instansi', 'nama_kategori', 'ket_kategori', 'nama_tema'], 'string', 'max' => 100],
            [['id_instansi'], 'string', 'max' => 15],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_berita' => 'Id Berita',
            'user_id' => 'User ID',
            'kategori_id' => 'Kategori ID',
            'tema_id' => 'Tema ID',
            'utama_kota_berita' => 'Utama Kota Berita',
            'kota_berita' => 'Kota Berita',
            'kota_instansi_berita' => 'Kota Instansi Berita',
            'kota_lainnya_berita' => 'Kota Lainnya Berita',
            'utama_instansi_berita' => 'Utama Instansi Berita',
            'instansi_berita' => 'Instansi Berita',
            'instansi_lainnya_berita' => 'Instansi Lainnya Berita',
            'utama_lainnya_berita' => 'Utama Lainnya Berita',
            'lainnya_berita' => 'Lainnya Berita',
            'judul_berita' => 'Judul Berita',
            'jenis_berita' => 'Jenis Berita',
            'inisial_berita' => 'Inisial Berita',
            'slug_berita' => 'Slug Berita',
            'tag_berita' => 'Tag Berita',
            'gambar_berita' => 'Gambar Berita',
            'isi_berita' => 'Isi Berita',
            'direktori_berita' => 'Direktori Berita',
            'warna_berita' => 'Warna Berita',
            'hit_berita' => 'Hit Berita',
            'tanggal_berita' => 'Tanggal Berita',
            'waktu_berita' => 'Waktu Berita',
            'verifikator_berita' => 'Verifikator Berita',
            'respon_berita' => 'Respon Berita',
            'waktu_verif_berita' => 'Waktu Verif Berita',
            'timestamp_berita' => 'Timestamp Berita',
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
            'id_kategori' => 'Id Kategori',
            'slug_kategori' => 'Slug Kategori',
            'nama_kategori' => 'Nama Kategori',
            'ket_kategori' => 'Ket Kategori',
            'timestamp_kategori' => 'Timestamp Kategori',
            'alamat_website' => 'Alamat Website',
            'id_tema' => 'Id Tema',
            'nama_tema' => 'Nama Tema',
            'slug_tema' => 'Slug Tema',
            'keterangan_tema' => 'Keterangan Tema',
            'status_tema' => 'Status Tema',
        ];
    }
}
