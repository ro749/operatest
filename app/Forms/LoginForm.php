<?php

namespace App\Forms;

use Illuminate\Support\Facades\Auth;
use Ro749\FullListingTemplate\Forms\LoginForm as LoginFormBase;
use Ro749\SharedUtils\Forms\Field;
use Ro749\SharedUtils\Forms\InputType;
use Illuminate\Http\Request;
use Illuminate\Session\Store;
use Illuminate\Session\ArraySessionHandler;
use Illuminate\Validation\ValidationException;
use App\Models\Asesor;

class LoginForm extends LoginFormBase
{
	public function __construct() {
		parent::__construct();
		$this->fields = [
            "numero" => new Field(
                type: InputType::TEXT,
                placeholder:"Número de asesor", 
                icon: "bx bx-user",
                max: 4
            ),
            "nip" => new Field(
                placeholder:"Nip",
                type: InputType::PASSWORD,
                icon: "bx bx-lock-alt",
                max: 4
            ),
        ];
	}

	function prosses(Request $request): string
	{
		$number = $request->input('numero');
		$password = $request->input('nip');
		$asesor = Asesor::where('numero', $number)->where('nip', $password)->first();
		
		if ($asesor) {
			auth('asesor')->loginUsingId($asesor->id);
			$request->session()->regenerate();
			return $this->redirect;
		} else {
			throw ValidationException::withMessages([
                'nip' => ['Credenciales incorrectas.'],
            ]);
		}
	}
}