<x-layout title="Séries">
    <a href="{{ route('series.create')}}" class = "btn btn-dark mb-2">Nova Serie</a>
    @isset($mensagemSucesso)
    <div class="alert alert-success">{{$mensagemSucesso}}</div>
    @endisset
    <ul class ="list-group">
        @foreach($series as $serie)
        <li class="list-group-item d-flex justify-content-between">
            {{$serie->nome}}
                <form action="{{ route('series.destroy', $serie->id)}}" method="POST">
                    @csrf
                    <button class="btn btn-danger btn-sm">Exclude</button>
                </form>
            </li>
        @endforeach
    </ul>
</body>
</html>
</x-layout>