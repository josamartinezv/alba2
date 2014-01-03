<?php

namespace app\models;

/**
 * This is the model class for table "tipo_calificacion".
 *
 * @property integer $id
 * @property string $descripcion
 * @property double $valor_probacion
 *
 * @property ConfiguracionPlanEstudio[] $configuracionPlanEstudios
 * @property ValorCalificacion[] $valorCalificacions
 */
class TipoCalificacion extends \yii\db\ActiveRecord
{
	/**
	 * @inheritdoc
	 */
	public static function tableName()
	{
		return 'tipo_calificacion';
	}

	/**
	 * @inheritdoc
	 */
	public function rules()
	{
		return [
			[['descripcion'], 'required'],
			[['valor_probacion'], 'number'],
			[['descripcion'], 'string', 'max' => 45],
			[['descripcion'], 'unique']
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
			'valor_probacion' => 'Valor Probacion',
		];
	}

	/**
	 * @return \yii\db\ActiveRelation
	 */
	public function getConfiguracionPlanEstudios()
	{
		return $this->hasMany(ConfiguracionPlanEstudio::className(), ['tipo_calificacion_id' => 'id']);
	}

	/**
	 * @return \yii\db\ActiveRelation
	 */
	public function getValorCalificacions()
	{
		return $this->hasMany(ValorCalificacion::className(), ['tipo_calificacion_id' => 'id']);
	}
}