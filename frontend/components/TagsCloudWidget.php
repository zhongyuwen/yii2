<?php
namespace frontend\components;

use yii\Base\Widget;
use yii\helpers\Html;
use Yii;

class TagsCloudWidget extends Widget
{
    public $tags;

    public function init()
    {
        parent::init();
    }

    public function run()
    {
        $tagString = '';
        $fontStyle = array(
            '6' => 'danger',
            '5' => 'info',
            '4' => 'warninig',
            '3' => 'primary',
            '2' => 'success',
        );

        foreach ($this->tags as $tag=>$weight)
        {
            $tagString .= '<a href="'.Yii::$app->homeUrl.'?r=post/index&PostSearch[tags]='.$tag.'">'.
                ' <h'.$weight.' style="display:inline-block;"><span class="label label-'.$fontStyle[$weight].'">'.$tag.'</span></h'.$weight.'></a>';
        }
        return $tagString;
    }
}