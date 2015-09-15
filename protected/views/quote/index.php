<h2>Quote of the day</h2>
<div id="quote-of-the-day">
    <?php $this->renderPartial( '_quote', array(
        'quote' => $quote,
    ) ) ?>
</div>
<?php echo CHtml::ajaxLink( 'Next quote', array( 'getQuote' ),
    array( 'update' => '#quote-of-the-day' ) ) ?>
<?php
/* @var $this QuoteController */
$this->breadcrumbs = array(
    'Quote',
);
?>
<h1><?php echo $this->id . '/' . $this->action->id; ?></h1>

<p>
    You may change the content of this page by modifying
    the file <tt><?php echo __FILE__; ?></tt>.
</p>
