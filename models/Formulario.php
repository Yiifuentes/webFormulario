<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "formulario".
 *
 * @property string $nombre
 * @property integer $correo
 * @property integer $telefono
 * @property string $mensaje
 * @property integer $id
 */
class Formulario extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'formulario';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nombre', 'correo', 'telefono', 'mensaje'], 'required'],
            [[ 'telefono'], 'integer'],
            [['nombre'], 'string', 'max' => 60],
            [['mensaje'], 'string', 'max' => 150],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'nombre' => 'Nombre',
            'correo' => 'Correo',
            'telefono' => 'Telefono',
            'mensaje' => 'Mensaje',
            'id' => 'ID',
        ];
    }
}
