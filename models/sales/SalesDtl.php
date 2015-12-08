<?php

namespace app\models\sales;

use Yii;

/**
 * This is the model class for table "sales_dtl".
 *
 * @property integer $sales_id
 * @property integer $product_id
 * @property integer $uom_id
 * @property double $qty
 * @property double $price
 * @property double $qty_release
 * @property double $cogs
 * @property double $discount
 * @property double $tax
 *
 * @property Sales $sales
 */
class SalesDtl extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'sales_dtl';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['sales_id', 'product_id', 'uom_id', 'qty', 'price', 'cogs'], 'required'],
            [['sales_id', 'product_id', 'uom_id'], 'integer'],
            [['qty', 'price', 'qty_release', 'cogs', 'discount', 'tax'], 'number'],
            [['sales_id'], 'exist', 'skipOnError' => true, 'targetClass' => Sales::className(), 'targetAttribute' => ['sales_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'sales_id' => 'Sales ID',
            'product_id' => 'Product ID',
            'uom_id' => 'Uom ID',
            'qty' => 'Qty',
            'price' => 'Price',
            'qty_release' => 'Qty Release',
            'cogs' => 'Cogs',
            'discount' => 'Discount',
            'tax' => 'Tax',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSales()
    {
        return $this->hasOne(Sales::className(), ['id' => 'sales_id']);
    }
}
