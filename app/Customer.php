<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    //deklarasi
    protected $table = 'customer';

    //deklarasi atribut
    protected $fillable = [
        'customer_id',
        'name',
        'address'
    ];
    
}
