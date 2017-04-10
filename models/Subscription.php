<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "subscription".
 *
 * @property integer $subscription_id
 * @property string $plan_name
 * @property string $price
 * @property string $duration
 * @property string $created_at
 * @property integer $is_delete
 * @property integer $active
 * @property string $sale_price
 * @property integer $is_sale
 *
 * @property CustomerSubscription[] $customerSubscriptions
 */
class Subscription extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'subscription';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['plan_name', 'price', 'duration', 'sale_price'], 'required'],
            [['created_at'], 'safe'],
            [['is_delete', 'active', 'is_sale'], 'integer'],
            [['plan_name', 'price', 'duration', 'sale_price'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'subscription_id' => 'Subscription ID',
            'plan_name' => 'Plan Name',
            'price' => 'Price',
            'duration' => 'Duration',
            'created_at' => 'Created At',
            'is_delete' => 'Is Delete',
            'active' => 'Active',
            'sale_price' => 'Sale Price',
            'is_sale' => 'Is Sale',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCustomerSubscriptions()
    {
        return $this->hasMany(CustomerSubscription::className(), ['subscription_id' => 'subscription_id']);
    }
}
