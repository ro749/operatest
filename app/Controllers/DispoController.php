<?php

namespace App\Controllers;

use Ro749\FullListingTemplate\Controllers\DispoController as Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Ro749\FullListingTemplate\Data\UnitData;
use Ro749\FullListingTemplate\Models\Asesor;
use Ro749\FullListingTemplate\Models\Quotation;
use Ro749\FullListingTemplate\Models\Client;
use Ro749\FullListingTemplate\Models\Unit;
use Ro749\FullListingTemplate\Tables\Torre;
use Ro749\FullListingTemplate\Enums\QuotationStatus;
use Ro749\FullListingTemplate\Enums\UnitsStatus;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
class DispoController extends Controller
{
    function index() {
        $imp = config()->get('overrides.image_map_pro')::instance();
        $plans = config()->get('overrides.plans')::instance();
        $senderClass = config('overrides.sender');
        $sender = new $senderClass($plans);
        $client_id = session()->get('client_id');
        $client = null;
        if(!empty($client_id)){
            $client = Client::instance()->where('id', $client_id)->value('nombre');
        }
        $asesor = Auth::guard('asesor')->user();
        return view(config('overrides.views.disponibilidad'),[
            'plans'=>$plans,
            'imp'=>$imp,
            'sender'=>$client!=null?$sender:null,
            'client'=>$client,
            'asesor'=>$asesor->nombre,
            'unit'=>null,
            'menu'=>true,
            'dispo_btns'=>true,
            'asesor_area'=>$asesor,
            'personal_plan'=>null
        ]);
    }
    function torre(){
        $torre = Torre::instance();
        $client_id = session()->get('client_id');
        if(!$client_id) return redirect()->route('client-login');
        $client = Client::instance()->where('id', $client_id)->value('nombre');
        return view(config('overrides.views.torre'),[
            'table'=>$torre,
            'client'=>$client,
            'asesor'=>Auth::guard('asesor')->user()->nombre,
            'menu'=>true,
            'dispo_btns'=>true,
        ]);
    }
}