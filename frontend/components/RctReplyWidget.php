<?php
namespace frontend\components;

use yii\Base\Widget;
use yii\helpers\Html;
use Yii;

class RctReplyWidget extends Widget
{
    public $recentComments;

    public function init()
    {
        parent::init();
    }

    public function run()
    {
        $commentString = '';

        foreach ($this->recentComments as $comment)
        {
            $commentString .= '<div class="post">'.
                                '<div class="title">'.
                                '<p style="color:#777;font-style:italic;">'.
                                nl2br($comment->content).'</p>'.
                                '<p class="text"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>'.Html::encode($comment->user->username).'</p>'.
                                '<p style="font-size:8pt;color:blue">《<a href="'.$comment->post->url.'">'.Html::encode($comment->post->title).'</a>》</p>'. 
                                '<hr></div></div>';
        }
        return $commentString;
    }
}
