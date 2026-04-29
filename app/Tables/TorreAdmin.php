<?php

namespace App\Tables;
use App\Models\Unit;
use Ro749\FullListingTemplate\Tables\TorreAdmin as BaseTable;

class TorreAdmin extends BaseTable
{
	public function __construct() {
		parent::__construct();
		$this->getter->columns = Unit::get_columns([
			'unit',
			'torre',
			'tipo',
			'nivel',
			'estacionamiento',
			'recamaras',
			'baños',
			'cuartodeservicio',
			'interior',
			'exterior',
			'total',
			'price',
			'status'
		]);
	}
}