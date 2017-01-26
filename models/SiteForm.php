<?php

namespace app\models;

use yii\base\Model;

class SiteForm extends Model
{
    public $adress;
    public $description;

    public function rules() {
        return [
            ['adress', 'required', 'message' => 'Введите адрес сайта'],
            ['description', 'required', 'message' => 'Введите описание сайта'],
            ['adress', 'url', 'message' => 'Некорректный адрес сайта']
        ];
    }
}
