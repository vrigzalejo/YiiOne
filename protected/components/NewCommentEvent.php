<?php

/**
 * Created by PhpStorm.
 * User: brigido.alejo
 * Date: 9/10/2015
 * Time: 3:59 AM
 */
class NewCommentEvent extends CModelEvent
{
    public $comment;
    public $post;
}