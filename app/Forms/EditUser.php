<?php

namespace App\Forms;

use Ro749\FullListingTemplate\forms\EditUser as EditUserBase;
use Ro749\SharedUtils\Forms\Field;
use Ro749\SharedUtils\Forms\InputType;
use Ro749\SharedUtils\Forms\Selector;
use Ro749\FullListingTemplate\Enums\Options;
class EditUser extends EditUserBase
{
	public function __construct() {
		parent::__construct();
		$this->fields = [
            'id'=>new Field(
                type: InputType::HIDDEN,
            ),
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
                icon: "solar:phone-calling-linear"
            ),
            'categoria'=>new Selector(
                label:"Categoría",
                options: Options::AsesorCategories,
                required: true,
            ),
            'block'=>new Selector(
                label:"Status",
                options: Options::AsesorStatus,
                required: true,
            ),
        ];
	}
}