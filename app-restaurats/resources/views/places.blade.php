<x-layouts.app title="Ubicaciones">
    <h1>Ubicaciones</h1>
    @auth
        <p>Se encuentra logeado</p>
    @endauth
    @guest
        <p>Para ver el contenido <a href="/login">Inicie Sesión</a></p>
    @endguest
</x-layouts.app>