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
        Schema::create('floors_opera', function (Blueprint $table) {
$table->string('floor');
$table->string('map');
});
DB::table('floors_opera')->insert([
'floor' => '1',
'map' => '1',
]);
DB::table('floors_opera')->insert([
'floor' => '2',
'map' => '1',
]);
DB::table('floors_opera')->insert([
'floor' => '3',
'map' => '1',
]);
DB::table('floors_opera')->insert([
'floor' => '4',
'map' => '1',
]);
DB::table('floors_opera')->insert([
'floor' => '5',
'map' => '1',
]);
DB::table('floors_opera')->insert([
'floor' => '6',
'map' => '1',
]);
DB::table('floors_opera')->insert([
'floor' => '7',
'map' => '1',
]);
DB::table('floors_opera')->insert([
'floor' => '8',
'map' => '1',
]);
DB::table('floors_opera')->insert([
'floor' => '9',
'map' => '1',
]);
DB::table('floors_opera')->insert([
'floor' => '10',
'map' => '1',
]);
DB::table('floors_opera')->insert([
'floor' => '11',
'map' => '1',
]);
DB::table('floors_opera')->insert([
'floor' => '12',
'map' => '1',
]);
DB::table('floors_opera')->insert([
'floor' => '13',
'map' => '1',
]);
DB::table('floors_opera')->insert([
'floor' => '14',
'map' => '1',
]);
DB::table('floors_opera')->insert([
'floor' => '15',
'map' => '1',
]);
DB::table('floors_opera')->insert([
'floor' => '16',
'map' => '1',
]);
DB::table('floors_opera')->insert([
'floor' => '17',
'map' => '1',
]);
DB::table('floors_opera')->insert([
'floor' => '18',
'map' => '1',
]);
DB::table('floors_opera')->insert([
'floor' => '19',
'map' => '1',
]);
DB::table('floors_opera')->insert([
'floor' => '20',
'map' => '1',
]);
DB::table('floors_opera')->insert([
'floor' => '21',
'map' => '1',
]);
DB::table('floors_opera')->insert([
'floor' => '22',
'map' => '1',
]);
DB::table('floors_opera')->insert([
'floor' => '23',
'map' => '1',
]);
DB::table('floors_opera')->insert([
'floor' => '24',
'map' => '1',
]);
DB::table('floors_opera')->insert([
'floor' => '25',
'map' => '1',
]);
DB::table('floors_opera')->insert([
'floor' => '26',
'map' => '1',
]);
DB::table('floors_opera')->insert([
'floor' => '27',
'map' => '1',
]);
DB::table('floors_opera')->insert([
'floor' => '28',
'map' => '2',
]);
DB::table('floors_opera')->insert([
'floor' => '29',
'map' => '2',
]);
DB::table('floors_opera')->insert([
'floor' => '30',
'map' => '2',
]);
DB::table('floors_opera')->insert([
'floor' => '31',
'map' => '2',
]);
DB::table('floors_opera')->insert([
'floor' => '32',
'map' => '2',
]);
DB::table('floors_opera')->insert([
'floor' => '33',
'map' => '2',
]);

    }
};