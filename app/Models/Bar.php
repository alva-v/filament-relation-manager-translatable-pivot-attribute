<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

/**
 * Class Bar
 * 
 * @property int $id
 * @property string $name
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Collection|Foo[] $foos
 *
 * @package App\Models
 */
class Bar extends Model
{
    use HasFactory, HasTranslations;
    
    protected $table = 'bars';

    protected $fillable = [
        'name'
    ];

    public $translatable = ['name'];

    public function foos()
    {
        return $this->belongsToMany(Foo::class)
            ->using(BarFoo::class)
            ->withPivot('pivot_attribute');
    }
}
