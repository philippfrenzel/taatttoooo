<?php
namespace app\widgets;

use Yii;
use yii\helpers\Html;

use app\models\StorySearch;

class PortletUserStory extends \frenzelgmbh\appcommon\widgets\Portlet
{
  /**
   * the title which would be displayed if this is an admin portlet
   * @var string
   */
  public $title='Story';

  public $maxResults = 5;

  protected function renderContent()
  {
    $searchModel = new StorySearch;
    $dataProvider = $searchModel->search(Yii::$app->request->getQueryParams());

    echo $this->render('@app/widgets/views/_stories', [
        'dataProvider' => $dataProvider
    ]);
  }

}
