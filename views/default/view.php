<?php

use yii\helpers\Html;

$this->title = '查看 - '. $model->title;
$this->params['breadcrumbs'][] = ['label' => '菜单列表', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="menu-view">
    <h3 class="lte-hide-title"><?= Html::encode($this->title) ?></h3>
    <div class="panel panel-default">
        <div class="panel-body">
        <?= Html::a('添加', ['create', 'id' => $model->id], ['class' => 'btn btn-sm btn-primary']) ?>
        <?= Html::a('更新', ['update', 'id' => $model->id], ['class' => 'btn btn-sm btn-primary']) ?>
        <?= Html::a('删除', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-sm btn-default',
            'data' => [
                'confirm' => '您确定删除吗？这是不可逆操作',
                'method' => 'post',
            ],
        ]) ?>
        <?= Html::a('返回', ['index'], ['class' => 'btn btn-sm btn-default']) ?>
        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-body">
            <h3><?= $model->title ?></h3>
            <p>创建时间：<?= date("Y-m-d H:i:s", $model->created_at)?></p>
        </div>
    </div>

</div>
