<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Supplier;

class SupplierController extends Controller
{
     // buat fungsi baru untuk index
     function index(){
        $supplier = Supplier::get(['supplier_id', 'supplier_name', 'supplier_address']);
        // var_dump($supplier);
        return view('supplier.index', compact('supplier'));
}
}