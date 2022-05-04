<?php
declare(strict_types=1);

namespace space\yurisi\beat\command;

use pocketmine\command\CommandSender;
use pocketmine\command\defaults\VanillaCommand;
use space\yurisi\beat\Beat;
use space\yurisi\beat\command\subcommand\helpSubCommand;
use space\yurisi\beat\command\subcommand\installSubCommand;
use space\yurisi\beat\command\subcommand\removeSubCommand;

class beatCommand extends VanillaCommand {

    public function __construct(
        private Beat $beat
    ) {
        parent::__construct("beat", "プラグインマネージャー", "/beat");
    }


    public function execute(CommandSender $sender, string $commandLabel, array $args) {
        if(!isset($args[0]) || $args[0] === 'help'){
            (new helpSubCommand())->execute($this->beat, $sender, $args);
            return;
        }
        if($args[0] === 'install'){
            (new installSubCommand())->execute($this->beat, $sender, $args);
            return;
        }
        if($args[0] === 'remove'){
            (new removeSubCommand())->execute($this->beat, $sender, $args);
        }
    }
}