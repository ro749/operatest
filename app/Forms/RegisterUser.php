<?php

namespace App\Forms;

use Ro749\FullListingTemplate\forms\RegisterUser as RegisterUserBase;
use Illuminate\Http\Request;
use Ro749\SharedUtils\Forms\Field;
use Ro749\SharedUtils\Forms\InputType;
use Ro749\SharedUtils\Forms\Selector;
use Ro749\SharedUtils\Enums\Icon;
use Ro749\FullListingTemplate\Enums\Options;
class RegisterUser extends RegisterUserBase
{
	public function __construct() {
		parent::__construct();
        $this->fields = [
            'nombre'=>new Field(
                type: InputType::TEXT,
                label: "Nombre",
                placeholder: "Escriba el nombre",
                required: true,
                icon: "f7:person"
            ),
            'correo'=>new Field(
                type: InputType::EMAIL,
                label:"Email",
                placeholder:"Escriba el email",
                required: true,
                icon: "mage:email"
            ),
            'telefono'=>new Field(
                type: InputType::PHONE,
                label:"Teléfono",
                placeholder:"Escriba el teléfono",
                required: true,
                icon: "solar:phone-calling-linear"
            ),
            'numero'=>new Field(
                type: InputType::TEXT,
                label:"Numero",
                placeholder:"Escriba el numero",
                required: true,
                unique: true,
                icon: Icon::HASH->value
            ),
            'categoria'=>new Selector(
                label:"Categoría",
                placeholder:"Seleccione una categoría",
                options: Options::AsesorCategories,
                required: true,
            ),
        ];
	}

	public function get_default_args(){
        return ['request' => Request::create('/', 'POST',[
            'nombre' => 'test',
            'correo' => 'a@a.com',
            'telefono' => '3337811749',
            'numero' => '0000',
            'categoria' => 0
        ])];
    } 
}