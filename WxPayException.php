<?php
namespace changyuan\wechatpay;

use yii\base\Exception;

class WxPayException extends Exception
{
    public function errorMessage()
    {
        return $this->getMessage();
    }
}
