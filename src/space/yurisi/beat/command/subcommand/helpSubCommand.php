<?php
declare(strict_types=1);

namespace space\yurisi\beat\command\subcommand;

use pocketmine\command\CommandSender;
use space\yurisi\beat\Beat;

class helpSubCommand implements SubCommand {
    public function execute(Beat $beat, CommandSender $sender, array $args) {
        $sender->sendMessage(Beat::INFO . '/beat');
        $sender->sendMessage(Beat::INFO . 'install [poggitPlugin or URL] - プラグインをインストールする');
        $sender->sendMessage(Beat::INFO . 'remove [packageName] - プラグインをアンインストールする');
        $sender->sendMessage(Beat::INFO . 'list - プラグインリストを参照する');
    }
}