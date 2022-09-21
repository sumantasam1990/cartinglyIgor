<?php

namespace App\Models;

use App\Models\LevelOne;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * App\Models\MainCategory
 *
 * @property int $id
 * @property string $title
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|LevelOne[] $level_ones
 * @property-read int|null $level_ones_count
 * @method static \Illuminate\Database\Eloquent\Builder|MainCategory newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MainCategory newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MainCategory query()
 * @method static \Illuminate\Database\Eloquent\Builder|MainCategory whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MainCategory whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MainCategory whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MainCategory whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class MainCategory extends Model
{
    use HasFactory;

    public function level_ones(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(LevelOne::class);
    }

    public function cart(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Cart::class);
    }
}
