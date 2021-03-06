<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    protected $table    = 'asset_category';
    protected $fillable = [
        'name', 'unit_name', 'active', 'description', 'picture_path',
    ];

}
