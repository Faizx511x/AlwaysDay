<?php

declare(strict_types=1);

namespace FaizDev\AlwaysDay;

use pocketmine\plugin\PluginBase;
use FaizDev\AlwaysDay\UpdateTime;

class DayTime extends PluginBase
{

    public function onEnable(): void
    {
        $this->getScheduler()->scheduleRepeatingTask(new DayTimeTask(), 40);
    }

}
