<?php

namespace App\Models;

//use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Receipt extends Model
{
    //use HasFactory;
    protected $fillable = ['idEnterprice','numberReceipt','issueDate','expirationDate','amountPayable','idStatus','idUser'];

    public function enterprise(){
        return $this->belongsTo(Enterprice::class, 'idEnterprice');
    }

    public function user(){
        return $this->belongsTo(User::class, 'idUser');
    }

    public function status(){
        return $this->belongsTo(Parameter::class, 'idStatus');
    }


}


