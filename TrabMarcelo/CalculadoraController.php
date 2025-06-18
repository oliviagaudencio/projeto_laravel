namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculadoraController extends Controller
{
    public function solicitarQuantidade($operacao)
    {
        return view('quantidade', ['operacao' => $operacao]);
    }

    public function receberNumeros(Request $request)
    {
        $qtd = $request->input('quantidade');
        $operacao = $request->input('operacao');
        return view('numeros', compact('qtd', 'operacao'));
    }

    public function calcular(Request $request)
    {
        $valores = $request->input('valores');
        $operacao = $request->input('operacao');
        $resultado = null;

        switch ($operacao) {
            case 'soma':
                $resultado = array_sum($valores);
                break;
            case 'subtracao':
                $resultado = array_shift($valores);
                foreach ($valores as $valor) {
                    $resultado -= $valor;
                }
                break;
            case 'multiplicacao':
                $resultado = 1;
                foreach ($valores as $valor) {
                    $resultado *= $valor;
                }
                break;
            case 'divisao':
                $resultado = array_shift($valores);
                foreach ($valores as $valor) {
                    if ($valor == 0) {
                        return "Erro: Divisão por zero";
                    }
                    $resultado /= $valor;
                }
                break;
        }

        return view('resultado', compact('resultado'));
    }
}
