<?php
namespace App\ImageMapPro;

use Ro749\ListingUtils\ImageMapPro\MultiFloorImageMapPro;

class ImageMapPro extends MultiFloorImageMapPro
{
    public function __construct()
    {
        parent::__construct(
            
            floor_column: 'nivel',
            type_column: 'tipo',
            data_column: 'status',
            colors: ['#317C27','#7C2727','#7C6E27'],
            opacities: [0.4,0.4,0.4],
            files: ['imagemappro/tower.json','imagemappro/floor0.json','imagemappro/floor1.json'],
            floors_table: 'floors_opera',
        );
    }
}