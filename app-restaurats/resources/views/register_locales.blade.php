
<x-layouts.app title="Registrar local">
    <h1>Registrar Local</h1>
    @auth
        <div id = "xd">
            <form action="" >
                <label class="label-control">Razon social</label>
                <input  class="form-control" type="text" name="RazonSocial">
                <br>
                <label>Nombre del Restaurante</label>
                <input  class="form-control" type="text" name="nombreRestaurante">
                <br>
                <label>Direccion del local</label>
                <input  class="form-control" type="text" name="direccionLocal">
                <br>
                <label>Gerente del local</label>
                <input  class="form-control" type="text" name="nombreGerente">
                <br>
                <label>Foto</label>
                <input  class="form-control" type="file" name="fotoLocal">
                <br>
                <label><b>Tipo de Local</b></label>
                <br>
                <label> Restaurante:
                    <input type="radio" name="categoriaLocal" value="Restaurante">
                </label>
                <label> Comida Rapida:
                    <input type="radio" name="categoriaLocal" value="Comida Rapida">
                </label>
                <label> Cafeteria:
                    <input type="radio" name="categoriaLocal" value="Cafeteria">
                </label>
                <label> Bar:
                    <input type="radio" name="categoriaLocal" value="Bar">
                </label>
                <label> Miselanea:
                    <input type="radio" name="categoriaLocal" value="Miselanea">
                </label>
                <br>
                <br>
                <label>Direccion de E-mail</label>
                <input  class="form-control" type="text" name="E-mail">
                <br>
                <div class="container text-center" id="botones">
                <button  class="btn btn-outline-success" type="submit">Registrar</button>
                <button class="btn btn-outline-danger" type="cleanForm">Borrar</button>
                </div>
            </form>
        </div>
    @endauth
    @guest
        <p>Para ver el contenido <a href="/login">Inicie Sesión</a></p>
    @endguest
</x-layouts.app>


