<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class foods extends Model
{
    protected $fillable = ['name', 'description', 'price', 'image'];
}