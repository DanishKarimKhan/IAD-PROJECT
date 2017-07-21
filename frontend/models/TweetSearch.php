<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Tweet;

/**
 * TweetSearch represents the model behind the search form about `frontend\models\Tweet`.
 */
class TweetSearch extends Tweet
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['tweet_id', 'tweet_time', 'tweet_user'], 'integer'],
            [['tweet_content', 'tweet_image'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
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
        $query = Tweet::find();

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
            'tweet_id' => $this->tweet_id,
            'tweet_time' => $this->tweet_time,
            'tweet_user' => $this->tweet_user,
        ]);

        $query->andFilterWhere(['like', 'tweet_content', $this->tweet_content])
            ->andFilterWhere(['like', 'tweet_image', $this->tweet_image]);

        return $dataProvider;
    }
}
