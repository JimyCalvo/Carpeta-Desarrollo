<x-layouts.auth title="Registrar" class="text-center ms-2 me-5">
    <h3>Registrar</h3>
    <form class="container pe-5 ps-5 me-5 ms-2 text-center"action="/register" method="POST">
        @csrf
        <input type="text" placeholder="Nombre/s" name="name" class="form-control mb-3">
        <input type="text" placeholder="Apellido/s"name="lastname" class="form-control mb-3">
        <input type="email" placeholder="Correo Electronico" name="email" class="form-control mb-3">
        <input type="text" placeholder="Nombre de Usuario" name="username" class="form-control mb-2">
        <input type= "telf" placeholder="Teléfono" name="telf"class="form-control mb-3">
        <input type="password" placeholder="Contraseña" name="password" class="form-control mb-3">
        <input type="password" placeholder="Confirma Contraseña" name="password_confirmation" class="form-control mb-2">
        
        <div class="row">
            <div class="col-3 text-end" >
                <label for="is_enabled"><b>Registrar Negocio:  </b></label>
            </div>
            <div class="col-9 form-switch text-start">
                <input class="form-check-input" type="checkbox" role="switch"  id="is_enabled" name="is_enabled" value="1"/>
            </div>
        </div>
        <br>
        <input class="btn btn-dark mb-3" type="submit" value="Regisstrar">
    </form>
    
</x-layouts.auth>