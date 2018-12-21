<?php

namespace JOrlx;

use pocketmine\Server;
use pocketmine\Player;
use pocketmine\plugin\PluginBase;
use pocketmine\event\player\PlayerAchievementAwardedEvent;
use pocketmine\event\listener;

class Main extends pluginBase {

	public function onAchievement($achievementId) {
		if(Player->hasAchievement($achievementId)){
			Player->giveItem(Item::get(256, 0, 1))
      }
	}






}
