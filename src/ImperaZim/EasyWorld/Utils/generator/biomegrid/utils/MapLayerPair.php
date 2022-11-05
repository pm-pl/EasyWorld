<?php

declare(strict_types=1);

namespace ImperaZim\EasyWorld\Utils\generator\biomegrid\utils;

use ImperaZim\EasyWorld\Utils\generator\biomegrid\MapLayer;

final class MapLayerPair{

	public MapLayer $high_resolution;
	public ?MapLayer $low_resolution;

	public function __construct(MapLayer $high_resolution, ?MapLayer $low_resolution){
		$this->high_resolution = $high_resolution;
		$this->low_resolution = $low_resolution;
	}
}
 
