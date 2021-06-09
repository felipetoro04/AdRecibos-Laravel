<?php

namespace App\Models;

//use Illuminate\Database\Eloquent\Factories\HasFactories;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
       //use HasFactory;
       protected $fillable = ['idTypeDoc','numberDoc','name','idTypeSex','age','email','password','idProfile'];
}
