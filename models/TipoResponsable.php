<?php

namespace app\models;

/**
 * This is the model class for table "tipo_responsable".
 *
 * @property integer $id
 * @property string $descripcion
 *
 * @property ResponsableAlumno[] $responsableAlumnos
 */
class TipoResponsable extends \yii\db\ActiveRecord
{
	/**
	 * @inheritdoc
	 */
	public static function tableName()
	{
		return 'tipo_responsable';
	}

	/**
	 * @inheritdoc
	 */
	public function rules()
	{
		return [
			['descripcion', 'required'],
			['descripcion', 'string', 'max' => 30]
		];
	}

	/**
	 * @inheritdoc
	 */
	public function attributeLabels()
	{
		return [
			'id' => 'ID',
			'descripcion' => 'Descripcion',
		];
	}

	/**
	 * @return \yii\db\ActiveRelation
	 */
	public function getResponsableAlumnos()
	{
		return $this->hasMany(ResponsableAlumno::className(), ['tipo_responsable_id' => 'id']);
	}
}
