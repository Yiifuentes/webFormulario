<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Formulario */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Formularios', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="formulario-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'esta seguro de Eliminar este elemento?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'nombre',
            'correo',
            'telefono',
            'mensaje',
            'id',
        ],
    ]) ?>

</div>
