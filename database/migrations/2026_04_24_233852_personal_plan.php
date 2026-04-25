<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('personal_plans', function (Blueprint $table) {
            $table->id();
            $table->integer('quotation');
            $table->decimal('per_enganche',5,2)->default(0);
            $table->decimal('per_plazo',12,2)->default(0);
            $table->decimal('fill_months_plazo',5,2)->default(0);
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
        });
    }
};
