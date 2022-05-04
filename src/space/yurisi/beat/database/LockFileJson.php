<?php
declare(strict_types=1);

namespace space\yurisi\beat\database;

use pocketmine\utils\Config;
use space\yurisi\beat\Beat;

class LockFileJson extends Config {

    public function __construct(Beat $beat) {
        parent::__construct($beat->getDataFolder() . 'lockfile.json', Config::JSON);
    }

    public function addPlugin(){}

    public function removePlugin(){}

    public function checkVersion(){}

    public function updateVersion(){}
}