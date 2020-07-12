<?php

namespace gravity\block;

use pocketmine\block\Block;
use pocketmine\block\BlockToolType;

class Sand extends Block{

	protected $id = Block::SAND;

	public function __construct(int $meta = 0){
		$this->meta = $meta;
	}

	public function getHardness() : float{
		return 0.5;
	}

	public function getToolType() : int{
		return BlockToolType::TYPE_SHOVEL;
	}

	public function getName() : string{
		if($this->meta === 0x01){
			return "Red Sand";
		}

		return "Sand";
	}
}
