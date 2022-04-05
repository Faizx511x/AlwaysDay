<?php

namespace FaizDev\AlwaysDay;

use pocketmine\scheduler\Task;
use FaizDev\Main;
use pocketmine\Server;
use pocketmine\world\World;

class DayTimeTask extends Task
{
    public function __construct()
    {
        
    }

    public function onRun(): void
    {
        foreach(Server::getInstance()->getWorldManager()->getWorlds() as $worlds) {
            $worlds->setTime(World::TIME_DAY);
        }
    }

}
