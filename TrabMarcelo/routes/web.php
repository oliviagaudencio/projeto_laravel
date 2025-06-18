use App\Http\Controllers\CalculadoraController;

Route::get('/', function () {
    return view('home');
});

Route::get('/quantidade/{operacao}', [CalculadoraController::class, 'solicitarQuantidade'])->name('form.quantidade');
Route::post('/inputs', [CalculadoraController::class, 'receberNumeros'])->name('form.inputs');
Route::post('/calcular', [CalculadoraController::class, 'calcular'])->name('form.resultado');
