<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "v_album_video".
 *
 * @property string $id_album
 * @property string $user_id
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
 */
class VAlbumVideo extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'v_album_video';
    }

    public static function primaryKey()
    {
        return ['id_album'];
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_album', 'user_id', 'nama_album', 'jenis_album', 'slug_album', 'keterangan_album', 'tag_album', 'gambar_album', 'hit_album', 'tanggal_album', 'waktu_album', 'verifikator_album', 'waktu_verif_album', 'respon_album', 'id_instansi', 'nama_instansi', 'singkatan_instansi'], 'required'],
            [['jenis_album', 'keterangan_album', 'status_album'], 'string'],
            [['hit_album'], 'integer'],
            [['tanggal_album', 'waktu_album', 'waktu_verif_album', 'timestamp_album'], 'safe'],
            [['id_album'], 'string', 'max' => 14],
            [['user_id', 'verifikator_album'], 'string', 'max' => 50],
            [['nama_album', 'slug_album', 'gambar_album', 'nama_instansi'], 'string', 'max' => 100],
            [['tag_album', 'respon_album', 'singkatan_instansi'], 'string', 'max' => 255],
            [['id_instansi'], 'string', 'max' => 15],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_album' => 'Id Album',
            'user_id' => 'User ID',
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
        ];
    }
}
