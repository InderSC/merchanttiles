<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

/**
 * Class MerchantTileSeeder
 * @package Database\Seeders
 */
class MerchantTileSeeder extends Seeder
{
    /**
     * it will seed the merchant tile records in DB table
     *
     * @return void
     */
    public function run()
    {
        $merchantTiles = [['name' => 'Terrazzo Dark Grey','url' => 'https://tilemerchants.com.au' ,
            'tile_image' => 'https://tilemerchants.com.au/image/cache/catalog/Terrazzo/MTC-Affogato-Light-Grey-450x450.jpg'],
            ['name' => 'Terrazzo Mid Grey','url' => 'https://tilemerchants.com.au' ,
                'tile_image' => 'https://tilemerchants.com.au/image/cache/catalog/Terrazzo/Affogato-Mid-Grey-450x450.jpg'],
            ['name' => 'Hawkesbury Natural','url' => 'https://tilemerchants.com.au' ,
                'tile_image' => 'https://tilemerchants.com.au/image/cache/catalog/Products%20/HAWKESBURY-450x450.PNG']
         ];
        DB::table('merchant_tiles')->insertOrIgnore($merchantTiles);
    }
}
