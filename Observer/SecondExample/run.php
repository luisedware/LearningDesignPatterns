<?php
// 自动加载
spl_autoload_register('autoload');

function autoload($class)
{
    require '../../' . str_replace('\\', '/', $class) . '.php';
}

use Observer\SecondExample\Login;
use Observer\SecondExample\GeneralLogger;
use Observer\SecondExample\SecurityMonitor;
use Observer\SecondExample\PartnershipTool;

$login = new Login();
$login->notify();
new GeneralLogger($login);
new SecurityMonitor($login);
new PartnershipTool($login);
$login->notify();
