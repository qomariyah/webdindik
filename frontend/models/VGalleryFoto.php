<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "v_gallery_foto".
 *
 * @property string $id_gallery
 * @property string $album_id
 * @property string $user_id
 * @property string $nama_gallery
 * @property string $slug_gallery
 * @property string $jenis_gallery
 * @property string $status_gallery
 * @property string $keterangan_gallery
 * @property string $tag_gallery
 * @property string $gambar_gallery
 * @property string $fotografer_gallery
 * @property string $tanggal_gallery
 * @property string $waktu_gallery
 * @property int $hit_gallery
 * @property string $verifikator_gallery
 * @property string $waktu_verif_gallery
 * @property string $respon_gallery
 * @property string $timestamp_gallery
 * @property string $id_album
 * @property string $nama_album
 * @property string $jenis_album
 * @property string $slug_album
 * @property string $keterangan_album
 * @property string $tag_album
 * @property string $gambar_album
 * @property string $status_album
 * @property int $hit_album
 * @property string $tanggal_album
 * @property string $waktu_album
 * @property string $verifikator_album
 * @property string $waktu_verif_album
 * @property string $respon_album
 * @property string $timestamp_album
 * @property string $id_instansi
 * @property string $nama_instansi
 * @property string $singkatan_instansi
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
 */
class VGalleryFoto extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'v_gallery_foto';
    }

    public static function primaryKey()
    {
        return ['id_gallery'];
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_gallery', 'album_id', 'user_id', 'nama_gallery', 'slug_gallery', 'jenis_gallery', 'keterangan_gallery', 'tag_gallery', 'gambar_gallery', 'fotografer_gallery', 'tanggal_gallery', 'waktu_gallery', 'hit_gallery', 'verifikator_gallery', 'waktu_verif_gallery', 'respon_gallery', 'timestamp_gallery', 'id_album', 'nama_album', 'jenis_album', 'slug_album', 'keterangan_album', 'tag_album', 'gambar_album', 'hit_album', 'tanggal_album', 'waktu_album', 'verifikator_album', 'waktu_verif_album', 'respon_album', 'id_instansi', 'nama_instansi', 'singkatan_instansi', 'id_user', 'password_user', 'instansi_id', 'level_user', 'nama_user', 'alamat_user', 'hp_user', 'email_user', 'gambar_user'], 'required'],
            [['jenis_gallery', 'status_gallery', 'keterangan_gallery', 'jenis_album', 'keterangan_album', 'status_album', 'level_user', 'status_user'], 'string'],
            [['tanggal_gallery', 'waktu_gallery', 'waktu_verif_gallery', 'timestamp_gallery', 'tanggal_album', 'waktu_album', 'waktu_verif_album', 'timestamp_album', 'timestamp_user'], 'safe'],
            [['hit_gallery', 'hit_album'], 'integer'],
            [['id_gallery', 'album_id', 'id_album'], 'string', 'max' => 14],
            [['user_id', 'instansi_id'], 'string', 'max' => 25],
            [['nama_gallery', 'gambar_gallery', 'fotografer_gallery', 'nama_album', 'slug_album', 'gambar_album', 'nama_instansi', 'nama_user'], 'string', 'max' => 100],
            [['slug_gallery', 'tag_gallery', 'respon_gallery', 'tag_album', 'respon_album', 'singkatan_instansi', 'password_user', 'alamat_user', 'email_user', 'gambar_user'], 'string', 'max' => 255],
            [['verifikator_gallery', 'verifikator_album', 'id_user', 'hp_user'], 'string', 'max' => 50],
            [['id_instansi'], 'string', 'max' => 15],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_gallery' => 'Id Gallery',
            'album_id' => 'Album ID',
            'user_id' => 'User ID',
            'nama_gallery' => 'Nama Gallery',
            'slug_gallery' => 'Slug Gallery',
            'jenis_gallery' => 'Jenis Gallery',
            'status_gallery' => 'Status Gallery',
            'keterangan_gallery' => 'Keterangan Gallery',
            'tag_gallery' => 'Tag Gallery',
            'gambar_gallery' => 'Gambar Gallery',
            'fotografer_gallery' => 'Fotografer Gallery',
            'tanggal_gallery' => 'Tanggal Gallery',
            'waktu_gallery' => 'Waktu Gallery',
            'hit_gallery' => 'Hit Gallery',
            'verifikator_gallery' => 'Verifikator Gallery',
            'waktu_verif_gallery' => 'Waktu Verif Gallery',
            'respon_gallery' => 'Respon Gallery',
            'timestamp_gallery' => 'Timestamp Gallery',
            'id_album' => 'Id Album',
            'nama_album' => 'Nama Album',
            'jenis_album' => 'Jenis Album',
            'slug_album' => 'Slug Album',
            'keterangan_album' => 'Keterangan Album',
            'tag_album' => 'Tag Album',
            'gambar_album' => 'Gambar Album',
            'status_album' => 'Status Album',
            'hit_album' => 'Hit Album',
            'tanggal_album' => 'Tanggal Album',
            'waktu_album' => 'Waktu Album',
            'verifikator_album' => 'Verifikator Album',
            'waktu_verif_album' => 'Waktu Verif Album',
            'respon_album' => 'Respon Album',
            'timestamp_album' => 'Timestamp Album',
            'id_instansi' => 'Id Instansi',
            'nama_instansi' => 'Nama Instansi',
            'singkatan_instansi' => 'Singkatan Instansi',
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
        ];
    }

}
