<div id="container-forms" class="container-fluid">
        <div id="container-login" class="container-form">
            <h1>Entrar a la web</h1>
            <!--formulario de inicio de sesion -->
            <form action="#" method="POST">
                <div class="form-group">
                    <label for="email">Correo</label>
                    <input type="email" class="form-control" placeholder="Escribe tu correo">
                </div>
                <div class="form-group">
                    <label for="password">Contraseña</label>
                    <input type="password" class="form-control" placeholder="Escribe tu contraseña">
                </div>
                <input type="submit" class="btn btn-success btn-lg" value="ENTRAR">
            </form>
        </div>
        <div id="container-register" class="container-form">
            <h1>Registrarse en la web</h1>
            <!--formulario de registro -->
            <form action="#" method="POST">

                <div class="form-group form-check">
                    <input class="form-check-input" type="checkbox" id="interprete-check">
                    <label id="label-interprete" class="form-check-label" for="interprete">
                        Cuenta Interprete
                    </label>
                    <input class="form-check-input" type="checkbox" id="sordo-check">
                    <label class="form-check-label" for="sordo">
                        Cuenta Sordo
                    </label>
                </div>

                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-text">Nombre</div>
                        <input type="text" class="form-control" placeholder="Escribe tu nombre">
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-text">Apellidos</div>
                        <input type="text" class="form-control" placeholder="Escribe tus apellidos">
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-text">Correo</div>
                        <input type="email" class="form-control" placeholder="Escribe tu correo">
                    </div>
                </div>
                <div class="form-group">
                   <div class="input-group">
                        <div class="input-group-text">Contraseña</div>
                        <input type="password" class="form-control" placeholder="Escribe tu contraseña">
                   </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-text">Ciudad</div>
                        <input type="text" class="form-control" placeholder="Escribe tu ciudad">
                    </div>
                </div>
                <div class="form-group">
                    <label for="">Foto para perfil</label>
                    <input type="file" values="subir">
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-success btn-lg" value="REGISTRARSE">
                </div>
            </form>
        </div>
    </div>