<?php

declare(strict_types=1);

namespace FaizDev\AlwaysDay;

use FaizDev\AlwaysDay\Loader;

use pocketmine\scheduler\Task;
use pocketmine\Server;
use pocketmine\world\World;

class SetDayTask extends Task{
    
    public function __construct(Loader $plugin){
		$this->plugin = $plugin;
	}
    
    public function onRun(int $currentTick) : void{
        foreach(Server::getInstance()->getWorldManager()->getWorlds() as $worlds) {
            $worlds->setTime(World::TIME_DAY);
        }
    }
}
