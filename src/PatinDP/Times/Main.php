<?php

namespace PatinDP\Times;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\plugin\PluginBase;

class Main extends PluginBase {

    public function onEnable() {
        $this->getLogger()->info("TimesDP Plugin ativado!");
    }

    public function onCommand(CommandSender $sender, Command $command, string $label, array $args): bool {
        switch ($command->getName()) {
            case "flamengo":
                $sender->sendMessage("§l§cERRO §r§cÉ necessário pelo menos ter um estádio.");
                return true;
            case "palmeiras":
                $sender->sendMessage("§l§cERRO §r§cÉ necessário pelo menos ter um título mundial.");
                return true;
            case "fluminense":
                $sender->sendMessage("§l§cERRO §r§cEternamente virgem das Américas.");
                return true;
            case "corinthians":
                $sender->sendMessage("§l§cERRO §r§cÉ necessário parar de ser ladrão.");
                return true;
            case "vasco":
                $sender->sendMessage("§l§cERRO §r§cÉ necessário pelo menos não ser rebaixado.");
                return true;
            case "gremio":
                $sender->sendMessage("§l§cERRO §r§cImortal que mais morre.");
                return true;
            case "santos":
                $sender->sendMessage("§l§cERRO §r§cÉ necessário ter torcida.");
                return true;
            default:
                return false;
        }
    }
}
