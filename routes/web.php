<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\FluxoCaixaController;
use App\Http\Controllers\Admin\RelatorioController;
use App\Http\Controllers\Admin\UsuarioController;
use App\Http\Controllers\Admin\VeiculoController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => ['auth:sanctum', 'verified']], function() {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
    Route::get('/perfil', [UsuarioController::class, 'perfil'])->name('perfil');
    Route::get('/relatorios', [RelatorioController::class, 'relatorio'])->name('relatorio');
    Route::get('/fluxo_caixa', [FluxoCaixaController::class, 'fluxocaixa'])->name('fluxocaixa');
    Route::get('/cadastra_veiculo', [VeiculoController::class, 'veiculo'])->name('veiculo');
});

