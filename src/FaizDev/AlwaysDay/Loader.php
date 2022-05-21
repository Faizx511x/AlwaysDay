<?php

declare(strict_types=1);

namespace FaizDev\AlwaysDay;

use pocketmine\plugin\PluginBase;

use FaizDev\AlwaysDay\Tasks\SetDayTask;

class Loader extends PluginBase{

    public function onEnable(): void
    {
        $this->getScheduler()->scheduleRepeatingTask(new SetDayTask(), 40);
    }
}
