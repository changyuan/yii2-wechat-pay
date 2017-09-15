wechat pay sdk for yii2

[reference](https://pay.weixin.qq.com/wiki/doc/api/jsapi.php?chapter=7_1)

Installation
------------

```
"changyuan/yii2-wechat-pay": "*"
```

Configure
-----

To use this extension, you have to configure the Connection class in your application configuration:

```php
'components' => [
	'wxPay' => [
		'class' => 'changyuan\wechatpay\WxPayConfig',
		'app_id' => '',
		'mch_id' => '',
		'app_key' => '',
		'app_secret' => '',
	],
]
```

Usage
-----
