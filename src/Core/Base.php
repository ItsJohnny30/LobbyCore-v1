<?php

namespace Core;

use pocketmine\event\Listener;
use pocketmine\plugin\PluginBase;

class Base extends PluginBase implements Listener {

    public static $instance;

    public function onEnable(): void {
        $this->getLogger()->info('Enabled LobbyCore');
        $this->getLogger()->info('This Plugin Made By Johnnywai12345');
        $this->getServer()->getPluginManager()->registerEvents($this, $this);

        self::$instance = $this;
    }

    public function onDisable(): void {
        $this->getLogger()->info('Disabled LobbyCore!!!');
    }

    public static function getInstance(): Base {
        return self::$instance;
    }
}