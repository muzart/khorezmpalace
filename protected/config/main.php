<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'Khorezm Palace',
    'sourceLanguage'=>'en',
    'language'=>'ru',

	// preloading 'log' component
	'preload'=>array('log'),

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
	),

	'modules'=>array(
		// uncomment the following to enable the Gii tool
        'admin',
		'gii'=>array(
			'class'=>'system.gii.GiiModule',
			'password'=>'123',
			// If removed, Gii defaults to localhost only. Edit carefully to taste.
			'ipFilters'=>array('127.0.0.1','::1'),
		),

	),

	// application components
	'components'=>array(
		'authManager' => array(
			// Будем использовать свой менеджер авторизации
			'class' => 'PhpAuthManager',
			// Роль по умолчанию. Все, кто не админы, модераторы и юзеры — гости.
			'defaultRoles' => array('guest'),
		),
		'user'=>array(
			// enable cookie-based authentication
			'class' => 'WebUser',
			'allowAutoLogin'=>true,
		),
		'mailer' => array(
			'class' => 'application.extensions.mailer.EMailer',
			'pathViews' => 'application.views.email',
			'pathLayouts' => 'application.views.layouts',
			'testMode' => false,
			'layout' => 'email',
		),
		// uncomment the following to enable URLs in path-format
		'request'=>array(
				'class'=>'DLanguageHttpRequest',
		),
		'urlManager'=>array(
            'class'=>'DLanguageUrlManager',
			'urlFormat'=>'path',
            'showScriptName'=>false,
			'rules'=>array(
                '/'=>array('site/index'),
				'auth'=>'site/login',
                'about'=>array('site/page',array('view'=>'about')),
                'services'=>array('services/index'),
                'contact'=>array('site/contact'),
				'category/<hash:[\w\W]+>'=>'category/view',
				'content/<hash:[\w\W]+>'=>'content/view',
				'<controller:\w+>/<id:\d+>'=>'<controller>/view',
				'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
				'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
			),
		),
		'db'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=khorezmpalace',
			'emulatePrepare' => true,
			'username' => 'root',
			'password' => '',
			'charset' => 'utf8',
		),
		'errorHandler'=>array(
			// use 'site/error' action to display errors
			'errorAction'=>'site/error',
		),
		'log'=>array(
			'class'=>'CLogRouter',
			'routes'=>array(
				array(
					'class'=>'CFileLogRoute',
					'levels'=>'error, warning',
				),
				// uncomment the following to show log messages on web pages
				/*
				array(
					'class'=>'CWebLogRoute',
				),
				*/
			),
		),
	),

	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params'=>array(
		// this is used in contact page
        'translatedLanguages'=>array(
            'uz'=>"Uz",
            'ru'=>'Ру',
            'en'=>'En',
        ),
		'address'=>array(
			'uz'=>'Al-Beruniy ko\'chasi, 2-uy',
			'ru'=>'ул. Ал-Беруни, дом 2',
			'en'=>'Al-Beruni street, 2',
		),
		'hotel'=>array(
			'uz'=>'Xorazm Palas Mehmonxonasi',
			'ru'=>'Гостиница Khorezm Palace',
			'en'=>'Khorezm Palace Hotel',
		),
		'city'=>array(
			'uz'=>'Urganch, Xorazm',
			'ru'=>'Ургенч, Хорезм',
			'en'=>'Urgench, Khorezm',
		),
		'salt'=>'dsh4Bus78&n*JHVBT%bsak',
		'tel'=>'(998) 62 224 99 99',
		'fax'=>'(998) 62 224 93 08',
        'defaultLanguage'=>'ru',
		'adminEmail'=>'respect.net@bk.ru',
		'smtp' => array(
			"host" => "smtp.googlemail.com:465",
			"debug" => 0,
			"auth" => true,
			"port" => 2525,
			"username" => "khpmailer@gmail.com",
			"password" => "sender159!@#125",
			"replyto" => "no-reply@khorezmpalace.uz",
			"fromname" => "Khorezm Palace",
			"from" => "reservations@khorezmpalace.uz",
			"charset" => "utf-8",
		)
	),
);