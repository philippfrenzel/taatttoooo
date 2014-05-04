<?php
use yii\helpers\Html;
use yii\widgets\ListView;
?>

<h2>Recent Stories...</h2>

<?php 
  echo ListView::widget(array(
    'id' => 'PortletPostsTable',
    'dataProvider'=> $dataProvider,
    'itemView' => 'iviews/_view_story',
    'layout' => '{items}<div class="pull-right">{pager}</div>',
    )
  );
?>
