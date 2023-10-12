<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;
use Spatie\Translatable\HasTranslations;

class BarFoo extends Pivot
{
    use HasTranslations;

    public $translatable = ['attribute'];
}
