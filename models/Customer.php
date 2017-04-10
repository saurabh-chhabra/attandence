<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "customer".
 *
 * @property integer $customer_id
 * @property string $firstname
 * @property string $lastname
 * @property string $email
 * @property string $phone
 * @property string $mobile
 * @property string $created_at
 * @property integer $is_delete
 * @property integer $is_active
 *
 * @property CustomerSubscription[] $customerSubscriptions
 */
class Customer extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'customer';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['firstname', 'lastname', 'email', 'phone', 'mobile'], 'required'],
            [['created_at'], 'safe'],
            [['is_delete', 'is_active'], 'integer'],
            [['firstname', 'lastname', 'email'], 'string', 'max' => 255],
            [['phone', 'mobile'], 'string', 'max' => 15],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'customer_id' => 'Customer ID',
            'firstname' => 'Firstname',
            'lastname' => 'Lastname',
            'email' => 'Email',
            'phone' => 'Phone',
            'mobile' => 'Mobile',
            'created_at' => 'Created At',
            'is_delete' => 'Is Delete',
            'is_active' => 'Is Active',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCustomerSubscriptions()
    {
        return $this->hasMany(CustomerSubscription::className(), ['customer_id' => 'customer_id']);
    }
}
