<?php

return [
	'title' => '微信图书商城',
	'user_info' => '',
	'domain' => [
		// 'www' => 'http://book_my.imooc.test',
		'www' => '',
		'm' => '/m',
		'web' => '/web'
	],
	'upload' => [
		'avatar' => '/uploads/avatar',
		'brand' => '/uploads/brand',
		'book' => '/uploads/book',
	],
	'weixin' => [
		'appid' => '根据实际情况填写',
		'sk' => '根据实际情况填写',
		'token' => '根据实际情况填写',
		'aeskey' => '根据实际情况填写',
		'pay' => [
			'key' => '根据实际情况填写',
			'mch_id' => '根据实际情况填写',
			'notify_url' => [
				'm' => '/pay/callback'
			]
		]
	]
];
