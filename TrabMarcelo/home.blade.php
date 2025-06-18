<!-- resources/views/home.blade.php -->
<h1>Calculadora</h1>
<a href="{{ route('form.quantidade', ['operacao' => 'soma']) }}">Soma</a><br>
<a href="{{ route('form.quantidade', ['operacao' => 'subtracao']) }}">Subtração</a><br>
<a href="{{ route('form.quantidade', ['operacao' => 'multiplicacao']) }}">Multiplicação</a><br>
<a href="{{ route('form.quantidade', ['operacao' => 'divisao']) }}">Divisão</a><br>
