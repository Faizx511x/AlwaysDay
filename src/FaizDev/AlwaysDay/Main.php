<?php

namespace FaizDev\AlwaysDay;

use pocketmine\player\Player;
use pocketmine\Server;
use pocketmine\plugin\PluginBase;
use pocketmine\utils\Config;

class Main extends PluginBase {
	
	public function onEnable(): void{
	    $this->getScheduler()->scheduleRepeatingTask(new UpdateTime($this), 40); 
	}
	
}
