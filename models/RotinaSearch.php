<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Rotina;

/**
 * RotinaSearch represents the model behind the search form about `app\models\Rotina`.
 */
class RotinaSearch extends Rotina
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['IdRotina'], 'integer'],
            [['NomeRtn', 'DescricaoRtn', 'FrequenciaRtn', 'DuracaoRtn', 'GrupoRtn', 'AnexoRtn', 'ResponsavelRtn', 'CreatorRtn', 'CreateDateRtn', 'LastUpdateRtn'], 'safe'],
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
        $query = Rotina::find();

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
            'IdRotina' => $this->IdRotina,
            'CreateDateRtn' => $this->CreateDateRtn,
            'LastUpdateRtn' => $this->LastUpdateRtn,
        ]);

        $query->andFilterWhere(['like', 'NomeRtn', $this->NomeRtn])
            ->andFilterWhere(['like', 'DescricaoRtn', $this->DescricaoRtn])
            ->andFilterWhere(['like', 'FrequenciaRtn', $this->FrequenciaRtn])
            ->andFilterWhere(['like', 'DuracaoRtn', $this->DuracaoRtn])
            ->andFilterWhere(['like', 'GrupoRtn', $this->GrupoRtn])
            ->andFilterWhere(['like', 'AnexoRtn', $this->AnexoRtn])
            ->andFilterWhere(['like', 'ResponsavelRtn', $this->ResponsavelRtn])
            ->andFilterWhere(['like', 'CreatorRtn', $this->CreatorRtn]);

        return $dataProvider;
    }
}
