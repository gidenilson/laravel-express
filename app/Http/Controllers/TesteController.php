<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class TesteController extends Controller
{
    public function index($nome) {
        return view('test.index', ['nome'=>$nome]);
        
    }
}