<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Tickets;

/**
 * TicketsSearch represents the model behind the search form about `app\models\Tickets`.
 */
class TicketsSearch extends Tickets
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ticket_id', 'image', 'employee_id'], 'integer'],
            [['ticket_title', 'ticket_description', 'status', 'date'], 'safe'],
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
        $query = Tickets::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'ticket_id' => $this->ticket_id,
            'image' => $this->image,
            'date' => $this->date,
            'employee_id' => $this->employee_id,
        ]);

        $query->andFilterWhere(['like', 'ticket_title', $this->ticket_title])
            ->andFilterWhere(['like', 'ticket_description', $this->ticket_description])
            ->andFilterWhere(['like', 'status', $this->status]);

        return $dataProvider;
    }
}
