<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RecipeProcedure extends Model
{
    protected $fillable = ['process_num', 'body', 'recipe_id'];
}
