<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\CartUser
 *
 * @property int $id
 * @property int $user_id
 * @property int $cart_id
 * @property string $type
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|CartUser newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CartUser newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CartUser query()
 * @method static \Illuminate\Database\Eloquent\Builder|CartUser whereCartId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CartUser whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CartUser whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CartUser whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CartUser whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CartUser whereUserId($value)
 * @mixin \Eloquent
 */
class CartUser extends Model
{
    use HasFactory;

    public $table = 'cart_user';
}