<x-layouts.app title="Locales">
    <h1>Locales</h1>
    @auth
        @if (count($dataLocales))
            <h3>No exite datos</h3>
        @else
            @dump($dataLocales)
            @foreach ($dataLocales as $item)
            <div>
                <a href="/locales/{{$item->id}}">
                    <h3>{{$item->title}}</h3>
                </a>
            </div>
            @endforeach
        @endif
        <a href="/locales/register">Registrar local</a>
    @endauth
    @guest
        <p>Para ver el contenido <a href="/login">Inicie Sesión</a></p>
    @endguest
    
</x-layouts.app>