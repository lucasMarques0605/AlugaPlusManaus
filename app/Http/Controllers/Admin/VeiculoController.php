<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VeiculoController extends Controller
{
    public function veiculo()
    {
        return view('admin.cadastra_veiculos');
    }
}
