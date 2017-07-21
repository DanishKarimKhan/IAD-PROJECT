<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Tweet */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tweet-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'tweet_content')->textarea(['rows' => 6]) ?>

    <!-- <?= $form->field($model, 'tweet_time')->textInput() ?> -->

    <!-- <?= $form->field($model, 'tweet_user')->textInput() ?> -->

    <?= $form->field($model, 'tweet_image')->fileInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
