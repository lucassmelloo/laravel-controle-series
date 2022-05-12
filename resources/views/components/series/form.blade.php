<form action="{{$action}}" method="POST">
    @csrf

    @isset($nome)
    @method('PUT')
    @endisset
    <div class="mb-3">
        <label for="nome" class="form-label">Nome:</label>
        <input 
            type="text" 
            id="nome" 
            name="nome" 
            class="form-control" 
            @isset($nome) value="{{$nome}}" @endisset>
    </div>
    <button class="btn btn-primary" type="submit">Adicionar</button>
    {{-- <a class="btn btn-primary" href="{{route('series.index')}}">Retornar</a> --}}
    </form>