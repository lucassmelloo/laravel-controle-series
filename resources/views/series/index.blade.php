<x-layout title="Séries">
    <a href="/series/criar" class = "btn btn-dark mb-2">Nova Serie</a>
    <ul class ="list-group">
        @foreach($series as $serie)
            <li class="list-group-item">{{$serie}}</li>
        @endforeach
    </ul>
</body>
</html>
</x-layout>