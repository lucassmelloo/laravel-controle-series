<x-layout title="Séries">
    <a href="/series/criar">Nova Serie</a>
    <ul>
        @foreach($series as $serie)
            <li>{{$serie}}</li>
        @endforeach
    </ul>
</body>
</html>
</x-layout>