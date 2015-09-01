<?php

namespace app\models\fico;

use Yii;

/**
 * This is the model class for table "account".
 *
 * @property integer $id_acc
 * @property string $cd_acc
 * @property string $nm_acc
 * @property string $acc_normal
 * @property integer $parent
 * @property integer $level
 * @property string $create_date
 * @property string $update_by
 * @property string $create_by
 * @property string $update_date
 * @property double $balance
 */
class Account extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'account';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['cd_acc', 'nm_acc', 'acc_normal', 'level', 'create_date', 'update_by', 'create_by', 'update_date'], 'required'],
            [['parent', 'level'], 'integer'],
            [['create_date', 'update_date'], 'safe'],
            [['balance'], 'number'],
            [['cd_acc'], 'string', 'max' => 13],
            [['nm_acc'], 'string', 'max' => 30],
            [['acc_normal'], 'string', 'max' => 1],
            [['update_by', 'create_by'], 'string', 'max' => 10],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_acc' => 'Id Acc',
            'cd_acc' => 'Cd Acc',
            'nm_acc' => 'Nm Acc',
            'acc_normal' => 'Acc Normal',
            'parent' => 'Parent',
            'level' => 'Level',
            'create_date' => 'Create Date',
            'update_by' => 'Update By',
            'create_by' => 'Create By',
            'update_date' => 'Update Date',
            'balance' => 'Balance',
        ];
    }
}
