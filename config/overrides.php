<?php

return [
    'tables' => [
        'Clients' => App\Tables\Clients::class,
        'Torre' => App\Tables\Torre::class,
        'TorreAdmin' => App\Tables\TorreAdmin::class,
        'Users' => App\Tables\Users::class,
    ],
    'forms' => [
        'EditUser' => App\Forms\EditUser::class,
        'LoginForm' => App\Forms\LoginForm::class,
        'RegisterUser' => App\Forms\RegisterUser::class,
        'SelectClient' => App\Forms\SelectClient::class,
    ],
    'models' => [
        'Asesor' => App\Models\Asesor::class,
        'Client' => App\Models\Client::class,
        'Plan' => App\Models\Plan::class,
        'PlanLine' => App\Models\PlanLine::class,
        'Unit' => App\Models\Unit::class,
        'User' => App\Models\User::class,
    ],
    'datas' => [
        'UnitData' => App\Data\UnitData::class,
    ],
    'controllers' => [
        'DispoController' => App\Controllers\DispoController::class,
    ],
    'views' => [
        'calculos-plan' => 'calculos-plan',
        'disponibilidad-data' => 'disponibilidad-data',
        'footer' => 'footer',
        'header' => 'header',
        'post-data' => 'post-data',
        'sender-buttons' => 'sender-buttons',
        'simple-login' => 'simple-login',
        'welcome' => 'welcome',
    ],
    'image_map_pro' => App\ImageMapPro\ImageMapPro::class,
];
