<?php

/**
 * Created by PhpStorm.
 * User: brigido.alejo
 * Date: 9/10/2015
 * Time: 4:14 AM
 */
class PostController extends CController
{
    function actionAddComment()
    {
        $post = Post::model()->findByPk(10);
        $notifier = new Notifier();
        // attaching event handler
        $post->onNewComment = array($notifier, 'comment');
        // in the real application data should come from $_POST
        $comment = new Comment();
        $comment->author = 'Sam Dark';
        $comment->text = 'Yii events are amazing!';
        // adding comment
        $post->addComment($comment);
    }
}