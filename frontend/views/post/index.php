<?php

use yii\helpers\Html;
use yii\widgets\ListView;
?>

<div class="container">
    <div class="row">
        <div class="col-md-9">
            <div class="breadcrumb">
                <li><a href="<?= Yii::$app->homeUrl;?>">首页</a></li>
                <li>文章列表</li>
            </div>
            <?= ListView::widget([
                    'id' => 'postList',
                    'dataProvider' => $dataProvider,
                    'itemView' => '_listitem',
                    'layout' => '{items} {pager}',
                    'pager' => [
                        'maxButtonCount' => 10,
                        'nextPageLabel' => Yii::t('app', '下一页'),
                        'prevPageLabel' => Yii::t('app', '上一页'),
                    ],
                ])
            ?>
        </div>
        <div class="col-md-3">
            <div class="searchbox">
                <ul class="list-group">
                    <li class="list-group-item"><span class="glyphicon glyphicon-search" aria-hidden="true"></span>查找文章</li>
                    <li class="list-group-item"></span>搜索框</li>
                </ul>
            </div>

            <div class="tagCloud">
                <ul class="list-group">
                    <li class="list-group-item"><span class="glyphicon glyphicon-tags" aria-hidden="true"></span>标签云</li>
                    <li class="list-group-item"></span>标签云</li>
                </ul>
            </div>

            <div class="searchbox">
                <ul class="list-group">
                    <li class="list-group-item"><span class="glyphicon glyphicon-search" aria-hidden="true"></span>最新回复</li>
                    <li class="list-group-item"></span>最新回复</li>
                </ul>
            </div>

        </div>
    </div>
</div>