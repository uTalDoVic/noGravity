<?php

namespace gravity;

use pocketmine\plugin\PluginBase;
use pocketmine\block\BlockFactory;

class Main extends PluginBase{

	public function onEnable(){
		BlockFactory::registerBlock(new \gravity\block\Sand(), true);
		BlockFactory::registerBlock(new \gravity\block\Gravel(), true);
	}
}
