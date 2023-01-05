
<x-layouts.auth>
    <x-slot name='title'>Iniciar Sesión</x-slot>
    <h1>Iniciar Sesión</h1>
    <div class="container pe-5 ">
        <form action="/login" method="POST" class=" container me-5 ms-3 pe-5 ps-2">
            @csrf
            <label for="username" class="form-label">Usuario/Email</label>
            <input type="text" name="username" id="username" class="form-control">
            <label for="password" class="form-label">Contraseña</label>
            <input type="password" name="password" id="password" class="form-control"/>
            <br>
            <input type="submit" value="Iniciar Sesión"  class="btn btn-dark mb-3">
        </form>
        <a href="/register">Crear nueva cuenta</a>
    </div>
</x-layouts.auth>