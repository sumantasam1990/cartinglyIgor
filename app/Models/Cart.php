<?php

namespace App\Models;

use App\Models\User;
use App\Models\CartOpen;
use App\Models\LevelTwo;
//use App\Models\SaveCart;
use App\Models\ProductCategory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;

/**
 * App\Models\Cart
 *
 * @property int $id
 * @property int $user_id
 * @property int|null $level_two_id
 * @property string $cart_name
 * @property string $main_photo
 * @property string $important_details
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int $status
 * @property-read \Illuminate\Database\Eloquent\Collection|CartOpen[] $cart_opens
 * @property-read int|null $cart_opens_count
 * @property-read LevelTwo|null $level_two
 * @property-read \Illuminate\Database\Eloquent\Collection|ProductCategory[] $product_categories
 * @property-read int|null $product_categories_count
 * @property-read User|null $user
 * @method static \Database\Factories\CartFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Cart newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Cart newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Cart query()
 * @method static \Illuminate\Database\Eloquent\Builder|Cart whereCartName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cart whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cart whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cart whereImportantDetails($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cart whereLevelTwoId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cart whereMainPhoto($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cart whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cart whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cart whereUserId($value)
 * @mixin \Eloquent
 */
class Cart extends Model implements Searchable
{
    use HasFactory;

    public function getSearchResult(): SearchResult
     {
        $url = $this->id;

         return new \Spatie\Searchable\SearchResult(
            $this,
            $this->cart_name,
            $url
         );
    }

    public function product_categories(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(ProductCategory::class);
    }

    public function level_two(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne(LevelTwo::class);
    }

    public function cart_opens(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(CartOpen::class);
    }

    public function user(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function followingCarts(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Follower::class);
    }

    public function main_categories(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(MainCategory::class, 'main_category_id', 'id');
    }


}
