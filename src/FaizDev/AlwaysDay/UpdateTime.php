<?php

namespace FaizDev\AlwaysDay;

 use pocketmine\scheduler\Task;
 use pocketmine\world\World;
 use FaizDev\AlwaysDay\Main;

 class UpdateTime extends Task {

     /** @var Main $plugin */
    public $plugin;

    public function __construct(Main $plugin) {
		$this->plugin = $plugin;
	}

	public function onRun(): void{
		if($this->plugin->getConfig()->get("alwaysday") == true){
			foreach($this->plugin->getServer()->getWorlds() as $world){
				$world->setTime(0);
			        $world->stopTime();
			}
		}
		
	}
}
