<?php

namespace App\Data;

use Ro749\FullListingTemplate\Data\UnitData as Data;
use App\Models\Unit;
class UnitData extends Data
{
	public function __construct(string $column,string $id) {
		parent::__construct($column, $id);
	}

	public function init_data($request = null){
        return Unit::instance()->where($this->column,$this->id)->first();
    }
}