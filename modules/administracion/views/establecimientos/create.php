<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var app\models\Establecimiento $model
 */

$this->title = Yii::t('app', 'Create {modelClass}', [
  'modelClass' => 'Establecimiento',
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Administración'), 'url' => ['default/index']];
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Establecimientos'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="establecimiento-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
