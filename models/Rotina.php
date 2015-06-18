<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tb_rotina".
 *
 * @property integer $IdRotina
 * @property string $NomeRtn
 * @property string $DescricaoRtn
 * @property string $FrequenciaRtn
 * @property string $DuracaoRtn
 * @property string $GrupoRtn
 * @property string $AnexoRtn
 * @property string $ResponsavelRtn
 * @property string $CreatorRtn
 * @property string $CreateDateRtn
 * @property string $LastUpdateRtn
 *
 * @property TbTarefa[] $tbTarefas
 */
class Rotina extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tb_rotina';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['CreateDateRtn', 'LastUpdateRtn'], 'safe'],
            [['NomeRtn'], 'string', 'max' => 80],
            [['DescricaoRtn'], 'string', 'max' => 120],
            [['FrequenciaRtn'], 'string', 'max' => 20],
            [['DuracaoRtn'], 'string', 'max' => 15],
            [['GrupoRtn'], 'string', 'max' => 25],
            [['AnexoRtn'], 'string', 'max' => 255],
            [['ResponsavelRtn', 'CreatorRtn'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
   public function attributeLabels()
    {
        return [
            'IdRotina' => 'Id Rotina',
            'NomeRtn' => 'Rountine Name',
            'DescricaoRtn' => 'Description',
            'FrequenciaRtn' => 'Frenquency',
            'DuracaoRtn' => 'Duration',
            'GrupoRtn' => 'Group', //'\'Refere-se a: NPI, ECO, BOM, Desenvolvimento Local\'',
            'AnexoRtn' => 'Attachments',
            'ResponsavelRtn' => 'In Charge',
            'CreatorRtn' => 'Creator',
            'CreateDateRtn' => 'CreateDate',
            'LastUpdateRtn' => 'LastUpdate',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTbTarefas()
    {
        return $this->hasMany(TbTarefa::className(), ['Id_Rotina' => 'IdRotina']);
    }
}
