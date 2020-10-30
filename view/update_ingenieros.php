<?php

if(!isset($_GET["idPersona"])){
    echo '<script>location.href = "ingenieros.php";</script>';
}else{
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('./layout/head.php'); ?>

</head>

<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

        <!-- start header -->
        <?php include('./layout/header.php') ?>
        <!-- end header -->
        <!-- start menu -->
        <?php include('./layout/menu.php') ?>
        <!-- end menu -->
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper" style="background-color: #FFFFFF;">
            <!-- Main content -->
            <section class="content">

                <div class="row">

                    <h4 style="padding-left:1em;"><i class="fa fa-user"></i> Actualizar Datos del Ingeniero(a) <span
                            id="Load_date"></span></h4>
                    <div>
                        <form action="">

                            <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12"
                                style="text-align: center; padding-top:1em;">
                                <img width="70" src="images/ayuda.png">
                                <!-- <label for="Foto">Subir foto</label>
                                <input type="file" id="Foto" name="Foto"> -->
                            </div>
                            <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12" style="padding-top:1em;">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <label for="dni">DNI: <i
                                                    class="fa fa-fw fa-asterisk text-danger"></i></label>
                                            <input id="dni" type="text" name="Dni" class="form-control"
                                                placeholder="DNI" required="" maxlength="8" minlength="8"
                                                value="<?php echo  $_GET["idPersona"];?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <div class="form-group">
                                            <label for="Nombres">Nombres: <i
                                                    class="fa fa-fw fa-asterisk text-danger"></i></label>
                                            <input id="Nombres" type="text" name="Nombres" class="form-control"
                                                placeholder="Nombres" required="">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <div class="form-group">
                                            <label for="Apellidos">Apellidos: <i
                                                    class="fa fa-fw fa-asterisk text-danger"></i></label>
                                            <input id="Apellidos" type="text" name="Apellidos" class="form-control"
                                                placeholder="Apellidos" required="">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                        <div class="form-group">
                                            <label for="Genero">Genero: <i
                                                    class="fa fa-fw fa-asterisk text-danger"></i></label>
                                            <select id="Genero" class="form-control">
                                                <option value="M">Maculino</option>
                                                <option value="F">Femenino</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                        <div class="form-group">
                                            <label for="Nacimiento">Nacimiento: <i
                                                    class="fa fa-fw fa-asterisk text-danger"></i></label>
                                            <input id="Nacimiento" type="date" name="Nacimiento" class="form-control"
                                                required="">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                        <div class="form-group">
                                            <label for="Estado_civil">Estado civil: <i
                                                    class="fa fa-fw fa-asterisk text-danger"></i></label>
                                            <select id="Estado_civil" class="form-control">
                                                <option value="S">Soltero/a</option>
                                                <option value="C">Casado/a</option>
                                                <option value="V">Viudo/a</option>
                                                <option value="D">Divorciado/a</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <div class="form-group">
                                            <label for="Ruc">RUC (opcional):</label>
                                            <input id="Ruc" type="text" name="Ruc" class="form-control"
                                                placeholder="número de RUC">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <div class="form-group">
                                            <label for="Razon_social">Razon social:</label>
                                            <input id="Razon_social" type="text" name="Razon_social"
                                                class="form-control" placeholder="Razon social">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
                                        <div class="form-group">
                                            <label for="Codigo">Codigo CIP: <i
                                                    class="fa fa-fw fa-asterisk text-danger"></i></label>
                                            <input id="Codigo" type="number" name="Codigo" class="form-control"
                                                placeholder="Codigo" required="">
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                        <div class="form-group">
                                            <label for="Tramite">Tramite:</label>
                                            <div class="">
                                                <input id="Tramite" type="checkbox" name="tramite" value="true"
                                                    required="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
                                        <div class="form-group">
                                            <label for="Condicion">Condición: <i
                                                    class="fa fa-fw fa-asterisk text-danger"></i></label>
                                            <select id="Condicion" class="form-control">
                                                <option value="O">ORDINARIO</option>
                                                <option value="T">TRANSEUNTE</option>
                                                <option value="F">FALLECIDO</option>
                                                <option value="R">RETIRADO</option>
                                                <option value="V">VITALICIO</option>
                                            </select>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="modal-footer">
                                <p class="text-left text-danger">Todos los campos marcados con <i
                                        class="fa fa-fw fa-asterisk text-danger"></i> son obligatorios</p>
                                <button type="submit" class="btn btn-danger" name="btnAceptar" id="btnaceptar">
                                    <i class="fa fa-check"></i> Editar</button>
                                <button type="button" class="btn btn-primary" data-dismiss="modal">
                                    <i class="fa fa-remove"></i> Cancelar</button>
                            </div>
                        </form>
                    </div>

                </div>

            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <!-- start footer -->
        <?php include('./layout/footer.php'); ?>;
        <!-- end footer -->
    </div>
    <!-- ./wrapper -->
    <script src="js/tools.js"></script>
    <script>
    let tools = new Tools();

    let spiner = $("#Load_date")

    $(document).ready(function() {

        loadDataPersona($("#dni").val());

    });


    $("#checkkBoxId").attr("checked") ? alert("Checked") : alert("Unchecked");

    function loadDataPersona(idPersona) {

        $.ajax({
            url: "../app/controller/PersonaController.php",
            method: "GET",
            data: {
                "type": "data",
                "dni": idPersona
            },
            beforeSend: function() {
                spiner.append(
                    '<img src="./images/spiner.gif" width="23" height="23" style="padding-left: 7px;"/>'
                )
            },
            success: function(result) {
                spiner.remove()

                if (result.estado === 1) {
                    let persona = result.object;
                    console.log(persona)
                    $("#Nombres").val(persona.Nombres)
                    $("#Apellidos").val(persona.Apellidos)

                    switch (persona.Sexo) {
                        case "M":
                            $("#Genero").val("M")
                            break;
                        case "F":
                            $("#Genero").val("F")
                            break;
                        default:
                            // code block
                    }

                    document.getElementById("Nacimiento").value = tools.getDateForma(persona
                        .FechaNacimiento, 'yyyy-mm-dd');

                    if (persona.EstadoCivil === "S") {
                        $("#Estado_civil").val("S");
                    } else if (persona.EstadoCivil === "C") {
                        $("#Estado_civil").val("C");
                    } else if (persona.EstadoCivil === "V") {
                        $("#Estado_civil").val("V");
                    } else if (persona.EstadoCivil === "D") {
                        $("#Estado_civil").val("D");
                    } else {

                    }

                    if (persona.RUC == "") {
                        $("#Ruc").val("")
                    } else {
                        $("#Ruc").val(persona.RUC)
                    }

                    if (persona.RAZONSOCIAL == null) {
                        $("#Razon_social").val("")
                    } else {
                        $("#Razon_social").val(persona.RAZONSOCIAL)
                    }

                    $("#Codigo").val(persona.CIP)

                    switch (persona.Condicion) {
                        case "O":
                            $("#Condicion").val("O")
                            break;
                        case "T":
                            $("#Condicion").val("T")
                            break;
                        case "F":
                            $("#Condicion").val("F")
                            break;
                        case "R":
                            $("#Condicion").val("R")
                            break;
                        case "V":
                            $("#Condicion").val("V")
                            break;
                        default:
                            // code block
                    }

                } else {

                }
            },
            error: function(error) {
                console.log(error)
            }
        });
    }
    </script>
</body>

</html>

<?php 

}