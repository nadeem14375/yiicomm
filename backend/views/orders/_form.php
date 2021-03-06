<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Orders */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="orders-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'CustomerId')->textInput() ?>

    <?= $form->field($model, 'CampaignId')->textInput() ?>

    <?= $form->field($model, 'PaymentId')->textInput() ?>

    <?= $form->field($model, 'OrderStatusId')->textInput() ?>

    <?= $form->field($model, 'CustomerNote')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'InvoiceAddressText')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'InvoicePerson')->textInput(['maxlength' => 500]) ?>

    <?= $form->field($model, 'InvoiceTaxNumber')->textInput(['maxlength' => 250]) ?>

    <?= $form->field($model, 'InvoiceTaxOffice')->textInput(['maxlength' => 250]) ?>

    <?= $form->field($model, 'InvoicedOn')->textInput() ?>

    <?= $form->field($model, 'PaidAmount')->textInput(['maxlength' => 18]) ?>

    <?= $form->field($model, 'TotalDiscountAmount')->textInput(['maxlength' => 18]) ?>

    <?= $form->field($model, 'TaxAmount')->textInput(['maxlength' => 18]) ?>

    <?= $form->field($model, 'Comment')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'created_by')->textInput() ?>

    <?= $form->field($model, 'LastUpdatedBy')->textInput() ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <?= $form->field($model, 'updated_at')->textInput() ?>

    <?= $form->field($model, 'deleted_at')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
