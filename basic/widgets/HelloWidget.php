<?php

namespace app\widgets;

use yii\base\Widget;
use yii\helpers\Html;

class HelloWidget extends Widget
{
    public $code;

    public function init()
    {
        parent::init();
        $this->code =  '<script src="//f.sravni.ru/f/apps/build/widgets/sravni-widgets.js"></script>
                        <sravni-micro-widget type="mantravel"theme="sravni_dark" logo="false" size="300" partner="711.ru"><link href="https://fonts.googleapis.com/css?family=Open+Sans:300" rel="stylesheet"><style>sravni-micro-widget{text-align: center;display: block;position:relative}a.sravni-dl{font: 300 14px \'Open Sans\', sans-serif; max-width:300px; display:inline-block; color: #a7a7a7; text-decoration: none;border-bottom:1px solid #a7a7a7;}</style>
                        <a href="https://www.sravni.ru/vzr/" target="_blank" class="sravni-dl">Сделано в Сравни.ру</a></sravni-micro-widget>';
    }

    public function run()
    {
        return Html::decode($this->code);
    }
}