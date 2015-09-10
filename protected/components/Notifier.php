<?php

/**
 * Created by PhpStorm.
 * User: brigido.alejo
 * Date: 9/10/2015
 * Time: 4:11 AM
 */
class Notifier
{
    function comment( $event )
    {
        $text = "There was new comment from {$event->comment->author} on post {$event->post->title}";
        mail( Yii::app()->params[ 'adminEmail' ], 'New comment', $text );
    }
}