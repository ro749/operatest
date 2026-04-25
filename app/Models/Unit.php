<?php

namespace App\Models;

use Ro749\FullListingTemplate\models\Unit as Model;
use Ro749\SharedUtils\Models\Modifier;
use Ro749\SharedUtils\Tables\Column;
use Ro749\SharedUtils\Models\LogicModifiers\Options;
use Ro749\FullListingTemplate\Enums\Options as OptionsEnum;
class Unit extends Model
{
    protected $table = "units_opera";

    public static function allColumns(): array
    {
        return [
            'unit'=>new Column(display:"Unidad",),
            'torre'=>new Column(display:'Torre'),
            'tipo'=>new Column(display:'Tipo'),
            'nivel'=>new Column(display:'Nivel'),
            'estacionamiento'=>new Column(display:'Estacionamiento'),
            'recamaras'=>new Column(display:'Recamaras'),
            'baños'=>new Column(display:'Baños'),
            'cuartodeservicio'=>new Column(display:'Cuarto de servicio'),
            'interior'=>new Column(
                display:"Interior",
                modifier: Modifier::METERS,
            ),
            'exterior'=>new Column(
                display:"exterior",
                modifier: Modifier::METERS,
            ),
            'total'=>new Column(
                display:"Precio",
                modifier: Modifier::MONEY,
            ),
            'price'=>new Column(
                display:"Precio",
                modifier: Modifier::METERS,
            ),
            
            'status'=>new Column(
                display:"Estado",
                logic_modifier: new Options (options: OptionsEnum::UnitsStatus),
            ),
        ];
    }
}