<?php
/**
 *
 *  url为/必须放在最后，不然二级目录的命名空间路由无效
 */
return [
	'admin' => [
	    'namespace' => 'Admin',
		'prefix' => 'admin',
	],
	'frontend' => [
	    'namespace' => 'Frontend',
		'prefix' => '/',
	]
];
