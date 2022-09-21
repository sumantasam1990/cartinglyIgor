<?php

namespace App\Models;

use App\Models\LevelTwo;
use App\Models\MainCategory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * App\Models\LevelOne
 *
 * @property int $id
 * @property int $user_id
 * @property int $main_category_id
 * @property string $one_title
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|LevelTwo[] $level_twos
 * @property-read int|null $level_twos_count
 * @property-read MainCategory|null $main_category
 * @method static \Database\Factories\LevelOneFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|LevelOne newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|LevelOne newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|LevelOne query()
 * @method static \Illuminate\Database\Eloquent\Builder|LevelOne whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LevelOne whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LevelOne whereMainCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LevelOne whereOneTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LevelOne whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LevelOne whereUserId($value)
 * @mixin \Eloquent
 */
class LevelOne extends Model
{
    use HasFactory;

    public function level_twos()
    {
        return $this->hasMany(LevelTwo::class);
    }

    public function main_category()
    {
        return $this->belongsTo(MainCategory::class);
    }
}
