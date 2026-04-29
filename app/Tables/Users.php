<?php

namespace App\Tables;

use Ro749\FullListingTemplate\Tables\Users as UsersBase;
use Ro749\SharedUtils\Tables\Column;
use Ro749\SharedUtils\Models\LogicModifiers\Options;
use Ro749\FullListingTemplate\Enums\Options as OptionsEnum;
class Users extends UsersBase
{
	public function __construct() {
		parent::__construct();
        $this->getter->columns = [
            'nombre'=>new Column(
                display:"Nombre",
            ),
            'correo'=>new Column(
                display:"Email",
            ),
            'telefono'=>new Column(
                display:"Teléfono",
            ),
            'numero'=>new Column(
                display:"Numero",
            ),
            'categoria'=>new Column(
                display:"Categoría",
                logic_modifier: new Options(options: OptionsEnum::AsesorCategories),
            ),
            'block'=>new Column(
                display:"Status",
                logic_modifier: new Options(options: OptionsEnum::AsesorStatus),
            ),
        ];
	}
}