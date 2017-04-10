<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "rolltype".
 *
 * @property integer $roll_id
 * @property string $type
 *
 * @property User[] $users
 */
class Rolltype extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'rolltype';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['type'], 'required'],
            [['type'], 'string', 'max' => 45],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'roll_id' => 'Roll ID',
            'type' => 'Type',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUsers()
    {
        return $this->hasMany(User::className(), ['roll_id' => 'roll_id']);
    }
}
