<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\StartPage;

/**
 * StartPageSearch represents the model behind the search form of `app\models\StartPage`.
 */
class StartPageSearch extends StartPage
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'is_active'], 'integer'],
            [['title','date_create', 'background', 'video', 'go_away_link'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = StartPage::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'date_create' => $this->date_create,
            'is_active' => $this->is_active,
        ]);

        $query->andFilterWhere(['like', 'background', $this->background])
            ->andFilterWhere(['like', 'video', $this->video])
            ->andFilterWhere(['like', 'go_away_link', $this->go_away_link]);

        return $dataProvider;
    }
}
