<?php

namespace App\Tables;

use Ro749\FullListingTemplate\Tables\Clients as BaseTable;
use Ro749\SharedUtils\Getters\BaseGetter;
use Ro749\SharedUtils\Tables\Column;
use Ro749\SharedUtils\Models\LogicModifiers\Options;
use Ro749\SharedUtils\Filters\BackendFilters\UserFilter;
use Ro749\SharedUtils\Filters\BackendFilters\BasicFilter;
use Ro749\SharedUtils\Filters\Filters;
use Ro749\SharedUtils\Filters\Filter;
use Ro749\SharedUtils\Tables\View;
use Ro749\SharedUtils\Statistics\Statistic;
use Ro749\SharedUtils\Statistics\StatisticColumn;
use Ro749\SharedUtils\Statistics\StatisticType;
use Ro749\SharedUtils\Models\LogicModifiers\ForeignKey;
use Ro749\FullListingTemplate\Enums\Options as OptionsEnum;
use Ro749\FullListingTemplate\Forms\ClientEdit;
use Ro749\FullListingTemplate\Enums\ClientCategories;
use Ro749\FullListingTemplate\Models\Client;
use Ro749\FullListingTemplate\Models\Quotation;
class Clients extends BaseTable
{
	public function __construct() {
		parent::__construct();
		$this->getter->columns = [
			'nombre'=>new Column(
                display:"Nombre",
            ),
            'telefono'=>new Column(
                display:"Teléfono",
            ),
            'correo'=>new Column(
                display:"Email",
            ),
            'sent'=>new Column(
                display:"Enviadas",
                logic_modifier: new ForeignKey(
                    table: 'quotation_stats',
                    column: 'sent',
                ),
            ),
            'pending'=>new Column(
                display:"Pendientes",
                logic_modifier: new ForeignKey(
                    table: 'quotation_stats',
                    column: 'pending',
                ),
            ),
            'accepted'=>new Column(
                display:"Aceptadas",
                logic_modifier: new ForeignKey(
                    table: 'quotation_stats',
                    column: 'accepted',
                ),
            ),
            'cancelled'=>new Column(
                display:"Canceladas",
                logic_modifier: new ForeignKey(
                    table: 'quotation_stats',
                    column: 'cancelled',
                ),
            ),
            //'short_comment'=>new Column(
            //    display:"Comentario"
            //),
            'category'=>new Column(
                display:"Categoría",
                logic_modifier: new Options (options: OptionsEnum::ClientCategories),
            ),
            'priority'=>new Column(
                display:"Prioridad",
                logic_modifier: new Options (options: OptionsEnum::ClientPriorities),
            ),
		];
	}
}