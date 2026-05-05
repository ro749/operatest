<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('personal_plans', function (Blueprint $table) {
            $table->renameColumn('per_enganche','fill_enganche');
            $table->decimal('fill_enganche',12,2)->default(0)->change();
            $table->decimal('per_plazo',5,2)->default(0)->change();
            $table->decimal('fill_interes_mensual',5,2)->default(0);
            $table->integer('fill_meses_sin_intereses')->default(0);
        });
    }
};
