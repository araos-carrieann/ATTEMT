<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Relations\Pivot;
use Illuminate\Database\Eloquent\SoftDeletes;

class Taggable extends Pivot
{
    use SoftDeletes;

    protected $table = 'taggables';
}

