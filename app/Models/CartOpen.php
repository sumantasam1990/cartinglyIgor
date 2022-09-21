<?php

namespace App\Models;

use App\Models\Cart;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * App\Models\CartOpen
 *
 * @property int $id
 * @property int $user_id
 * @property int $cart_id
 * @property int $open
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read Cart|null $cart
 * @method static \Illuminate\Database\Eloquent\Builder|CartOpen newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CartOpen newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CartOpen query()
 * @method static \Illuminate\Database\Eloquent\Builder|CartOpen whereCartId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CartOpen whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CartOpen whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CartOpen whereOpen($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CartOpen whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CartOpen whereUserId($value)
 * @mixin \Eloquent
 */
class CartOpen extends Model
{
    use HasFactory;

    public function cart(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Cart::class);
    }

    public function user(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(User::class);
    }


}
