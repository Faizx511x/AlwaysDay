<?php

declare(strict_types=1);

namespace FaizDev\AlwaysDay;

use pocketmine\scheduler\Task;
use FaizDev\AlwaysDay\Main;
use pocketmine\Server;
use pocketmine\world\World;

class DayTimeTask extends Task
{

    public function onRun(): void
    {
        foreach(Server::getInstance()->getWorldManager()->getWorlds() as $worlds) {
            $worlds->setTime(World::TIME_DAY);
        }
    }

}
