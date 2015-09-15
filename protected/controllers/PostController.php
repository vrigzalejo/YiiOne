<?php

/**
 * Created by PhpStorm.
 * User: brigido.alejo
 * Date: 9/10/2015
 * Time: 4:14 AM
 */
class PostController extends CController
{

    function actionIndex()
    {
        /*$posts = Post::model()->findAll();
        $this->render( 'index', array(
            'posts' => $posts,
        ) );*/
        $criteria = new CDbCriteria();
        $count    = Post::model()->count( $criteria );
        $pages    = new CPagination( $count );

        // elements per page
        $pages->pageSize = 5;
        $pages->applyLimit( $criteria );

        // sorting
        $sort             = new CSort( 'Post' );
        $sort->attributes = array(
            'id', 'title',
        );
        $sort->applyOrder( $criteria );

        $models = Post::model()->findAll( $criteria );

        $this->render( 'index', array(
            'models' => $models,
            'pages'  => $pages,
            'sort'   => $sort,
        ) );
    }

    function actions()
    {
        return array(
            'delete' => array(
                'class'      => 'DeleteAction',
                'modelClass' => 'Post',
            ),
        );
    }


    /*
     * Page 59
    function actionDelete($id)
    {
        $post = Post::model()->findByPk($id);
        if(!$post)
            throw new CHttpException(404);

        if($post->delete())
            $this-redirect('post/index');

        throw new CHttpException(500);
    }*/

    function actionAddComment()
    {
        $post     = Post::model()->findByPk( 10 );
        $notifier = new Notifier();
        // attaching event handler
        $post->onNewComment = array( $notifier, 'comment' );
        // in the real application data should come from $_POST
        $comment         = new Comment();
        $comment->author = 'Sam Dark';
        $comment->text   = 'Yii events are amazing!';
        // adding comment
        $post->addComment( $comment );
    }

    function actionView()
    {
        if( !isset( $_GET[ 'id' ] ) )
            // If there is no post ID supplied, request is
            // definitely wrong.
            // According to HTTP specification its code is 400.
            throw new CHttpException( 400 );
        // Finding a post by its ID
        $post = Post::model()->findByPk( $_GET[ 'id' ] );
        if( !$post )
            // If there is no post with ID specified we'll
            // generate HTTP response with code 404 Not Found.
            throw new CHttpException( 404 );
        // If everything is OK, render a post
        $this->render( 'post', array( 'model' => $post ) );
    }
}