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
        Schema::table('units_opera', function (Blueprint $table) {
$table->string('torre');
$table->string('tipo');
$table->integer('nivel');
$table->integer('estacionamiento');
$table->integer('recamaras');
$table->integer('baños');
$table->integer('cuartodeservicio');
$table->integer('interior');
$table->integer('exterior');
$table->integer('total');
$table->integer('mensualidades');
$table->integer('contado');
$table->integer('financiero80');
$table->integer('financiero75');
$table->integer('hipotecario');
$table->integer('preview');
$table->integer('discount');
$table->integer('new_contado');
$table->integer('new_financiero80');
$table->integer('new_financiero75');
$table->integer('new_hipotecario');
$table->integer('new_preventafinanciada');
$table->integer('new_preventacontado');
$table->integer('new_status');
});

    }
};