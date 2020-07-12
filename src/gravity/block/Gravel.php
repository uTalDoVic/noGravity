<?php

namespace gravity\block;

use pocketmine\item\Item;
use pocketmine\item\ItemFactory;
use pocketmine\block\Block;
use pocketmine\block\BlockToolType;
use function mt_rand;

class Gravel extends Block{

	protected $id = Block::GRAVEL;

	public function __construct(int $meta = 0){
		$this->meta = $meta;
	}

	public function getName() : string{
		return "Gravel";
	}

	public function getHardness() : float{
		return 0.6;
	}

	public function getToolType() : int{
		return BlockToolType::TYPE_SHOVEL;
	}

	public function getDropsForCompatibleTool(Item $item) : array{
		if(mt_rand(1, 10) === 1){
			return [
				ItemFactory::get(Item::FLINT)
			];
		}

		return parent::getDropsForCompatibleTool($item);
	}
}
