<x-layout title="Séries">
    <a href="{{ route('series.create')}}" class = "btn btn-dark mb-2">Nova Serie</a>
    @isset($mensagemSucesso)
    <div class="alert alert-success">{{$mensagemSucesso}}</div>
    @endisset
    <ul class ="list-group">
        @foreach($series as $serie)
        <li class="list-group-item d-flex justify-content-between">
            {{$serie->nome}}
            <span class="d-flex">
                <a href="{{ route('series.edit', $serie->id) }}" class="btn btn-primary btn-sm">Edit</a>
                <form action="{{ route('series.destroy', $serie->id)}}" class="ms-2" method="POST">
                    @csrf
                    <button class="btn btn-danger btn-sm">Exclude</button>
                </form>
            </span>
            </li>
        @endforeach
    </ul>
</body>
</html>
</x-layout>