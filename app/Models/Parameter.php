<?php

namespace App\Models;

//use Illuminate\Database\Eloquent\Factories\HasFactories;
use Illuminate\Database\Eloquent\Model;

class Parameter extends Model
{
    //use HasFactory;
    protected $filiable = ['type','code','description','value'];
}
