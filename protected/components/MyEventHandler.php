<?php

/**
 * Created by PhpStorm.
 * User: brigido.alejo
 * Date: 9/10/2015
 * Time: 3:57 AM
 */
class MyEventHandler
{
    static function handleMissingTranslation( $event )
    {
        // event class for this event is CMissingTranslationEvent
        // so we can get some info about the message
        $text = implode( "\n", array(
            'Language: ' . $event->language,
            'Category:' . $event->category,
            'Message:' . $event->message,
        ) );
        // sending email
        mail( Yii::app()->params[ 'adminEmail' ], 'Missing translation', $text );
    }
}