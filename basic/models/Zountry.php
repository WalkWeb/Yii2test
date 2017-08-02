<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "zountry".
 *
 * @property string $code
 * @property string $name
 * @property int $population
 */
class Zountry extends ActiveRecord
{
    /**
     * Указываем имя таблицы
     *
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'zountry';
    }

    /**
     * Требования к данным
     *
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['code', 'name'], 'required'],
            [['population'], 'integer'],
            [['code'], 'string', 'max' => 2],
            [['name'], 'string', 'max' => 52],
        ];
    }

    /**
     * Метки атрибутов
     *
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'code' => 'Code',
            'name' => 'Name',
            'population' => 'Population',
        ];
    }
}
