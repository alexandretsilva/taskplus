<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Tarefa;

/**
 * TarefaSearch represents the model behind the search form about `app\models\Tarefa`.
 */
class TarefaSearch extends Tarefa
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['IdTarefa', 'Id_Rotina'], 'integer'],
            [['NomeTrf', 'DescTrf', 'StatusTrf', 'PrioridadeTrf', 'ProgressoTrf', 'AnexoTrf', 'DuracaoTfr'], 'safe'],
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
        $query = Tarefa::find();

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
            'IdTarefa' => $this->IdTarefa,
            'DuracaoTfr' => $this->DuracaoTfr,
            'Id_Rotina' => $this->Id_Rotina,
        ]);

        $query->andFilterWhere(['like', 'NomeTrf', $this->NomeTrf])
            ->andFilterWhere(['like', 'DescTrf', $this->DescTrf])
            ->andFilterWhere(['like', 'StatusTrf', $this->StatusTrf])
            ->andFilterWhere(['like', 'PrioridadeTrf', $this->PrioridadeTrf])
            ->andFilterWhere(['like', 'ProgressoTrf', $this->ProgressoTrf])
            ->andFilterWhere(['like', 'AnexoTrf', $this->AnexoTrf]);

        return $dataProvider;
    }
}
