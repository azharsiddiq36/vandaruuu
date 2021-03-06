<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Content */

$this->title = $model->content_judul;
$this->params['breadcrumbs'][] = ['label' => 'Content', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="content-view">

    <h1><?php // Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->content_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->content_id], [
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
            'content_id',
            'content_judul:ntext',
            'content_isi:ntext',
            'created_by',
            'created_date',
            'updated_by',
            'updated_date',
            'status',
            [
                'attribute' => 'file',
                'label' => 'Foto Sampul',
                'format' => 'html',    
                'value' => function ($data) {
                    return Html::img(Yii::getAlias('@web').'/'. $data['file'],
                        ['width' => '100px']);
                },
            ],
        ],
    ]) ?>

</div>
