<?php

namespace FaizDev\AlwaysDay;

use pocketmine\scheduler\Task;
use FaizDev\AlwaysDay\Main;
use pocketmine\level\Level;

class UpdateTime extends Task {
	
    /** @var Main $plugin */
    public $plugin;

    public function __construct(Main $plugin) {
		$this->plugin = $plugin;
	}

	public function onRun(int $currentTick) {
		if($this->plugin->getConfig()->get("alwaysday") == true){
			foreach($this->plugin->getServer()->getLevels() as $level){
				$level->setTime(Level::TIME_DAY);
			}
		}
		
	}
}
