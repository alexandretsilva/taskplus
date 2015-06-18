<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\RegistroTarefa;

/**
 * RegistroTarefaSearch represents the model behind the search form about `app\models\RegistroTarefa`.
 */
class RegistroTarefaSearch extends RegistroTarefa
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Id_TarefaFk', 'Id_UserFk'], 'integer'],
            [['Comment', 'Lembrete', 'StartDate', 'EndDate', 'Creator', 'CreateDate', 'Modifydate'], 'safe'],
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
        $query = RegistroTarefa::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'Id_TarefaFk' => $this->Id_TarefaFk,
            'Id_UserFk' => $this->Id_UserFk,
            'Lembrete' => $this->Lembrete,
            'StartDate' => $this->StartDate,
            'EndDate' => $this->EndDate,
            'CreateDate' => $this->CreateDate,
            'Modifydate' => $this->Modifydate,
        ]);

        $query->andFilterWhere(['like', 'Comment', $this->Comment])
            ->andFilterWhere(['like', 'Creator', $this->Creator]);

        return $dataProvider;
    }
}
