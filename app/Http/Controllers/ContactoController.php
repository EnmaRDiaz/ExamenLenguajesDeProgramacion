<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactoController extends Controller
{
    //
    public function viewVerContactos(){
        return view('vercontactos');
    }
}