<?php

/**
 * Created by PhpStorm.
 * User: brigido.alejo
 * Date: 9/15/2015
 * Time: 3:07 AM
 */
class DeleteAction extends CAction
{
    public $pk         = 'id';
    public $redirectTo = 'index';
    public $modelClass;

    function run()
    {
        if( empty( $_GET[ $this->pk ] ) )
            throw new CHttpException( 404 );

        $model = CActiveRecord::model( $this->modelClass )
            ->findByPk( $_GET[ $this->pk ] );

        if( !$model )
            throw new CHttpException( 404 );

        if( $model->delete() )
            $this->redirect( $this->redirectTo );

        throw new CHttpException( 500 );
    }
}