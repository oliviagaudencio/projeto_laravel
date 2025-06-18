<form action="{{ route('form.inputs') }}" method="POST">
    @csrf
    <input type="hidden" name="operacao" value="{{ $operacao }}">
    <label>Quantos números você quer {{ $operacao }}?</label>
    <input type="number" name="quantidade" min="2" required>
    <button type="submit">Enviar</button>
</form>
