<?php

namespace App\Tables;

use Ro749\FullListingTemplate\tables\Torre as BaseTable;
use App\Models\Unit;

class Torre extends BaseTable
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
		]);
	}
}