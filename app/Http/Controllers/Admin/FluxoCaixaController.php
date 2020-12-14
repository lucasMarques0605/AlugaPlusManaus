<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FluxoCaixaController extends Controller
{
    public function fluxocaixa()
    {
        return view('admin.fluxo_caixa');
    }
}
