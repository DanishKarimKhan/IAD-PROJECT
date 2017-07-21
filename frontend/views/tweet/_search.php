<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\TweetSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tweet-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'tweet_id') ?>

    <?= $form->field($model, 'tweet_content') ?>

    <?= $form->field($model, 'tweet_time') ?>

    <?= $form->field($model, 'tweet_user') ?>

    <?= $form->field($model, 'tweet_image') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
