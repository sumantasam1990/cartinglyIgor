<?php

namespace App\Models;

use App\Models\Cart;
use App\Models\CartOpen;
use App\Models\LevelOne;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * App\Models\LevelTwo
 *
 * @property int $id
 * @property int $level_one_id
 * @property string $two_title
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|Cart[] $allCarts
 * @property-read int|null $all_carts_count
 * @property-read Cart|null $cart
 * @property-read \Illuminate\Database\Eloquent\Collection|CartOpen[] $cart_opens
 * @property-read int|null $cart_opens_count
 * @property-read LevelOne|null $level_one
 * @method static \Database\Factories\LevelTwoFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|LevelTwo newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|LevelTwo newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|LevelTwo query()
 * @method static \Illuminate\Database\Eloquent\Builder|LevelTwo whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LevelTwo whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LevelTwo whereLevelOneId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LevelTwo whereTwoTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LevelTwo whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class LevelTwo extends Model
{
    use HasFactory;

    public function level_one()
    {
        return $this->belongsTo(LevelOne::class);
    }

    public function cart()
    {
        return $this->hasOne(Cart::class);
    }

    public function allCarts()
    {
        return $this->hasMany(Cart::class)->limit(10);
    }

    public function cart_opens()
    {
        return $this->hasManyThrough(CartOpen::class, Cart::class);
    }
}
