<?php
// change the following paths if necessary
$yii = dirname( __FILE__ ) . '/framework/yii.php';

// remove the following lines when in production mode
defined( 'YII_DEBUG' ) or define( 'YII_DEBUG', true );
// specify how many levels of call stack should be shown in each log message
defined( 'YII_TRACE_LEVEL' ) or define( 'YII_TRACE_LEVEL', 3 );

require_once( $yii );
$config = CMap::mergeArray(
    require dirname( __FILE__ ) . '/protected/config/main.php',
    require dirname( __FILE__ ) . '/protected/config/main-local.php'
);

//Yii::createWebApplication($config)->run();
$app = Yii::createWebApplication( $config );
/*
var_dump(Yii::app()->db);
$request = Yii::app()->request;
echo '<br /><br />';
$cookie = $request->cookies['test'];
if($cookie) {
    // printing cookie value
    echo $cookie->value;
} else {
    $cookie = new CHttpCookie('test', 'I am a cookie!');
    $request->cookies['test'] = $cookie;
}*/



// attaching a handler to application start
/*Yii::app()->onBeginRequest = function ( $event ) {
    // starting output buffering with gzip handler
    return ob_start( 'ob_gzhandler' );
};
// attaching a handler to application end
Yii::app()->onEndRequest = function ( $event ) {
    // releasing output buffer
    return ob_end_flush();
};*/
$app->run();

