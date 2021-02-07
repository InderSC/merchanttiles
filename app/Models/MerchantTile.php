<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

/**
 * Class MerchantTile
 * @package App\Models
 */
class MerchantTile extends Model
{
    /**
     * @var string
     */
    protected $table = 'merchant_tiles';
    /**
     * @var string[]
     */
    protected $fillable = ['name', 'url','tile_image'];

}
