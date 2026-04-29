<?php

namespace App\Forms;

use Ro749\FullListingTemplate\Forms\SelectClient as BaseSelectClient;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Ro749\SharedUtils\Forms\BaseForm;
use Ro749\SharedUtils\Forms\Selector;
use Ro749\FullListingTemplate\Models\Client;

class SelectClient extends BaseSelectClient
{
	public function __construct() {
		BaseForm::__construct(
            submit_text: "Entrar",
            redirect: route('disponibilidad'),
            fields: [
                "client" => Selector::fromDB(
                    id: "client",
                    label_column: "nombre",
                    model_class: Client::get_class(),
                    query_modifier: function ($query) {
                        return $query->where('asesor', Auth::guard('asesor')->user()->id)->orderBy('id', 'desc');
                    }
                )
            ],
        );
	}
}