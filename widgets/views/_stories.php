<?php
use yii\helpers\Html;
use yii\widgets\ListView;
use yii\widgets\Pjax;
?>

<h2>Recent Stories...</h2>

<?php 
Pjax::begin();
  echo ListView::widget(array(
    'id' => 'PortletPostsTable',
    'dataProvider'=> $dataProvider,
    'itemView' => 'iviews/_view_story',
    'layout' => '{items}{pager}',
    )
  );
Pjax::end();
?>
