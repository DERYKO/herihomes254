<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rent extends Model
{
    protected $fillable=['apartment','room','tenant','amount','phone','complete'];
}
