<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RelatorioController extends Controller
{
    public function relatorio()
    {
        return view('admin.relatorios');
    }
}
