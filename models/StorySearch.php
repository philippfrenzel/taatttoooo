<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Story;

/**
 * StorySearch represents the model behind the search form about `app\models\Story`.
 */
class StorySearch extends Story
{
    public function rules()
    {
        return [
            [['id', 'user_id', 'time_deleted', 'time_created'], 'integer'],
            [['content_tattoo', 'content_past', 'content_present', 'content_future', 'uId'], 'safe'],
        ];
    }

    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    public function search($params)
    {
        $query = Story::find()->orderBy(['time_created'=>SORT_DESC]);

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => [
                'pageSize' => 4,
            ],
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'user_id' => $this->user_id,
            'time_deleted' => $this->time_deleted,
            'time_created' => $this->time_created,
        ]);

        $query->andFilterWhere(['like', 'content_tattoo', $this->content_tattoo])
            ->andFilterWhere(['like', 'content_past', $this->content_past])
            ->andFilterWhere(['like', 'content_present', $this->content_present])
            ->andFilterWhere(['like', 'content_future', $this->content_future])
            ->andFilterWhere(['like', 'uId', $this->uId]);

        //$query->andFilterWhere(['not','content_tattoo', '']);

        return $dataProvider;
    }
}
