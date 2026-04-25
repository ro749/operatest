<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        $planId = DB::table('plans_opera')->insertGetId([
            'title' => 'CONTADO',
            'discount' => 0,
        ]);

        DB::table('planlines_opera')->insert([
            'plan' => $planId,
            'description' => 'Enganche',
            'percent' => 80,
        ]);

        DB::table('planlines_opera')->insert([
            'plan' => $planId,
            'description' => 'Notificación de entrega',
            'percent' => 20,
        ]);
    }
};
