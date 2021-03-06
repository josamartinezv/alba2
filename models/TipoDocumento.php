<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tipo_documento".
 *
 * @property integer $id
 * @property string $descripcion
 * @property string $abreviatura
 *
 * @property Perfil[] $perfils
 */
class TipoDocumento extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tipo_documento';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['descripcion', 'abreviatura'], 'required'],
            [['descripcion'], 'string', 'max' => 40],
            [['abreviatura'], 'string', 'max' => 10],
            [['descripcion'], 'unique'],
            [['abreviatura'], 'unique']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'descripcion' => Yii::t('app', 'Descripcion'),
            'abreviatura' => Yii::t('app', 'Abreviatura'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPerfils()
    {
        return $this->hasMany(Perfil::className(), ['tipo_documento_id' => 'id']);
    }
}
