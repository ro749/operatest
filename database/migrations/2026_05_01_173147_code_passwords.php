<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        $asesors = DB::table('asesors')->get();
        foreach ($asesors as $asesor) {
            DB::table('asesors')
                ->where('id', $asesor->id)
                ->update(['password' => bcrypt($asesor->password)]);
        }
    }
};
