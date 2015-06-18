<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tb_registrotarefa".
 *
 * @property integer $Id_TarefaFk
 * @property integer $Id_UserFk
 * @property string $Comment
 * @property string $Lembrete
 * @property string $StartDate
 * @property string $EndDate
 * @property string $Creator
 * @property string $CreateDate
 * @property string $Modifydate
 *
 * @property DevlocalTbUsuario $idUserFk
 * @property TbTarefa $idTarefaFk
 */
class RegistroTarefa extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tb_registrotarefa';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Id_TarefaFk', 'Id_UserFk'], 'required'],
            [['Id_TarefaFk', 'Id_UserFk'], 'integer'],
            [['Lembrete', 'StartDate', 'EndDate', 'CreateDate', 'Modifydate'], 'safe'],
            [['Comment'], 'string', 'max' => 1024],
            [['Creator'], 'string', 'max' => 145]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Id_TarefaFk' => 'Id  Tarefa Fk',
            'Id_UserFk' => 'Id  User Fk',
            'Comment' => 'Comment',
            'Lembrete' => 'Lembrete',
            'StartDate' => 'Start Date',
            'EndDate' => 'End Date',
            'Creator' => 'Creator',
            'CreateDate' => 'Create Date',
            'Modifydate' => 'Modifydate',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdUserFk()
    {
        return $this->hasOne(DevlocalTbUsuario::className(), ['IDUSUARIO' => 'Id_UserFk']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdTarefaFk()
    {
        return $this->hasOne(TbTarefa::className(), ['IdTarefa' => 'Id_TarefaFk']);
    }
}
