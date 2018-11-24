<?php
/**
 * Created by PhpStorm.
 * User: locki
 * Date: 24-Nov-18
 * Time: 7:39 PM
 */

namespace CustomAntiCuss\Main;

use pocketmine\utils\TextFormat;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerChatEvent;
use pocketmine\plugin\PluginBase;

class Main extends PluginBase implements Loader{

	public function onEnable(): void{
		$this->getLogger()->info(TextFormat::GREEN . "CustomAntiCuss Enabled");
	}

	public function onDisable(): void{
		$this->getLogger()->info(TextFormat::RED . "CustomAntiCuss Disabled");
	}

	private $anticuss = ["anal", "anus", "ass", "bastard", "bitch", "boob", "cock", "cum", "cunt", "dick", "dildo", "dyke", "fag", "faggot", "fuck", "fuk", "handjob", "homo", "jizz", "cunt", "kike", "kunt", "muff", "nigger", "penis", "piss", "poop", "pussy", "queer", "rape", "semen", "sex", "shit", "slut", "titties", "twat", "vagina", "vulva", "wank", "FUCK", "BITCH", "FAGGOT", "DICK", "CUNT", "ASS"];

	public function onChat(PlayerChatEvent $event): void{
		$msg = $event->getMessage();
		$player = $event->getPlayer();
		foreach($this->anticuss as $anticuss){
			if(strpos($msg, $anticuss) !== false){
				$player->sendMessage(TextFormat::RED . "§l§fHey! §cYou §4cannot§c say that here! - §r§fPlugin made by Zolpha#0001");
				$event->setCancelled();
				return;
				}
			}
		}
	}
}