<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pacto de Vida</title>

    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@300&family=Zen+Old+Mincho&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@300&family=Oswald&family=Zen+Old+Mincho&display=swap"
        rel="stylesheet">

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="Views/css/estilos.css">
    <script src="Views/js/jquery-3.6.0.min.js"></script>
    <script src="Views/js/ajax/ajax.js"></script>



</head>

<body>


    <main>
        <!--Cuadros de iniciar sesion o registrarse-->
        <div class="contenedor__principal">
            <h2 id="title">IGLESIA PACTO DE VIDA</h2><br>
            <div class="contenedor__inferior">
                <div class="contenedor__inferior-login">
                    <h3>Si tienes una cuenta:</h3>
                    <p>Inicia sesión para entrar en la página</p>
                    <button id="btn__iniciar-sesion">Iniciar Sesión</button>
                </div>
                <div class="contenedor__inferior-register">
                    <h3>¿Deseas crear una cuenta?</h3>
                    <p>Regístrate para que acceder a la página</p>
                    <button id="btn__registrarse">Regístrarse</button>
                </div>
            </div>

            <!--Formularios de datos-->
            <div class="contenedor__login-register">
                <!--Login-->
                <form action="" method="POST" class="formulario__login">
                    <h2>Iniciar Sesión</h2>
                    <input type="text" placeholder="Correo Electronico" id="txt_email">
                    <p id="alert_emaill"></p>

                    <div class="campoo">
                        <input type="password" placeholder="Contraseña" id="txt_pass">
                        <img src="Views/img/eyes1 .png" alt="" id="eye">
                        <p id="alert_passwordd"></p>
                    </div>

                    <button type="submit" id="btn_entrar">Entrar</button>
                    <br>
                    <a class="btn rounded-pill shadow-none me-2 px-4 fw-bold " href="index.php?access=A-201">Menu
                        principal</a>
                </form>

                <!--Register-->
                <form action="" method="POST" class="formulario__register">

                    <h2>Regístrarse</h2>

                    <input type="number" placeholder="Cedula" id="txt_user_id">
                    <p id="alert_id"></p>

                    <label>Rol</label>
                    <select name="select" id="txt_rol">
                        <option value="1">Administrador</option>
                        <option value="0">Usuario</option>
                    </select>
                    <p id="alert_rol"></p>


                    <input type="text" placeholder="Nombre" id="txt_name">
                    <p id="alert_name"></p>

                    <input type="text" placeholder="Apellidos" id="txt_surname">
                    <p id="alert_surname"></p>

                    <input type="text" placeholder="Correo Electronico" id="txt_gmail">
                    <p id="alert_email"></p>

                    <div class="campo">
                        <input type="password" placeholder="Contraseña" id="txt_password">
                        <img src="Views/img/eyes1.png" alt="" id="eyes">
                        <p id="alert_password"></p>
                    </div>

                    <button class="btn btn-info" id="btn_singUp" type="submit">Registrarse</button>
                    <br>
                    <a class="rounded-pill shadow-none me-2 px-4 fw-bold" href="index.php?access=A-201">Menu
                        principal</a>

                </form>
            </div>
        </div>


    </main>

    <script src="Views/js/script.js"></script>
</body>

</html>