<p><?php echo $sort->link( 'id' ) ?></p>
<p><?php echo $sort->link( 'title' ) ?></p>
<ol>
    <?php foreach( $models as $model ) : ?>
        <li>
            <h2><?php echo $model->id ?> - <?php echo $model->title ?></h2>
        </li>
    <?php endforeach ?>
</ol>

<?php $this->widget( 'CLinkPager', array(
    'pages' => $pages,
) );