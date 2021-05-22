<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "supplier".
 *
 * @property int $id_sup
 * @property string $nama_sup
 * @property string $notelp
 * @property string $email
 * @property string $alamat
 */
class Supplier extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'supplier';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_sup', 'notelp', 'email', 'alamat'], 'required'],
            [['nama_sup'], 'string', 'max' => 50],
            [['notelp'], 'string', 'max' => 15],
            [['email'], 'string', 'max' => 25],
            [['alamat'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_sup' => 'Id Sup',
            'nama_sup' => 'Nama Sup',
            'notelp' => 'Notelp',
            'email' => 'Email',
            'alamat' => 'Alamat',
        ];
    }
}
