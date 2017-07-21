<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\Tweet */

$this->title = $model->tweet_id;
$this->params['breadcrumbs'][] = ['label' => 'Tweets', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tweet-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->tweet_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->tweet_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'tweet_id',
            'tweet_content:ntext',
            'tweet_time:datetime',
            'tweet_user',
            'tweet_image',
        ],
    ]) ?>

</div>
