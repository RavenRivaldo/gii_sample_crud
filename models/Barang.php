<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "barang".
 *
 * @property int $id_bar
 * @property string $kode_barang
 * @property string $nama_barang
 * @property string $satuan
 * @property int $id_jenis
 * @property int $id_sup
 * @property float $harga
 * @property int $stok
 */
class Barang extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'barang';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kode_barang', 'nama_barang', 'satuan', 'id_jenis', 'id_sup', 'harga', 'stok'], 'required'],
            [['id_jenis', 'id_sup', 'stok'], 'integer'],
            [['harga'], 'number'],
            [['kode_barang'], 'string', 'max' => 10],
            [['nama_barang'], 'string', 'max' => 50],
            [['satuan'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_bar' => 'Id Bar',
            'kode_barang' => 'Kode Barang',
            'nama_barang' => 'Nama Barang',
            'satuan' => 'Satuan',
            'id_jenis' => 'Id Jenis',
            'id_sup' => 'Id Sup',
            'harga' => 'Harga',
            'stok' => 'Stok',
        ];
    }
}
