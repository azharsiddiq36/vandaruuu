<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Kamar */

$this->title = 'Update Kamar: ' . $model->kamar_id;
$this->params['breadcrumbs'][] = ['label' => 'Kamars', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kamar_id, 'url' => ['view', 'id' => $model->kamar_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="kamar-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
