<?php
use yii\helpers\Html;
use yii\widgets\ListView;
?>

<?php 
  echo ListView::widget(array(
    'id' => 'PortletPostsTable',
    'dataProvider'=> $dataProvider,
    'filterModel' => $searchModel,
    'itemView' => 'iviews/_view_story',
    'layout' => '{items}<div class="pull-right">{pager}</div>',
    )
  );
?>
