<?php
spl_autoload_register('autoload');
function autoload($class)
{
    require '../../../' . str_replace('\\', '/', $class) . '.php';
}

use CreationalDesignPatterns\Factory\HeadFirst\MegaCommsManager;

$mega = new MegaCommsManager();
$encoder = $mega->getApptEncoder();
echo $encoder->encode();
