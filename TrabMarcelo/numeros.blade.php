<form action="{{ route('form.resultado') }}" method="POST">
    @csrf
    <input type="hidden" name="operacao" value="{{ $operacao }}">
    @for($i = 0; $i < $qtd; $i++)
        <label>Número {{ $i+1 }}:</label>
        <input type="number" name="valores[]" step="any" required><br>
    @endfor
    <button type="submit">Calcular</button>
</form>
