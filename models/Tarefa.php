<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tb_tarefa".
 *
 * @property integer $IdTarefa
 * @property string $NomeTrf
 * @property string $DescTrf
 * @property string $StatusTrf
 * @property string $PrioridadeTrf
 * @property string $ProgressoTrf
 * @property string $AnexoTrf
 * @property string $DuracaoTfr
 * @property integer $Id_Rotina
 *
 * @property TbRegistrotarefa[] $tbRegistrotarefas
 * @property DevlocalTbUsuario[] $idUserFks
 * @property TbRotina $idRotina
 */
class Tarefa extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tb_tarefa';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['NomeTrf', 'DescTrf', 'Id_Rotina'], 'required'],
            [['DescTrf'], 'string'],
            [['DuracaoTfr'], 'safe'],
            [['Id_Rotina'], 'integer'],
            [['NomeTrf'], 'string', 'max' => 200],
            [['StatusTrf', 'PrioridadeTrf', 'ProgressoTrf'], 'string', 'max' => 45],
            [['AnexoTrf'], 'string', 'max' => 1024]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'IdTarefa' => 'Id Tarefa',
            'NomeTrf' => 'Nome Trf',
            'DescTrf' => 'Desc Trf',
            'StatusTrf' => 'Status Trf',
            'PrioridadeTrf' => 'Prioridade Trf',
            'ProgressoTrf' => 'Progresso Trf',
            'AnexoTrf' => 'Anexo Trf',
            'DuracaoTfr' => 'Duracao Tfr',
            'Id_Rotina' => 'Id  Rotina',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTbRegistrotarefas()
    {
        return $this->hasMany(TbRegistrotarefa::className(), ['Id_TarefaFk' => 'IdTarefa']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdUserFks()
    {
        return $this->hasMany(DevlocalTbUsuario::className(), ['IDUSUARIO' => 'Id_UserFk'])->viaTable('tb_registrotarefa', ['Id_TarefaFk' => 'IdTarefa']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdRotina()
    {
        return $this->hasOne(TbRotina::className(), ['IdRotina' => 'Id_Rotina']);
    }
}
