<?php

declare(strict_types = 1);

namespace FaizDev\AlwaysDay;

use pocketmine\plugin\PluginBase;
use pocketmine\Player;
use pocketmine\Server;
use pocketmine\math\Vector3;
use pocketmine\network\mcpe\protocol\EventPacket;
use pocketmine\network\mcpe\protocol\LevelEventPacket;
use FaizDev\AlwaysDay\Tasks\SetDayTask;

class Loader extends PluginBase{

    private static $instance;

    public function onEnable() : void{

        self::$instance = $this;

        $this->setTasks();
    }

    public static function getInstance() : Loader{
        return self::$instance;
    }

    public function setTasks(){
        $this->getScheduler()->scheduleRepeatingTask(new SetDayTask($this), 20);
    }
}
