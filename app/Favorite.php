<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Favorite extends Model
{
    protected $fillable = ['user_id', 'recipe_id'];
}
