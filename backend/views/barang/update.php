<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Barang */

$this->title = 'Update Barang: ' . $model->barang_id;
$this->params['breadcrumbs'][] = ['label' => 'Barangs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->barang_id, 'url' => ['view', 'id' => $model->barang_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="barang-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
