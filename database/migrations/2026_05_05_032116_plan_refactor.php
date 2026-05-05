<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('personal_plans', function (Blueprint $table) {
            $table->renameColumn('fill_enganche','per_enganche');
            $table->renameColumn('fill_plazo','per_plazo');
            $table->decimal('per_plazo',5,2)->default(0)->change();
            $table->decimal('per_enganche',5,2)->default(0)->change();
        });
    }
};
