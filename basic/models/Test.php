<?php

namespace app\models;

use yii\db\ActiveRecord;

class Test extends ActiveRecord
{
    public static function tableName()
    {
        return 'sountry';
    }

    public function rules()
    {
        return [
            [['code', 'name'], 'required'],
            [['population'], 'integer'],
            [['code'], 'string', 'max' => 2],
            [['name'], 'string', 'max' => 52],
        ];
    }

    public function attributeLabels()
    {
        return [
            'code' => 'Код',
            'name' => 'Название',
            'population' => 'Население',
            'id' => 'id',
        ];
    }

}











