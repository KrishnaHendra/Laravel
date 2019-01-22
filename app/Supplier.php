<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    //deklarasi
    protected $table = 'supplier';

    //deklarasi atribut
    protected $fillable = [
        'supplier_id', 
        'supplier_name', 
        'supplier_address'
    ];
}
