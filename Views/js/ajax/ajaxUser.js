$(document).ready(function () {

    var input = document.getElementById('txt_password')
    var imgs = document.getElementById('eyes');
    //we create a flag to see the status
    var flagg = 3;
    imgs.onclick = function () { // onlcick event
        if (flagg == 3) {
            input.type = 'text';

            eyes.src = 'Views/img/eyes2 .png'; //open eyes
            flagg = 4;
        } else {
            input.type = 'password';
            eyes.src = 'Views/img/eyes1 .png'; //close eyes
            flagg = 3;
        }
    }

    var inputt = document.getElementById('txt_pass')
    var imglogin = document.getElementById('eye');
    //we create a flag to see the status
    var flag = 0;
    imglogin.onclick = function () { // onlcick event
        if (flag == 0) {
            inputt.type = 'text';

            eye.src = 'Views/img/eyes2 .png'; //open eyes
            flag = 1;
        } else {
            inputt.type = 'password';
            eye.src = 'Views/img/eyes1 .png'; //close eyes

            flag = 0;
        }
    }


    $("#btn_singUp").click(function (e) {

        // e.preventDefault();

        var txt_user_id = $("#txt_user_id").val();
        if (txt_user_id == '') {
            $("#alert_id").text("✘ Espacio obligatorio");
            $("#alert_id").css({ "color": "red", "font-family": "Times New Roman', Times, serif;" });
            return false;
        } else if (isNaN(txt_user_id)) {
            $("#alert_id").text("✘ No se permiten letras");
            $("#alert_id").css({ "color": "red", "font-family": "Times New Roman', Times, serif;" });
            return false;
        } else if (txt_user_id.length != 9) {
            $("#alert_id").text("✘ Número de Cedula no valido");
            $("#alert_id").css({ "color": "red", "font-family": "Times New Roman', Times, serif;" });
            return false;
        } else {
            $("#alert_id").text("");
        }

        var txt_name = $("#txt_name").val();
        if (txt_name == '') {
            $("#alert_name").text("✘ No se permiten campos vacios");
            $("#alert_name").css({ "color": "red", "font-family": "Times New Roman', Times, serif;" });
            return false;
        } else if (!isNaN(txt_name)) {
            $("#alert_name").text("✘ No se permiten números");
            $("#alert_name").css({ "color": "red", "font-family": "Times New Roman', Times, serif;" });
            return false;
        } else {

            $("#alert_name").text("");
            var txt_surname = $("#txt_surname").val();
            if (txt_surname == '') {
                $("#alert_surname").text("✘ No se permiten campos vacios");
                $("#alert_surname").css({ "color": "red", "font-family": "Times New Roman', Times, serif;" });
                return false;
            } else if (!isNaN(txt_surname)) {
                $("#alert_surname").text("✘ No se permiten números");
                $("#alert_surname").css({ "color": "red", "font-family": "Times New Roman', Times, serif;" });
                return false;
            } else {
                $("#alert_surname").text("");

                var txt_gmail = $("#txt_gmail").val();
                var validacion = /^[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?$/;
                vali = validacion.test(txt_gmail);
                if (vali == '' || vali != true) {
                    $("#alert_email").text("✘ Formato no valido");
                    $("#alert_email").css({ "color": "red", "font-family": "Times New Roman', Times, serif;" });
                    return false;
                } else {
                    $("#alert_email").text("");
                    var txt_password = $("#txt_password").val();
                    if (txt_password == '') {
                        $("#alert_password").text("✘ No se permiten campos vacios");
                        $("#alert_password").css({ "color": "red", "font-family": "Times New Roman', Times, serif;" });
                        return false;
                    } else if (txt_password.length < 8) {
                        $("#alert_password").text("✘ La contraseña debe de tener al menos 8 caracteres");
                        $("#alert_password").css({ "color": "red", "font-family": "Times New Roman', Times, serif;" });
                        return false;
                    } else {
                        $("#alert_password").text("");
                    }


                }

            }
        }


        $.ajax({
            url: "Controllers/singUp.php",
            method: "POST",
            data: { txt_user_id: txt_user_id, txt_name: txt_name, txt_surname: txt_surname, txt_password: txt_password, txt_gmail: txt_gmail },

            success: function (dataresponse, statustext, response) {

                if (statustext == "success") {
                    console.log("exitosamente")


                }
            },
            error: function (request, errorcode, errortext) {
                console.log("errorrrrrr")
            }
        });


    });



    //login


    $("#btn_entrar").click(function (e) {
        //   e.preventDefault();

        var txt_email = $("#txt_email").val();
        var validacion = /^[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?$/;
        vali = validacion.test(txt_email);
        if (vali == '' || vali != true) {
            $("#alert_emaill").text("✘ Formato no valido");
            $("#alert_emaill").css({ "color": "red", "font-family": "Times New Roman', Times, serif;" });
            return false;
        } else {
            $("#alert_emaill").text("");
            var txt_pass = $("#txt_pass").val();
            if (txt_pass == '') {
                $("#alert_passwordd").text("✘ No se permiten campos vacios");
                $("#alert_passwordd").css({ "color": "red", "font-family": "Times New Roman', Times, serif;" });
                return false;
            } else if (txt_pass.length < 8) {
                $("#alert_passwordd").text("✘ La contraseña debe de tener al menos 8 caracteres");
                $("#alert_passwordd").css({ "color": "red", "font-family": "Times New Roman', Times, serif;" });
                return false;
            } else {
                $("#alert_passwordd").text("");
            }

        }
        $.ajax({
            url: "Controllers/validateLogin.php",
            method: "POST",
            data: { txt_email: txt_email, txt_pass: txt_pass },
            success: function (dataresponse, statustext, response) {
                if (statustext == "success") {
                    $("#respuesta").html(dataresponse);
                    if (dataresponse == 0) {
                        Swal.fire({
                            position: 'top-end',
                            icon: 'success',
                            title: 'Iniciando Sesion',
                            showConfirmButton: false,
                            timer: 400
                        })
                        location.href = "index.php?access=U-101";
                    } else if (dataresponse == 1) {
                        Swal.fire({
                            position: 'top-end',
                            icon: 'success',
                            title: 'Iniciando Sesion',
                            showConfirmButton: false,
                            timer: 400
                        })
                        location.href = "index.php?access=A-201";
                    } else if (dataresponse == 2 || dataresponse == null) {
                        alert("Datos no encontrados");
                        location.href = "#";
                    }
                }
            },
            error: function (request, errorcode, errortext) {
                $("#respuesta").html(errorcode);
            }


        });

    });



});