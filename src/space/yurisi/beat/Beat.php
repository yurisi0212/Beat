<?php
declare(strict_types=1);

namespace space\yurisi\beat;

use pocketmine\plugin\PluginBase;
use space\yurisi\beat\command\beatCommand;

class Beat extends PluginBase {

    protected function onEnable(): void {
        $this->getServer()->getCommandMap()->registerAll('beat', [
            new beatCommand($this),
        ]);
    }

    protected function onDisable(): void {

    }
}