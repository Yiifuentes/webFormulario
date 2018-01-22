<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Formulario */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">
        <div class="None">
            <h1>Completa el formulario </h1>
        </div>
    </div>
    <div class="col-md-4"></div>
</div>
<div class="row">
    <div class="col-lg-6">
        <div class="formulario-form none3">

            <?php $form = ActiveForm::begin(); ?>

            <?= $form->field($model, 'nombre')->textInput(['class' => 'None3','placeholder'=>"Tu nombre",'maxlength' => true])->label(false) ?>

            <?= $form->field($model, 'correo')->textInput(['class'=>'None3','placeholder' => "Tu correo"])->label(false)  ?>

<!--            --><?php //echo $form->field($model, 'correo', [
//                    'inputOptions' => ['autofocus' => 'autofocus', 'class' => 'form-control transparent']
//            ])->textInput(['placeholder' => "Enter Your Email"])->input('email')->label(false); ?>

            <?= $form->field($model, 'telefono')->textInput(['class'=>'None3','placeholder' => "telefono"])->label(false) ?>

            <?= $form->field($model, 'mensaje')->textInput(['class'=>'None4','placeholder'=>"mensaje",'maxlength' => true])->label(false) ?>

            <!--    --><?//= $form->field($model, 'id')->textInput() ?>

            <div class="form-group">
                <?= Html::submitButton($model->isNewRecord ? 'Enviar' : 'Update', ['class' => 'Rectangle_5 None3']) ?>
            </div>

            <?php ActiveForm::end(); ?>
        </div>


    </div>
    <div class="col-lg-6">
        <div  class="Layer_2_xA0_Imagen">
        </div>
</div>



