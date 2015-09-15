<?php
/* @var $this SiteController */

$this->pageTitle = Yii::app()->name;
?>

<h1>Welcome to <i><?php echo CHtml::encode( Yii::app()->name ); ?></i></h1>

<p>Congratulations! You have successfully created your Yii application.</p>

<p>You may change the content of this page by modifying the following two files:</p>
<ul>
    <li>View file: <code><?php echo __FILE__; ?></code></li>
    <li>Layout file: <code><?php echo $this->getLayoutFile( 'main' ); ?></code></li>
</ul>

<?php $this->renderPartial( '//common/youtube', array(
    'id'     => '8Rp-CaIKvQs', // you can get this id by simply looking at video URL
    'width'  => 320,
    'height' => 256,
) );
?>

<?php $this->beginContent( '//decorators/quote', array( 'author' => 'Edward A. Murphy' ) ) ?>
If anything bad can happen, it probably will
<?php $this->endContent() ?>

<?php $this->beginClip( 'footer' ) ?>
This application was built with Yii.
<?php $this->endClip() ?>

<p>For more details on how to further develop this application, please read
    the <a href="http://www.yiiframework.com/doc/">documentation</a>.
    Feel free to ask in the <a href="http://www.yiiframework.com/forum/">forum</a>,
    should you have any questions.</p>
