$(document).ready(function () {


    // update
    $.getJSON("Views/js/json/Event.json", function (data) {
        $.each(data, function (i, event) {


            $("#txt_Id").val(event.id);
            $("#txt_Name").val(event.name);
            $("#txt_Eventname").val(event.nameEvent);
            $("#txt_Desc").val(event.dsc);
            $("#txt_Eventdate").val(event.date);
            $("#txt_Eventtime").val(event.time);
            $("#txt_Eventimg").val(event.img);


        });

    });



    // update profile
    $.getJSON("Views/js/json/profile.json", function (data) {
        $.each(data, function (i, profile) {

            $("#txt_user").val(profile.name + " " + profile.lastname);
            $("#txt_rol").val(profile.rol);
            $("#txt_ide").val(profile.id);
            $("#txt_name").val(profile.name);
            $("#txt_surname").val(profile.lastname);
            $("#txt_date").val(profile.date);
            $("#txt_gender").val(profile.gender);
            $("#txt_gmail").val(profile.email);
            $("#txt_phone").val(profile.phone);


        });

    });
    $.getJSON("Views/js/json/profile.json", function (data) {
        $.each(data, function (i, imageProfileA) {
            var img =
                "<img loading=\"lazy\" src=\"Views/img/profile/" + imageProfileA.img + "\" class=\"w - 100\" alt = \"Image\" style = \"border-radius: 45%; width: 100%; height : 200px; \" /> ";

            $(img).appendTo("#img_profile_A");


        });

    });

    $.getJSON("Views/js/json/profile.json", function (data) {
        $.each(data, function (i, imageProfileA) {
            var img =
                "<img loading=\"lazy\" src=\"Views/img/profile/" + imageProfileA.img + "\" class=\"w - 100\" alt = \"Image\" style = \"border-radius: 45%; width: 100%; height : 200px; \" /> ";

            $(img).appendTo("#img_profile_U");


        });

    });

    // lectura todos las imagenes home
    var url = "Controllers/call_imagesHome.php";
    $.getJSON(url, function (datos) {

        $.each(datos, function (i, images) {

            var tr =
                "<div class=\"swiper-slide w-330px h-330px pe-4 d-flex\">" +
                "<div class=\"card shadow-sm shadow-hover trans-base zoom-bg-img o-hover-all\">" +
                "<div class=\"card-img bg bg-img\" data-bg-img=\".img\">" +
                "<img alt=\"Image\" src=\"Views/img/church/" + images.image + "\" style=\"width: 330px; height : 330px;\"/>" +
                "<div class=\"overlay bg-dark position-absolute o-25 o-50-hover\"></div>" +
                "</div>" +
                "</div>" +
                "</div>";


            $(tr).appendTo("#tbodyimg");

        });

    });

    // lectura todos las imagenes Admin Pueblo
    var url = "Controllers/call_imagesTown.php";
    $.getJSON(url, function (datos) {

        $.each(datos, function (i, imagesTown) {

            var tr =
                "<div class=\"col-12 col-sm-6 col-md-3 d-flex\">" +
                "<div class=\"card-body shadow-sm rounded d-flex flex-column \">" +
                "<div class=\"card-img-top overflow-hidden position-relative\">" +
                "<button class=\"btn btn-link p-0 ms-4 shadow-none\"><a id=\"delete_images\" onclick=\"deleteImages('" + imagesTown.id + "')\"class=\"fa fa-trash fa-lg\" href=\"#\"></a></button>" +
                // "<input type=\"checkbox\" id=\"checkbox_images\">"+
                "<img loading=\"lazy\" src=\"Views/img/church/" + imagesTown.image + "\" alt=\"Image\"" +
                "style=\"width: 100%; height : 250px;\" />" +
                "</div>" +
                "</div>" +
                "</div>";


            $(tr).appendTo("#bodyimgtown");

        });

    });

    // lectura todos las imagenes Admin Jovenes
    var url = "Controllers/call_imagesYoung.php";
    $.getJSON(url, function (datos) {

        $.each(datos, function (i, imagesYoung) {

            var tr =
                "<div class=\"col-12 col-sm-6 col-md-3 d-flex\">" +
                "<div class=\"card-body shadow-sm rounded d-flex flex-column px-lg-10\">" +
                "<div class=\"card-img-top overflow-hidden position-relative\">" +
                "<button class=\"btn btn-link p-0 ms-4 shadow-none\"><a id=\"delete_images\" onclick=\"deleteImages('" + imagesYoung.id + "')\" class=\"fa fa-trash fa-lg\" href=\"#\"></a></button>" +
                // "<input type=\"checkbox\" id=\"checkbox_images\">"+
                "<img loading=\"lazy\" src=\"Views/img/young_people/" + imagesYoung.image + "\"  alt=\"Image\"" +
                "style=\"width: 100%; height : 250px;\" />" +
                "</div>" +
                "</div>" +
                "</div>";


            $(tr).appendTo("#bodyimgyoung");

        });

    });

    // lectura todos las imagenes Admin Ni;os
    var url = "Controllers/call_imagesChildren.php";
    $.getJSON(url, function (datos) {

        $.each(datos, function (i, imagesChildren) {

            var tr =
                "<div class=\"col-12 col-sm-6 col-md-3 d-flex\">" +
                "<div class=\"card-body shadow-sm rounded d-flex flex-column px-lg-10\">" +
                "<div class=\"card-img-top overflow-hidden position-relative\">" +
                "<button class=\"btn btn-link p-0 ms-4 shadow-none\"><a id=\"delete_images\" onclick=\"deleteImages('" + imagesChildren.id + "')\" class=\"fa fa-trash fa-lg\" href=\"#\"></a></button>" +
                // "<input type=\"checkbox\" id=\"checkbox_images\">"+
                "<img loading=\"lazy\" src=\"Views/img/children/" + imagesChildren.image + "\"  alt=\"Image\"" +
                "style=\"width: 100%; height : 250px;\" />" +
                "</div>" +
                "</div>" +
                "</div>";


            $(tr).appendTo("#bodyimgChildren");

        });

    });




    // lectura todos las imagenes User Pueblo
    var url = "Controllers/call_imagesTown.php";
    $.getJSON(url, function (datos) {

        $.each(datos, function (i, imagesTown) {

            var tr =
                "<div class=\"col-12 col-sm-6 col-md-3 d-flex\">" +
                "<div class=\"card-body shadow-sm rounded d-flex flex-column \">" +
                "<div class=\"card-img-top overflow-hidden position-relative\">" +
                // "<input type=\"checkbox\" id=\"checkbox_images\">"+
                "<img loading=\"lazy\" src=\"Views/img/church/" + imagesTown.image + "\" alt=\"Image\"" +
                "style=\"width: 100%; height : 250px;\" />" +
                "</div>" +
                "</div>" +
                "</div>";


            $(tr).appendTo("#bodyUserimgtown");

        });

    });

    // lectura todos las imagenes User Jovenes
    var url = "Controllers/call_imagesYoung.php";
    $.getJSON(url, function (datos) {

        $.each(datos, function (i, imagesYoung) {

            var tr =
                "<div class=\"col-12 col-sm-6 col-md-3 d-flex\">" +
                "<div class=\"card-body shadow-sm rounded d-flex flex-column px-lg-10\">" +
                "<div class=\"card-img-top overflow-hidden position-relative\">" +
                // "<input type=\"checkbox\" id=\"checkbox_images\">"+
                "<img loading=\"lazy\" src=\"Views/img/young_people/" + imagesYoung.image + "\"  alt=\"Image\"" +
                "style=\"width: 100%; height : 250px;\" />" +
                "</div>" +
                "</div>" +
                "</div>";


            $(tr).appendTo("#bodyUserimgyoung");

        });
    });

    // lectura todos las imagenes User Ni;os
    var url = "Controllers/call_imagesChildren.php";
    $.getJSON(url, function (datos) {

        $.each(datos, function (i, imagesChildren) {

            var tr =
                "<div class=\"col-12 col-sm-6 col-md-3 d-flex\">" +
                "<div class=\"card-body shadow-sm rounded d-flex flex-column px-lg-10\">" +
                "<div class=\"card-img-top overflow-hidden position-relative\">" +
                // "<input type=\"checkbox\" id=\"checkbox_images\">"+
                "<img loading=\"lazy\" src=\"Views/img/children/" + imagesChildren.image + "\"  alt=\"Image\"" +
                "style=\"width: 100%; height : 250px;\" />" +
                "</div>" +
                "</div>" +
                "</div>";

            $(tr).appendTo("#bodyUserimgChildren");

        });

    });





    //  // lectura testimonios en home 
    var url = "Controllers/call_testimonialsHome.php";
    $.getJSON(url, function (dato) {

        $.each(dato, function (i, testimonial) {

            var t =
                "<div class=\"col-12 col-md d-flex align-items-stretch\">" +
                "<figure class=\"card testimonial h-100 text-start bg-transparent mb-0\">" +
                "<blockquote class=\" cardsbg blockquote card-body shadow-sm rounded d-flex flex-column px-lg-5\">" +
                "<p class=\"fs-1 text-secondary o-25 mb-0\"><i class=\"fas fa-quote-right\"></i></p>" +
                "<p class=\"fs-6\">" + testimonial.dsc + "</p>" +
                "<p class=\"text-secondary text-decoration-none fs-sm mt-auto mb-3 o-75\">" +
                "&mdash;<span class=\"fw-bold\">" + testimonial.name + " </span> " + testimonial.lastname + "</p>" +
                "</blockquote>" +
                "</figure>" +
                "</div>";


            $(t).appendTo("#tbodytestimonial");

        });

    });


    // lectura para todos los testimonios 
    var url = "Controllers/call_testimonials.php";
    $.getJSON(url, function (dato) {

        $.each(dato, function (i, testimonials) {

            var t =
                "<div class=\"col-12 col-sm-6 col-lg-4 d-flex align-items-stretch\">" +
                "<figure class=\"card testimonial h-100 text-center bg-transparent mb-0\">" +
                "<blockquote class=\"blockquote card-body bg-white shadow-sm rounded d-flex flex-column px-lg-5\">" +
                "<button class=\"btn btn-link p-0 ms-4 shadow-none\"><a id=\"buttondelete\" onclick=\"deleteTestimonial('" + testimonials.idTesti + "')\"class=\"fa fa-trash fa-lg\" href=\"#\"></a></button>" +
                "<p class=\"fs-1 text-secondary o-25 mb-0\"><i class=\"fas fa-quote-right\"></i></p>" +
                "<p class=\"fs-6\">" + testimonials.dsc + "</p>" +
                "<p class=\"text-secondary text-decoration-none fs-sm mt-auto mb-3 o-75\">&mdash;<span class=\"fw-bold\">-" + testimonials.name + "</span> " + testimonials.lastname + "</p>" +
                "</blockquote>" +
                "</figure>" +
                "</div>";


            $(t).appendTo("#bodytestimonial");

        });

    });

    // lectura para todos las consultas
    var url = "Controllers/call_consul.php";
    $.getJSON(url, function (dato) {

        $.each(dato, function (i, consul) {

            var t =
                "<div class=\"col-12 col-sm-6 col-lg-4 d-flex align-items-stretch\">" +
                "<figure class=\"card testimonial h-100 text-center bg-transparent mb-0\">" +
                "<blockquote class=\"blockquote card-body bg-white shadow-sm rounded d-flex flex-column px-lg-5\">" +
                "<button class=\"btn btn-link p-0 ms-4 shadow-none\"><a id=\"buttondelete\" onclick=\"deleteConsul('" + consul.id + "')\"class=\"fa fa-trash fa-lg\" href=\"#\"></a></button>" +
                //   "<input type=\"checkbox\" id=\"check\" >"+
                "<p class=\"fs-1 text-secondary o-25 mb-0\">" + consul.subject + "</p>" +
                "<p class=\"fs-6\">" + consul.consul + "</p>" +
                "<p class=\"text-secondary text-decoration-none fs-sm mt-auto mb-3 o-75\">&mdash;<span class=\"fw-bold\">" + consul.name + "</span>  -" + consul.gmail + "</p>" +
                "</blockquote>" +
                "</figure>" +
                "</div>";

            $(t).appendTo("#bodyconsul");

        });

    });

    // lectura para todos los testimonios User
    var url = "Controllers/call_testimonials.php";
    $.getJSON(url, function (dato) {

        $.each(dato, function (i, testimonials) {

            var t =
                "<div class=\"col-12 col-sm-6 col-lg-4 d-flex align-items-stretch\">" +
                "<figure class=\"card testimonial h-100 text-center bg-transparent mb-0\">" +
                "<blockquote class=\"blockquote card-body bg-white shadow-sm rounded d-flex flex-column px-lg-5\">" +
                "<p class=\"fs-1 text-secondary o-25 mb-0\"><i class=\"fas fa-quote-right\"></i></p>" +
                "<p class=\"fs-6\">" + testimonials.dsc + "</p>" +
                "<p class=\"text-secondary text-decoration-none fs-sm mt-auto mb-3 o-75\">&mdash;<span class=\"fw-bold\">-" + testimonials.name + "</span> " + testimonials.lastname + "</p>" +
                "</blockquote>" +
                "</figure>" +
                "</div>";


            $(t).appendTo("#bodytestimonialUser");

        });

    });


    // lectura para todos los eventos admin
    var url = "Controllers/call_events.php";
    $.getJSON(url, function (dato) {

        $.each(dato, function (i, events) {

            var t =
                "<div class=\"col-12 col-sm-6 col-md-3 d-flex\">" +
                "<div class=\"card\" style=\"width: 18rem;\">" +
                "<img style=\"width: 289px; height: 200px;\" src=\"Views/img/events/" + events.img + "\" class=\"card-img-top\" alt=\"...\">" +
                "<div class=\"card-body\">" +
                "<h5 class=\"card-title\">" + events.nameEvent + "</h5>" +
                "<div class=\"card-footer bg-transparent fs-sm\"><span class=\"o-50\"> Por </span> <a " +
                "class=\"fw-bold o-50 o-100-hover trans-base position-relative zi-20\">" + events.name + "</a><br> <span" +
                "class=\"o-50\"> Fecha: </span>" + events.date + "<a href=\"\"" +
                "class=\"fw-bold o-50 o-100-hover trans-base position-relative zi-20\"></a>" +
                "</div>" +
                "<div class=\"d-grid gap-2 d-md-flex justify-content-md-end\">" +
                "<button class=\"btn btn-link me-md-1 mr-1\" type=\"button\"><a id=\"btn_delete\" onclick=\"deleteEvent('" + events.id + "')\" class=\"fa fa-trash fa-lg\" href=\"#\"></a></button>" +
                "<button class=\"btn btn-link\" type=\"submit\"><a id=\"btn_update\" onclick=\"getEvent('" + events.id + "')\" href=\"index.php?access=A-216\" class=\"fa fa-pen fa-lg\" ></a></button>" +
                "</div>" +
                "</div>" +
                "</div>" +
                "</div>";




            $(t).appendTo("#bodyEvents");

        });

    });


    // lectura para todos los eventos admin
    var url = "Controllers/call_eventsUsers.php";
    $.getJSON(url, function (dato) {

        $.each(dato, function (i, events) {

            var t =
                "<div class=\"col-12 col-sm-6 col-md-3 d-flex\">" +
                "<div class=\"card\" style=\"width: 18rem;\">" +
                "<img style=\"width: 289px; height: 200px;\" src=\"Views/img/events/" + events.img + "\" class=\"card-img-top\" alt=\"...\">" +
                "<div class=\"card-body\">" +
                "<h5 class=\"card-title\">" + events.nameEvent + "</h5>" +
                "<div class=\"card-footer bg-transparent fs-sm\"><span class=\"o-50\"> Por </span> <a " +
                "class=\"fw-bold o-50 o-100-hover trans-base position-relative zi-20\">" + events.name + "</a><br> <span" +
                "class=\"o-50\"> Fecha: </span>" + events.date + "<a href=\"\"" +
                "class=\"fw-bold o-50 o-100-hover trans-base position-relative zi-20\"></a><br><span" +
                "class=\"o-50\"> Hora: </span>" + events.time + "<a href=\"\"" +
                "class=\"fw-bold o-50 o-100-hover trans-base position-relative zi-20\"></a><br><span" +
                "class=\"o-50\"> Descripcion: </span>" + events.dsc + "<a href=\"\"" +
                "class=\"fw-bold o-50 o-100-hover trans-base position-relative zi-20\"></a>" +

                "</div>" +
                "</div>" +
                "</div>" +
                "</div>";


            $(t).appendTo("#bodyEventsUser");

        });

    });


    $("#btn_profile").click(function (e) {

        // var idUser= "305200304";
        var idUser = $("#txt_id").val();

        $.ajax({
            url: "Controllers/get_profile.php",
            method: "POST",
            data: { idUser: idUser },
            success: function (dataresponse, statustext, response) {
                //console.log(response)
                if (statustext == "success") {
                    $("#respuesta").html(dataresponse);

                    // alert(dataresponse)

                } //termina if
            },
            error: function (request, errorcode, errortext) {
                $("#respuesta").html(errorcode);
            }

        });



    });




    $("#btn_query").click(function (e) {


        var txt_names = $("#txt_name").val();
        if (txt_names == '') {
            $("#alert_name").text("✘ Espacio obligatorio");
            $("#alert_name").css({ "color": "red", "font-family": "Times New Roman', Times, serif;" });
            return false;
        } else {
            $("#alert_name").text("");
            var txt_lastnames = $("#txt_lastnames").val();
            if (txt_lastnames == '') {
                $("#alert_lastnames").text("✘ Espacio obligatorio");
                $("#alert_lastnames").css({ "color": "red", "font-family": "Times New Roman', Times, serif;" });
                return false;
            } else {
                $("#alert_lastnames").text("");
                var txt_gmail = $("#txt_gmail").val();
                var validacion = /^[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?$/;
                vali = validacion.test(txt_gmail);
                if (vali == '' || vali != true) {
                    $("#alert_gmail").text("✘ Formato no valido");
                    $("#alert_gmail").css({ "color": "red", "font-family": "Times New Roman', Times, serif;" });
                    return false;
                } else {
                    $("#alert_gmail").text("");
                    var txt_subject = $("#txt_subject").val();
                    if (txt_subject == '') {
                        $("#alert_subject").text("✘ Espacio obligatorio");
                        $("#alert_subject").css({ "color": "red", "font-family": "Times New Roman', Times, serif;" });
                        return false;
                    } else {
                        $("#alert_subject").text("");
                        var txt_text = $('#txt_text').val();
                        if (txt_text == '') {
                            $("#alert_consulta").text("✘ Espacio obligatorio");
                            $("#alert_consulta").css({ "color": "red", "font-family": "Times New Roman', Times, serif;" });
                            return false;
                        } else {
                            $("#alert_consulta").text("");
                        }
                    }
                }
            }
        }

        $.ajax({
            url: "Controllers/insertQuery.php",
            method: "POST",
            data: { txt_names: txt_names, txt_lastnames: txt_lastnames, txt_gmail: txt_gmail, txt_subject: txt_subject, txt_text: txt_text },
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





    $("#btn_testimony").click(function (e) {



        var txt_testimony = $("#txt_testimony").val();
        if (txt_testimony == '') {
            $("#alert_testimony").text("✘ No se permiten campos vacios");
            $("#alert_testimony").css({ "color": "red", "font-family": "Times New Roman', Times, serif;" });
            return false;
        } else if (!isNaN(txt_testimony)) {
            $("#alert_testimony").text("✘ No se permiten números");
            $("#alert_testimony").css({ "color": "red", "font-family": "Times New Roman', Times, serif;" });
            return false;
        } else if (txt_testimony.length > 200) {
            $("#alert_testimony").text("✘ No se permiten mas de 200 caracteres");
            $("#alert_testimony").css({ "color": "red", "font-family": "Times New Roman', Times, serif;" });
            return false;
        } else if (txt_testimony.length < 100) {
            $("#alert_testimony").text("✘ Debes de digitar mas de 100 caracteres");
            $("#alert_testimony").css({ "color": "red", "font-family": "Times New Roman', Times, serif;" });
            return false;
        } else {
            $("#alert_testimony").text("");
            var txt_person = "30528745";

        }


        $.ajax({
            url: "Controllers/insertTestimony.php",
            method: "POST",
            data: { txt_testimony: txt_testimony, txt_person: txt_person },
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


    $("#btn_add").click(function (e) {
        var txt_managerName = $("#txt_event_managerName").val();
        if (txt_managerName == 0) {
            $("#txt_managerName").text("✘ Espacio obligatorio");
            $("#txt_managerName").css({ "color": "red", "font-family": "Times New Roman', Times, serif;" });
            return false;
        } else {
            $("#txt_managerName").text("");

            var txt_nameEvent = $("#txt_event_name").val();
            if (txt_nameEvent == '') {
                $("#txt_eventname").text("✘ Espacio obligatorio");
                $("#txt_eventname").css({ "color": "red", "font-family": "Times New Roman', Times, serif;" });
                return false;
            } else {
                $("#txt_eventname").text("");
                var txt_desc = $("#txt_event_desc").val();
                if (txt_desc == '') {
                    $("#txt_desc").text("✘ Espacio obligatorio");
                    $("#txt_desc").css({ "color": "red", "font-family": "Times New Roman', Times, serif;" });
                    return false;

                } else {
                    $("#txt_desc").text("");
                    var txt_date = $("#txt_event_date").val();
                    if (txt_date == '') {
                        $("#txt_eventdate").text("✘ Espacio obligatorio");
                        $("#txt_eventdate").css({ "color": "red", "font-family": "Times New Roman', Times, serif;" });
                        return false;
                    } else {
                        $("#txt_eventdate").text("");
                        var txt_time = $("#txt_event_time").val();
                        if (txt_time == '') {
                            $("#txt_eventtime").text("✘ Espacio obligatorio");
                            $("#txt_eventtime").css({ "color": "red", "font-family": "Times New Roman', Times, serif;" });
                            return false;
                        } else {
                            $("#txt_eventtime").text("");
                            var event_image_file = $("#event_image_file").val();
                            if (event_image_file == '') {
                                $("#txt_eventimg").text("✘ Espacio obligatorio");
                                $("#txt_eventimg").css({ "color": "red", "font-family": "Times New Roman', Times, serif;" });
                                return false;
                            } else {
                                $("#txt_eventimg").text("");
                            }

                        }
                    }
                }
            }
        }

        $.ajax({
            url: "Controllers/insertEvent.php",
            method: "POST",
            data: { txt_managerName: txt_managerName, txt_nameEvent: txt_nameEvent, txt_desc: txt_desc, txt_date: txt_date, txt_time: txt_time, event_image_file: event_image_file },
            success: function (dataresponse, statustext, response) {
                var event_image_file = $("#event_image_file").prop('files')[0];
                var form_data = new FormData();
                form_data.append('file', event_image_file);

                $.ajax({
                    url: 'Controllers/insertEventFolder.php', // <-- point to server-side PHP script
                    dataType: 'text',  // <-- what to expect back from the PHP script, if anything
                    cache: false,
                    contentType: false,
                    processData: false,
                    data: form_data,
                    method: "POST",
                    success: function (dataresponse, statustext, response) {

                    }


                });

            },
            error: function (request, errorcode, errortext) {
                console.log("errorrrrrr")

            }
        });

    });





    //     var txt_img = $("#txt_img").val();
    //     var sel_category = $("#sel_category").val();



    //     $.ajax({
    //         url: "Controllers/insertImage.php",
    //         method: "POST",
    //         data: { txt_img: txt_img, sel_category: sel_category },
    //         success: function (dataresponse, statustext, response) {
    //             if (statustext == "success") {
    //                 console.log("exitosamente")


    //             }
    //         },
    //         error: function (request, errorcode, errortext) {
    //             console.log("errorrrrrr")

    //         }
    //     });

    // });


    $("#button_update").click(function (e) {


        var txt_Id = $("#txt_Id").val();
        var txt_Name = $("#txt_Name").val();
        var txt_Eventname = $("#txt_Eventname").val();
        var txt_Desc = $("#txt_Desc").val();
        var txt_Eventdate = $("#txt_Eventdate").val();
        var txt_Eventtime = $("#txt_Eventtime").val();
        var txt_Eventimg = $("#txt_Eventimg").val();


        $.ajax({
            url: "Controllers/update_Event.php",
            method: "POST",
            data: {
                txt_Id: txt_Id,
                txt_Name: txt_Name,
                txt_Eventname: txt_Eventname,
                txt_Desc: txt_Desc,
                txt_Eventdate: txt_Eventdate,
                txt_Eventtime: txt_Eventtime,
                txt_Eventimg: txt_Eventimg
            },

            success: function (dataresponse, statustext, response) {

                var img_file = $("#txt_Eventimg").prop('files')[0];
                var form_data = new FormData();
                form_data.append('file', img_file);

                $.ajax({
                    url: 'Controllers/update_Event_Folder.php', // <-- point to server-side PHP script
                    dataType: 'text',  // <-- what to expect back from the PHP script, if anything
                    cache: false,
                    contentType: false,
                    processData: false,
                    data: form_data,
                    method: "POST",
                    success: function (dataresponse, statustext, response) {

                    }


                });
                location.href = "index.php?access=A-207";
            },
            error: function (request, errorcode, errortext) {
                $("#respuesta").html(errorcode);
            }

        });

    });


    $("#btn_saveData").click(function (e) {


        var txt_id = $("#txt_id").val();
        var txt_Name = $("#txt_name").val();
        var txt_surname = $("#txt_surname").val();
        var txt_date = $("#txt_date").val();
        var txt_gender = $("#txt_gender").val();
        // var txt_passwordd= $("#txt_passwordd").val();
        // var txt_admission= $("#txt_admission").val();
        // var txt_rol= $("#txt_rol").val();
        var txt_gmail = $("#txt_gmail").val();
        var txt_phone = $("#txt_phone").val();



        $.ajax({
            url: "Controllers/update_Myprofile.php",
            method: "POST",
            data: {
                txt_id: txt_id,
                txt_Name: txt_Name,
                txt_surname: txt_surname,
                txt_date: txt_date,
                txt_gender: txt_gender,
                txt_gmail: txt_gmail,
                txt_phone: txt_phone
            },

            success: function (dataresponse, statustext, response) {
                if (statustext == "success") {
                    $("#respuesta").html(dataresponse);
                    alert(dataresponse)



                }

            },
            error: function (request, errorcode, errortext) {
                $("#respuesta").html(errorcode);
            }

        });

    });






    // this is to see videos
    var url = "Controllers/call_videos.php";
    $.getJSON(url, function (dato) {

        $.each(dato, function (i, videos) {
            var v =

                "<div class=\"col-4 col-sm-6 col-md-4 col-lg-4 d-flex align-items-stretch\">" +

                "<div class=\"card-body bg-white shadow-sm rounded d-flex flex-column px-lg-10\">" +
                "<iframe class=\"w - 50\" src = \"https://www.youtube.com/embed/" + videos.url + "\" title = \"YouTube video player\"frameborder = \"0\"allow = \"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\"allowfullscreen ></iframe > " +

                "<div class=\"d-grid gap-2 d-md-flex justify-content-center \">" +
                "<button class=\"btn btn-link me-md-1 mr-1 mt-5\" type=\"submit\"><a id=\"btn_delete\" onclick=\"deleteVideo('" + videos.codigo + "')\"class=\"fa fa-trash fa-lg \" style=\"font-size:24px;color:red;\" href=\"#\"></a></button>" +
                "</div>" +


                "</div >" +

                "</div >";


            $(v).appendTo("#all_videos");

        });

    });

    // this is to see lives in admin
    var url = "Controllers/call_lives.php";
    $.getJSON(url, function (dato) {

        $.each(dato, function (i, lives) {
            var v =
                "<div class=\"card-body bg-white shadow-sm rounded d-flex flex-column px-lg-12 mt-5 mb-5\">" +
                "<button class=\"btn btn-link mt-2 mb-5\" type=\"submit\"><a id=\"btn_delete\" onclick=\"deleteLive('" + lives.codigo + "')\"class=\"fa fa-trash fa-lg \" style=\"font-size:24px;color:red;\" href=\"#\"></a></button>" +
                "<div class=\"row cities g-4 mb-0\">" +
                "<iframe width=\"500\" height=\"500\" src=\"https://www.facebook.com/plugins/video.php?href=https%3A%2F%2Fwww.facebook.com%2Fpactodevida%2Fvideos%2F" + lives.url + "%2F&show_text=false&t=0\"  style=\"border: none; overflow:hidden\" scrolling=\"no\" frameborder=\"0\" allowfullscreen = \"true\" allow = \"autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share\"  ></iframe > " +

                "</div>"

            "</div >" +
                $(v).appendTo("#lives_admin");

        });

    });

    // this is to see lives in user
    var url = "Controllers/call_lives.php";
    $.getJSON(url, function (dato) {

        $.each(dato, function (i, lives) {
            var v =
                "<div class=\"card-body bg-white shadow-sm rounded d-flex flex-column px-lg-12 mt-5 mb-5\">" +
                "<div class=\"row cities g-4 mb-0\">" +
                "<iframe width=\"500\" height=\"500\" src=\"https://www.facebook.com/plugins/video.php?href=https%3A%2F%2Fwww.facebook.com%2Fpactodevida%2Fvideos%2F" + lives.url + "%2F&show_text=false&t=0\"  style=\"border: none; overflow:hidden\" scrolling=\"no\" frameborder=\"0\" allowfullscreen = \"true\" allow = \"autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share\"  ></iframe > " +

                "</div>"

            "</div >" +
                $(v).appendTo("#lives_user");

        });

    });

    // this is to see videos user
    var url = "Controllers/call_videos.php";
    $.getJSON(url, function (dato) {

        $.each(dato, function (i, videos) {

            var v =

                "<div class=\"col-12 col-sm-6 col-md-4 col-lg-3 d-flex align-items-stretch\">" +

                "<div class=\"card-body bg-white shadow-sm rounded d-flex flex-column px-lg-10\">" +
                "<iframe class=\"w - 100\" src = \"https://www.youtube.com/embed/" + videos.url + "\" title = \"YouTube video player\"frameborder = \"0\"allow = \"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\"allowfullscreen ></iframe > " +

                "</div >" +

                "</div >";


            $(v).appendTo("#all_videos_user");

        });

    });

    // *********************************EVENTS JQUERY*************************************************************
    $("#btn_video").click(function (e) {
        var txt_video_code = $("#txt_video_code").val();
        if (txt_video_code == '') {
            $("#lb_txt_video_code").text("✘ Espacio obligatorio el codigo");
            $("#lb_txt_video_code").css({ "color": "red", "font-family": "Times New Roman', Times, serif;" });
            return false;
        }
        var txt_category = $("#txt_category").val();
        $.ajax({
            url: "Controllers/insertVideo.php",
            method: "POST",
            data: { txt_video_code: txt_video_code, txt_category: txt_category },
            success: function (dataresponse, statustext, response) {

                Swal.fire({
                    position: 'top-end',
                    icon: 'success',
                    title: 'Video Insertado',
                    showConfirmButton: false,
                    timer: 400
                })

            },
            error: function (request, errorcode, errortext) {
                console.log("errorrrrrr")
            }
        });

    });

    $("#btn_live_video").click(function (e) {
        var txt_video_code_live = $("#txt_video_code_live").val();
        if (txt_video_code_live == '') {
            $("#lb_video_code_live").text("✘ Espacio obligatorio el codigo");
            $("#lb_video_code_live").css({ "color": "red", "font-family": "Times New Roman', Times, serif;" });
            return false;
        }
        var txt_category_live = $("#txt_category_live").val();
        $.ajax({
            url: "Controllers/insertVideoLive.php",
            method: "POST",
            data: { txt_video_code_live: txt_video_code_live, txt_category_live: txt_category_live },
            success: function (dataresponse, statustext, response) {

                Swal.fire({
                    position: 'top-end',
                    icon: 'success',
                    title: 'Video Insertado',
                    showConfirmButton: false,
                    timer: 400
                })

            },
            error: function (request, errorcode, errortext) {
                console.log("errorrrrrr")
            }
        });

    });

    $("#btn_Insertimg").click(function (e) {
        // e.preventDefault();
        var img_file_name = $("#img_file").val();
        var sel_category = $("#sel_category").val();
        $.ajax({
            url: "Controllers/insert_imageBD.php",
            method: "POST",
            data: { img_file_name: img_file_name, sel_category: sel_category },
            success: function (dataresponse, statustext, response) {
                var img_file = $("#img_file").prop('files')[0];
                var form_data = new FormData();
                form_data.append('file', img_file);

                $.ajax({
                    url: 'Controllers/insertImage.php', // <-- point to server-side PHP script 
                    dataType: 'text',  // <-- what to expect back from the PHP script, if anything
                    cache: false,
                    contentType: false,
                    processData: false,
                    data: form_data,
                    method: "POST",
                    success: function (dataresponse, statustext, response) {

                    }


                });
            },
            error: function (request, errorcode, errortext) {
                console.log("errorrrrrr")

            }
        });

    });

    $("#btn_image").click(function (e) {


        // e.preventDefault();
        var img_file_profile = $("#image_profile").val();
        var txt_id = $("#txt_id").val();

        // alert(txt_id)


        $.ajax({
            url: "Controllers/update_imageprofileBD.php",
            method: "POST",
            data: { img_file_profile: img_file_profile, txt_id: txt_id },
            success: function (dataresponse, statustext, response) {

                var img_file = $("#image_profile").prop('files')[0];
                var form_data = new FormData();
                form_data.append('file', img_file);

                $.ajax({
                    url: 'Controllers/insertImageProfile.php', // <-- point to server-side PHP script 
                    dataType: 'text',  // <-- what to expect back from the PHP script, if anything
                    cache: false,
                    contentType: false,
                    processData: false,
                    data: form_data,
                    method: "POST",
                    success: function (dataresponse, statustext, response) {

                    }


                });
            },
            error: function (request, errorcode, errortext) {
                console.log("errorrrrrr")

            }
        });

    });




});

function deleteTestimonial(idTesti) {

    $.ajax({
        url: "Controllers/deleteTestimonial.php",
        method: "POST",
        data: { idTesti: idTesti },
        success: function (dataresponse, statustext, response) {
            if (statustext == "success") {
                $("#respuesta").html(dataresponse);

                $("#bodytestimonial").html("");
                // lectura para todos los testimonios 
                var url = "Controllers/call_testimonials.php";
                $.getJSON(url, function (dato) {

                    $.each(dato, function (i, testimonials) {

                        var t =
                            "<div class=\"col-12 col-sm-6 col-lg-4 d-flex align-items-stretch\">" +
                            "<figure class=\"card testimonial h-100 text-center bg-transparent mb-0\">" +
                            "<blockquote class=\"blockquote card-body bg-white shadow-sm rounded d-flex flex-column px-lg-5\">" +
                            "<button class=\"btn btn-link p-0 ms-4 shadow-none\"><a id=\"buttondelete\" onclick=\"deleteTestimonial('" + testimonials.idTesti + "')\"class=\"fa fa-trash fa-lg\" href=\"#\"></a></button>" +
                            "<input type=\"checkbox\" id=\"check\" >" +
                            "<p class=\"fs-1 text-secondary o-25 mb-0\"><i class=\"fas fa-quote-right\"></i></p>" +
                            "<p class=\"fs-6\">" + testimonials.dsc + "</p>" +
                            "<p class=\"text-secondary text-decoration-none fs-sm mt-auto mb-3 o-75\">&mdash;<span class=\"fw-bold\">-" + testimonials.name + "</span> " + testimonials.lastname + "</p>" +
                            "</blockquote>" +
                            "</figure>" +
                            "</div>";


                        $(t).appendTo("#bodytestimonial");

                    });

                });

            }
        },
        error: function (request, errorcode, errortext) {

        }

    });
}


function deleteEvent(idEvent) {

    $.ajax({
        url: "Controllers/deleteEvents.php",
        method: "POST",
        data: { idEvent: idEvent },
        success: function (dataresponse, statustext, response) {
            if (statustext == "success") {
                $("#respuesta").html(dataresponse);

                $("#bodyEvents").html("");
                // lectura para todos los eventos admin
                var url = "Controllers/call_events.php";
                $.getJSON(url, function (dato) {

                    $.each(dato, function (i, events) {

                        var t =
                            "<div class=\"col-12 col-sm-6 col-md-3 d-flex\">" +
                            "<div class=\"card\" style=\"width: 18rem;\">" +
                            "<img style=\"width: 289px; height: 200px;\" src=\"Views/img/events/" + events.img + "\" class=\"card-img-top\" alt=\"...\">" +
                            "<div class=\"card-body\">" +
                            "<h5 class=\"card-title\">" + events.nameEvent + "</h5>" +
                            "<div class=\"card-footer bg-transparent fs-sm\"><span class=\"o-50\"> Por </span> <a " +
                            "class=\"fw-bold o-50 o-100-hover trans-base position-relative zi-20\">" + events.name + "</a><br> <span" +
                            "class=\"o-50\"> Fecha: </span>" + events.date + "<a href=\"\"" +
                            "class=\"fw-bold o-50 o-100-hover trans-base position-relative zi-20\"></a>" +
                            "</div>" +
                            "<div class=\"d-grid gap-2 d-md-flex justify-content-md-end\">" +
                            "<button class=\"btn btn-link me-md-1 mr-1\" type=\"button\"><a id=\"btn_delete\" onclick=\"deleteEvent('" + events.id + "')\" class=\"fa fa-trash fa-lg\" href=\"#\"></a></button>" +
                            "<button class=\"btn btn-link\" type=\"button\"><a data-bs-toggle=\"modal\" data-bs-target=\"#new_event\" id=\"\" class=\"fa fa-pen fa-lg\" href=\"#\"></a></button>" +
                            "</div>" +
                            "</div>" +
                            "</div>" +
                            "</div>";


                        $(t).appendTo("#bodyEvents");

                    });

                });

            }
        },
        error: function (request, errorcode, errortext) {

        }

    });
}

function deleteConsul(idConsul) {

    $.ajax({
        url: "Controllers/deleteConsul.php",
        method: "POST",
        data: { idConsul: idConsul },
        success: function (dataresponse, statustext, response) {
            if (statustext == "success") {
                $("#respuesta").html(dataresponse);

                $("#bodyconsul").html("");
                // lectura para todos las consultas
                var url = "Controllers/call_consul.php";
                $.getJSON(url, function (dato) {

                    $.each(dato, function (i, consul) {

                        var t =
                            "<div class=\"col-12 col-sm-6 col-lg-4 d-flex align-items-stretch\">" +
                            "<figure class=\"card testimonial h-100 text-center bg-transparent mb-0\">" +
                            "<blockquote class=\"blockquote card-body bg-white shadow-sm rounded d-flex flex-column px-lg-5\">" +
                            "<button class=\"btn btn-link p-0 ms-4 shadow-none\"><a id=\"buttondelete\" onclick=\"deleteConsul('" + consul.id + "')\"class=\"fa fa-trash fa-lg\" href=\"#\"></a></button>" +
                            "<input type=\"checkbox\" id=\"check\" >" +
                            "<p class=\"fs-1 text-secondary o-25 mb-0\">" + consul.subject + "</p>" +
                            "<p class=\"fs-6\">" + consul.consul + "</p>" +
                            "<p class=\"text-secondary text-decoration-none fs-sm mt-auto mb-3 o-75\">&mdash;<span class=\"fw-bold\">" + consul.name + "</span>  -" + consul.gmail + "</p>" +
                            "</blockquote>" +
                            "</figure>" +
                            "</div>";

                        $(t).appendTo("#bodyconsul");

                    });

                });

            }
        },
        error: function (request, errorcode, errortext) {

        }

    });
}


function deleteImages(id) {

    $.ajax({
        url: "Controllers/deleteImages.php",
        method: "POST",
        data: { id: id },
        success: function (dataresponse, statustext, response) {
            if (statustext == "success") {
                $("#respuesta").html(dataresponse);

                $("#bodyimgtown").html("");
                $("#bodyimgyoung").html("");
                $("#bodyimgChildren").html("");

                // lectura todos las imagenes Admin Pueblo
                var url = "Controllers/call_imagesTown.php";
                $.getJSON(url, function (datos) {

                    $.each(datos, function (i, imagesTown) {

                        var tr =
                            "<div class=\"col-12 col-sm-6 col-md-3 d-flex\">" +
                            "<div class=\"card-body shadow-sm rounded d-flex flex-column \">" +
                            "<div class=\"card-img-top overflow-hidden position-relative\">" +
                            "<button class=\"btn btn-link p-0 ms-4 shadow-none\"><a id=\"delete_images\" onclick=\"deleteImages('" + imagesTown.id + "')\"class=\"fa fa-trash fa-lg\" href=\"#\"></a></button>" +
                            // "<input type=\"checkbox\" id=\"checkbox_images\">"+
                            "<img loading=\"lazy\" src=\"Views/img/church/" + imagesTown.image + "\" alt=\"Image\"" +
                            "style=\"width: 100%; height : 250px;\" />" +
                            "</div>" +
                            "</div>" +
                            "</div>";


                        $(tr).appendTo("#bodyimgtown");

                    });

                });

                // lectura todos las imagenes Admin Jovenes
                var url = "Controllers/call_imagesYoung.php";
                $.getJSON(url, function (datos) {

                    $.each(datos, function (i, imagesYoung) {

                        var tr =
                            "<div class=\"col-12 col-sm-6 col-md-3 d-flex\">" +
                            "<div class=\"card-body shadow-sm rounded d-flex flex-column px-lg-10\">" +
                            "<div class=\"card-img-top overflow-hidden position-relative\">" +
                            "<button class=\"btn btn-link p-0 ms-4 shadow-none\"><a id=\"delete_images\" onclick=\"deleteImages('" + imagesYoung.id + "')\" class=\"fa fa-trash fa-lg\" href=\"#\"></a></button>" +
                            // "<input type=\"checkbox\" id=\"checkbox_images\">"+
                            "<img loading=\"lazy\" src=\"Views/img/young_people/" + imagesYoung.image + "\"  alt=\"Image\"" +
                            "style=\"width: 100%; height : 250px;\" />" +
                            "</div>" +
                            "</div>" +
                            "</div>";


                        $(tr).appendTo("#bodyimgyoung");

                    });

                });

                // lectura todos las imagenes Admin Ni;os
                var url = "Controllers/call_imagesChildren.php";
                $.getJSON(url, function (datos) {

                    $.each(datos, function (i, imagesChildren) {

                        var tr =
                            "<div class=\"col-12 col-sm-6 col-md-3 d-flex\">" +
                            "<div class=\"card-body shadow-sm rounded d-flex flex-column px-lg-10\">" +
                            "<div class=\"card-img-top overflow-hidden position-relative\">" +
                            "<button class=\"btn btn-link p-0 ms-4 shadow-none\"><a id=\"delete_images\" onclick=\"deleteImages('" + imagesChildren.id + "')\" class=\"fa fa-trash fa-lg\" href=\"#\"></a></button>" +
                            // "<input type=\"checkbox\" id=\"checkbox_images\">"+
                            "<img loading=\"lazy\" src=\"Views/img/children/" + imagesChildren.image + "\"  alt=\"Image\"" +
                            "style=\"width: 100%; height : 250px;\" />" +
                            "</div>" +
                            "</div>" +
                            "</div>";


                        $(tr).appendTo("#bodyimgChildren");

                    });

                });


            }
        },
        error: function (request, errorcode, errortext) {

        }

    });
}


// function previewFile() {
//     var preview = document.querySelector('img');
//     var file    = document.querySelector('input[type=file]').files[0];
//     var reader  = new FileReader();

//     reader.onloadend = function () {
//       preview.src = reader.result;
//     }

//     if (file) {
//       reader.readAsDataURL(file);
//     } else {
//       preview.src = "";
//     }
// }


function getEvent(id) {

    $.ajax({
        url: "Controllers/get_event.php",
        method: "POST",
        data: { id: id },
        success: function (dataresponse, statustext, response) {
            //console.log(response)
            if (statustext == "success") {
                $("#respuesta").html(dataresponse);

            } //termina if
        },
        error: function (request, errorcode, errortext) {
            $("#respuesta").html(errorcode);
        }

    });

}
function deleteVideo(idVideo) {
    var id_Video = idVideo;

    if (id_Video == '') {
        alert('No se pudo borrar el video');
    }
    $.ajax({
        url: "Controllers/deleteVideo.php",
        method: "POST",
        data: { id_Video: id_Video },
        success: function (response) {
            $("#all_videos").html("");
            // this is to see videos
            var url = "Controllers/call_videos.php";
            $.getJSON(url, function (dato) {

                $.each(dato, function (i, videos) {

                    var v =

                        "<div class=\"col-4 col-sm-6 col-md-4 col-lg-4 d-flex align-items-stretch\">" +

                        "<div class=\"card-body bg-white shadow-sm rounded d-flex flex-column px-lg-10\">" +
                        "<iframe class=\"w - 50\" src = \"https://www.youtube.com/embed/" + videos.url + "\" title = \"YouTube video player\"frameborder = \"0\"allow = \"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\"allowfullscreen ></iframe > " +

                        "<div class=\"d-grid gap-2 d-md-flex justify-content-center \">" +
                        "<button class=\"btn btn-link me-md-1 mr-1 mt-5\" type=\"submit\"><a id=\"btn_delete\" onclick=\"deleteVideo('" + videos.codigo + "')\"class=\"fa fa-trash fa-lg \" style=\"font-size:24px;color:red;\" href=\"#\"></a></button>" +
                        "</div>" +


                        "</div >" +

                        "</div >";


                    $(v).appendTo("#all_videos");

                });

            });
        },
        error: function (request, errorcode, errortext) {
            console.log("errorrrrrr")

        }
    });
    return true;
}

function deleteLive(idLive) {
    var id_live = idLive;

    if (id_live == '') {
        alert('No se pudo borrar el video');
    }
    $.ajax({
        url: "Controllers/deleteLives.php",
        method: "POST",
        data: { id_live: id_live },
        success: function (response) {
            $("#lives_admin").html("");
            // this is to see videos
            // this is to see lives
            var url = "Controllers/call_lives.php";
            $.getJSON(url, function (dato) {

                $.each(dato, function (i, lives) {
                    var v =
                        "<div class=\"card-body bg-white shadow-sm rounded d-flex flex-column px-lg-12\">" +
                        "<button class=\"btn btn-link mt-2 mb-5\" type=\"submit\"><a id=\"btn_delete\" onclick=\"deleteLive('" + lives.codigo + "')\"class=\"fa fa-trash fa-lg \" style=\"font-size:24px;color:red;\" href=\"#\"></a></button>" +
                        "<div class=\"row cities g-4 mb-0\">" +
                        "<iframe width=\"500\" height=\"500\" src=\"https://www.facebook.com/plugins/video.php?href=https%3A%2F%2Fwww.facebook.com%2Fpactodevida%2Fvideos%2F" + lives.url + "%2F&show_text=false&t=0\"  style=\"border: none; overflow:hidden\" scrolling=\"no\" frameborder=\"0\" allowfullscreen = \"true\" allow = \"autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share\"  ></iframe > " +

                        "</div>"

                    "</div >" +
                        $(v).appendTo("#lives_admin");

                });

            });
        },
        error: function (request, errorcode, errortext) {
            console.log("errorrrrrr")

        }
    });
    return true;
}






