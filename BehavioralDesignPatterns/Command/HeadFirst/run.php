<?php
spl_autoload_register('autoload');

function autoload($class)
{
    require '../../../' . str_replace('\\', '/', $class) . '.php';
}

use BehavioralDesignPatterns\Command\HeadFirst\{
    Light,
    Stereo,
    LightOnCommand,
    LightOffCommand,
    StereoOnWithCDCommand,
    StereoOffCommand,
    RemoteControl,
    MacroCommand
};

$light = new Light();
$stereo = new Stereo();
$lightOnCommand = new LightOnCommand($light);
$lightOffCommand = new LightOffCommand($light);
$stereoOnWithCDCommand = new StereoOnWithCDCommand($stereo);
$stereoOffCommand = new StereoOffCommand($stereo);

$remoteControl = new RemoteControl();
$remoteControl->setCommand(0, $lightOnCommand, $lightOffCommand);
$remoteControl->setCommand(1, $stereoOnWithCDCommand, $stereoOffCommand);
echo $remoteControl;
echo $remoteControl->onButtonWasPushed(0);
echo $remoteControl->offButtonWasPushed(0);
echo $remoteControl->onButtonWasPushed(1);
echo $remoteControl->offButtonWasPushed(1);
echo "******************** Macro Command ********************\n";

$onCommands = [$lightOnCommand, $stereoOnWithCDCommand];
$offCommands = [$lightOffCommand, $stereoOffCommand];
$partyOnMacro = new MacroCommand($onCommands);
$partyOffMacro = new MacroCommand($offCommands);
$remoteControl->setCommand(2, $partyOnMacro, $partyOffMacro);
$remoteControl->onButtonWasPushed(2);
$remoteControl->offButtonWasPushed(2);