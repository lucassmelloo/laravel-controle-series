<x-layout title="Nova Serie">
    <form action="{{route('series.store')}}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="nome" class="form-label">Nome:</label>
        <input type="text" id="nome" name="nome" class="form-control">
    </div>
    <button class="btn btn-primary" type="submit">Adicionar</button>
    <a class="btn btn-primary" href="{{route('series.index')}}">Retornar</a>
    </form>
</x-layout>