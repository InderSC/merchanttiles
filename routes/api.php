<?php

use Illuminate\Support\Facades\Route;


Route::get('tiles', 'App\Http\Controllers\MerchantTileController@getAllMerchantTiles');
Route::get('tile/{id}', 'App\Http\Controllers\MerchantTileController@getMerchantTile');
