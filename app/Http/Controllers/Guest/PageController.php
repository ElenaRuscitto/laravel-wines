<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Wine;

class PageController extends Controller
{
    public function index(){
        $wines = Wine::All();
        $wines = Wine::paginate(8);
        return view('home', compact('wines'));
    }

    public function nuovaPagina(){
        return view('nuova-pagina');
    }

}
