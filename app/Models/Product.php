<?php

namespace App\Models;

use App\Models\ProductImage;
use App\Models\ProductCategory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;

/**
 * App\Models\Product
 *
 * @property int $id
 * @property int $product_category_id
 * @property string $prod_title
 * @property string $shop_where_buy
 * @property float $prod_price
 * @property string $prod_page_url
 * @property string $important_details
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read ProductCategory|null $product_categories
 * @property-read ProductImage|null $product_image
 * @property-read \Illuminate\Database\Eloquent\Collection|ProductImage[] $product_images
 * @property-read int|null $product_images_count
 * @method static \Illuminate\Database\Eloquent\Builder|Product newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Product newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Product query()
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereImportantDetails($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereProdPageUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereProdPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereProdTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereProductCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereShopWhereBuy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Product extends Model implements Searchable
{
    use HasFactory;

    public function getSearchResult(): SearchResult
     {
        $url = $this->id;

         return new \Spatie\Searchable\SearchResult(
            $this,
            $this->prod_title,
            $url
         );
    }

    public function product_categories()
    {
        return $this->belongsTo(ProductCategory::class);
    }

    public function product_images()
    {
        return $this->hasMany(ProductImage::class);
    }

    public function product_image()
    {
        return $this->hasOne(ProductImage::class);
    }
}
