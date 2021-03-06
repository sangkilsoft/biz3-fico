<?php

namespace app\models\fico;

use Yii;

/**
 * This is the model class for table "gl_header".
 *
 * @property integer $id
 * @property string $number
 * @property string $date
 * @property integer $periode_id
 * @property integer $branch_id
 * @property integer $reff_type
 * @property integer $reff_id
 * @property string $description
 * @property integer $status
 * @property string $created_at
 * @property integer $created_by
 * @property string $updated_at
 * @property integer $updated_by
 *
 * @property GlDetail[] $glDetails
 * @property AccPeriode $periode
 */
class GlHeader extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'gl_header';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['number', 'date', 'periode_id', 'branch_id', 'reff_type', 'description', 'status', 'created_at', 'updated_at'], 'required'],
            [['date', 'created_at', 'updated_at'], 'safe'],
            [['periode_id', 'branch_id', 'reff_type', 'reff_id', 'status', 'created_by', 'updated_by'], 'integer'],
            [['number'], 'string', 'max' => 16],
            [['description'], 'string', 'max' => 255],
            [['periode_id'], 'exist', 'skipOnError' => true, 'targetClass' => AccPeriode::className(), 'targetAttribute' => ['periode_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'number' => 'Number',
            'date' => 'Date',
            'periode_id' => 'Periode ID',
            'branch_id' => 'Branch ID',
            'reff_type' => 'Reff Type',
            'reff_id' => 'Reff ID',
            'description' => 'Description',
            'status' => 'Status',
            'created_at' => 'Created At',
            'created_by' => 'Created By',
            'updated_at' => 'Updated At',
            'updated_by' => 'Updated By',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGlDetails()
    {
        return $this->hasMany(GlDetail::className(), ['header_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPeriode()
    {
        return $this->hasOne(AccPeriode::className(), ['id' => 'periode_id']);
    }
}
