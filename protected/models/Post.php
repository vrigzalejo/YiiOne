<?php

/**
 * Created by PhpStorm.
 * User: brigido.alejo
 * Date: 9/10/2015
 * Time: 4:02 AM
 */
class Post extends CActiveRecord
{
    // custom method for adding a comment
    // to current post
    function addComment(Comment $comment){
        $comment->post_id = $this->id;
        // creating event class instance
        $event = new NewCommentEvent($this);
        $event->post = $this;
        $event->comment = $comment;
        // triggering event
        $this->onNewComment($event);
        return $event->isValid;
    }

    // defining onNewComment event
    public function onNewComment($event) {
        // Event is actually triggered here. This way we can use
        // onNewComment method instead of raiseEvent.
        $this->raiseEvent('onNewComment', $event);
    }
}