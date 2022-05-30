<?php

declare(strict_types=1);

namespace FaizDev\AlwaysDay\Tasks;

use FaizDev\AlwaysDay\Loader;

use pocketmine\scheduler\Task;
use pocketmine\Server;
use pocketmine\world\World;

class SetDayTask extends Task{
    
    public function onRun() : void{
        foreach(Server::getInstance()->getWorldManager()->getWorlds() as $worlds) {
            $worlds->setTime(World::TIME_DAY);
        }
    }
}
