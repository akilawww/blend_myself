<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Materrial extends Model
{
    protected $fillable = ['name', 'quantity', 'degree', 'recipe_id'];
}
