<?php
use yii\helpers\Html;
use yii\widgets\ListView;
?>

<?php 
  echo ListView::widget(array(
    'id' => 'PortletPostsTable',
    'dataProvider'=> $dataProvider,
    'itemView' => 'iviews/_view_story',
    'layout' => '{items}{pager}',
    )
  );
?>
