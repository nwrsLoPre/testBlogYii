<?php

namespace app\components;
use yii\base\Widget;
use yii\helpers\Html;

class Hello extends Widget
{
    public $message;


    public  function  run() {
        $b = HTML::tag("b", $this->message);
        $p = HTML::tag("p", $b);
//        return "Hello";
//    return $this->message;
        return $p;
    }
}

?>