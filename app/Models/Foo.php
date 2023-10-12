<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

/**
 * Class Foo
 * 
 * @property int $id
 * @property string $name
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Collection|Bar[] $bars
 *
 * @package App\Models
 */
class Foo extends Model
{
    use HasTranslations;
    
    protected $table = 'foos';

    protected $fillable = [
        'name'
    ];

    public $translatable = ['name'];

    public function bars()
    {
        return $this->belongsToMany(Bar::class)
            ->using(BarFoo::class)
            ->withPivot('id', 'pivot_attribute');
    }
}
