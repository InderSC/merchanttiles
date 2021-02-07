<?php

namespace App\Http\Controllers;

use App\Models\MerchantTile;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;


/**
 * Class MerchantTileController
 * @package App\Http\Controllers
 */
class MerchantTileController extends Controller
{
    /**
     * Returns all merchant tiles
     * @return Application|ResponseFactory|Response
     */
    public function getAllMerchantTiles()
    {
        $tiles = MerchantTile::all()->toJson(JSON_PRETTY_PRINT);
        return response($tiles, 200);

    }

    /**
     * returns tile by id
     * @param $id
     * @return Application|ResponseFactory|JsonResponse|Response
     */
    public function getMerchantTile($id)
    {
        if (MerchantTile::where('id', $id)->exists()) {
            $tile = MerchantTile::find($id)->toJson(JSON_PRETTY_PRINT);
            return response($tile, 200);
        } else {
            return response()->json([
                "message" => "Sorry tile not found"
            ], 404);
        }

    }
}
