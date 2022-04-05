<?php

namespace FaizDev\AlwaysDay;

use pocketmine\plugin\PluginBase;
use FaizDev\AlwaysDay\UpdateTime;

class Main extends PluginBase{
{

    public function onEnable(): void{
        $this->getScheduler()->scheduleRepeatingTask(new UpdateTime($this), 40);
    }

}
