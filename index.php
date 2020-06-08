<?php

use AntService\Src\OutPut;

require_once "vendor/autoload.php";

$module = str_replace('/', '', $_SERVER['PATH_INFO']);

$moduleClasas = useModule($module,$_POST);

if(is_callable([$module, 'main'])) OutPut::success($module::main());

OutPut::error('VERIFY_MODE_FAIL', '验证模块类型失败,该模块[' . $module . ']没有实现入口函数main()');