var CamposVazios = document.querySelector("#EmptyMsg");
const url = '../administracao/lib/upload.php';

function BackSection(actual, anterior) {

    $("#" + actual).fadeOut(200,
        function () {

            $("#" + anterior).fadeIn(500);

        });
}

function numbersOnly(evt) {

    var char = String.fromCharCode(evt.which);

    if (!(/[0-9]/.test(char))) {
        evt.preventDefault();
    }

}

$("[name=data_emissao]").on("change", function () {

    $("[name=data_expiracao]").attr("min",$("[name=data_emissao]").val());

});

$("[name=data_chegada]").on("change", function () {

    $("[name=data_partida]").attr("min",$("[name=data_chegada]").val());

});

$(".show-search").on("click", function () {

    $("#Personal").fadeOut();
    $("#Travel").fadeOut();
    $("#Org").fadeOut();
    $("#Honor").fadeOut();
    $("#Credencial").fadeIn();

    $(".show-search").css("display", "none");
    $(".show-acreditacao").css("display", "block");

});

$(".show-acreditacao").on("click", function () {

    $(".show-acreditacao").css("display", "none");
    $(".show-search").css("display", "block");

    $("#Personal").fadeIn();
    $("#Travel").fadeOut();
    $("#Org").fadeOut();
    $("#Honor").fadeOut();
    $("#Credencial").fadeOut();

});

$("#declaracao_honra").on("click", function () {

    if ($("#declaracao_honra").val() == "0") {

        $("#declaracao_honra").val("1");
        $(".btn-finalizar").removeAttr("disabled");

    } else {

        $("#declaracao_honra").val("0");
        $(".btn-finalizar").attr("disabled", "disabled");

    }

});

$("#declaro").on("click", function () {

    if ($("#declaro").val() == "0") {

        $("#declaro").val("1");
        $(".btn-finalizar").removeAttr("disabled");

    } else {

        $("#declaro").val("0");
        $(".btn-finalizar").attr("disabled", "disabled");

    }

});

$("#outra_pessoa").on("click", function () {

    if ($("#outra_pessoa").val() == "0") {

        $("#outra_pessoa").val("1");
        $(".btn-finalizar").attr("disabled", "disabled");
        $("#declaro").removeAttr("disabled");
        $("[name=nome]").removeAttr("disabled");
        $("[name=relacao]").removeAttr("disabled");
        $("[name=endereco]").removeAttr("disabled");
        $("[name=telefone]").removeAttr("disabled");
        //Adicionar Required
        $("#declaro").attr("required", "required");
        $("[name=nome]").attr("required", "required");
        $("[name=relacao]").attr("required", "required");
        $("[name=endereco]").attr("required", "required");
        $("[name=telefone]").attr("required", "required");

    } else {

        $("#outra_pessoa").val("0");
        $("#declaro").val("0");
        $(".btn-finalizar").removeAttr("disabled");
        $("#declaro").attr("disabled", "disabled");
        $("#declaro").prop("checked", false);
        $("[name=nome]").attr("disabled", "disabled");
        $("[name=relacao]").attr("disabled", "disabled");
        $("[name=endereco]").attr("disabled", "disabled");
        $("[name=telefone]").attr("disabled", "disabled");
        //Remover Required
        $("#declaro").removeAttr("required");
        $("[name=nome]").removeAttr("required");
        $("[name=relacao]").removeAttr("required");
        $("[name=endereco]").removeAttr("required");
        $("[name=telefone]").removeAttr("required");

    }

});

$("[name=recaptcha]").on("keyup", function () {

    if ($("[name=recaptcha]").val() === $("[name=captcha]").val()) {

        $(".btn-search").removeAttr("disabled");
        $(".btn-search").addClass("btn-primary");

    } else {

        $(".btn-search").attr("disabled", "disabled");
        $(".btn-search").removeClass("btn-primary");

    }

});

$("#Upload").on('submit', function (e) {

    e.preventDefault();

    $.ajax({
        type: 'POST',
        url: '../administracao/lib/upload.php',
        data: new FormData(this),
        contentType: false,
        cache: false,
        processData: false,
        beforeSend: function () {
            $('#Upload').css("opacity", ".5");

        },
        success: function (msg) {
            alert(msg);
            $('#Upload').css("opacity", "");
        }
    });
});

$("#fotoM").on('click', function () {

    $('#ficheiro').trigger('click');

});

function Foto() {

    document.getElementById("sub").removeAttribute("type");
    document.getElementById("sub").click();

}


function AddTravel() {

    $.post("../administracao/lib/insert.php", $("#TravelData").serialize(),
        function (retorno) {

            //console.log(retorno);

            if (retorno["msg"] == "success") {

                CamposVazios.innerHTML = "";

                $("#Travel").fadeOut(200,
                    function () {

                        $("#Org").fadeIn(500);

                    });

            } else if (retorno["msg"] == "empty") {

                CamposVazios.innerHTML = '<div class="alert alert-warning">Campos obrigatorios!</div>';

            } else {

                CamposVazios.innerHTML = '<div class="alert alert-warning">Alguma coisa correu mal, consulte os gestores do CIAM!</div>';

            }

        }, 'Json');
}

function AddOrg() {

    $.post("../administracao/lib/insert.php", $("#OrgData").serialize(),
        function (retorno) {

            //console.log(retorno);

            if (retorno["msg"] == "success") {

                CamposVazios.innerHTML = "";

                $("#Org").fadeOut(200,
                    function () {

                        $("#Honor").fadeIn(500);

                    });

            } else if (retorno["msg"] == "empty") {

                CamposVazios.innerHTML = '<div class="alert alert-warning">Campos obrigatorios!</div>';

            } else {

                CamposVazios.innerHTML = '<div class="alert alert-warning">Alguma coisa correu mal, consulte os gestores do CIAM!</div>';

            }

        }, 'Json');
}

function EndProcess() {

    $('.btn-finalizar').attr("disabled", "disabled");
    $.post("../administracao/lib/insert.php", $("#HonorData").serialize(),
        function (retorno) {

            console.log(retorno);
            if (retorno["msg"] == "success") {

                CamposVazios.innerHTML = '<div class="alert alert-success">O seu número de inscrição é | Your inscription number is | Votre numéro d"enregistrement est '+ retorno["num_inscricao"] +'!</div>';
                $("#FooterMsg").html('<div class="alert alert-success">O seu número de inscrição é | Your inscription number is | Votre numéro d"enregistrement est '+ retorno["num_inscricao"] +'!</div>');
                $('.final-modal-body').html(`
                                    <p> O seu número de inscrição é <strong>`+ retorno["num_inscricao"] +`!</strong></p>
                                    <p> Your inscription number is <strong>`+ retorno["num_inscricao"] +`!</strong></p>
                                    <p> Votre numéro d"enregistrement est <strong>`+ retorno["num_inscricao"] +`!</strong></p>
                                    `);
                $('#myModal').modal('show');
                $(".btn-finalizar").removeAttr("disabled");

                /*setInterval(() => {

                    CamposVazios.innerHTML = "";
                    $("#FooterMsg").html('');
                    $("#Honor").fadeOut(200,
                        function () {

                            $("#Credencial").fadeIn(500);

                        });

                }, 4000);*/

            } else if (retorno["msg"] == "empty") {

                CamposVazios.innerHTML = '<div class="alert alert-warning">Campos obrigatorios!</div>';

            } else {

                CamposVazios.innerHTML = '<div class="alert alert-warning">Alguma coisa correu mal, consulte os gestores do CIAM!</div>';

            }

        }, 'Json');
}

$(function () {

    var alturaFormulario = document.getElementsByClassName("padding");
    var AlturaBannerLateral = document.getElementById("colImg");

    AlturaBannerLateral.style.height = alturaFormulario[0].offsetHeight + "px";

    //$("#Personal").hide();
    $("#Travel").hide();
    $("#Org").hide();
    $("#Honor").hide();
    $("#Credencial").hide();
    $(".show-acreditacao").hide();


    /*$("#Personal").submit(function (o) {

        o.preventDefault();
        AddPersonal();

    });*/

    $("#PersonalData").on('submit', function (e) {

        e.preventDefault();

        $.ajax({
            type: 'POST',
            url: '../administracao/lib/insert.php',
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            beforeSend: function () {
                $('#PersonalData').css("opacity", ".5");

            },
            success: function (msg) {
                console.log(msg);

                if (msg == "success") {

                    CamposVazios.innerHTML = "";

                    $("#Personal").fadeOut(200,
                        function () {

                            $("#Travel").fadeIn(500);

                    });

                } else if (msg == "double") {

                    CamposVazios.innerHTML = '<div class="alert alert-danger">"' + document.querySelector("[name=n_passaporte]").value + '".' + 'Este nº de passaporte já existe no nosso banco de dados!</div>';

                } else if (msg == "empty") {

                    CamposVazios.innerHTML = '<div class="alert alert-warning">Campos obrigatorios!</div>';

                }else if (msg == "error_photo") {

                    CamposVazios.innerHTML = '<div class="alert alert-warning">Erro ao carregar foto!</div>';

                } else {

                    CamposVazios.innerHTML = msg;

                }
                $('#PersonalData').css("opacity", "");
            }
        });
    });

    $("#Travel").submit(function (o) {

        o.preventDefault();
        AddTravel();

    });

    $("#Org").submit(function (o) {

        o.preventDefault();
        AddOrg();

    });

    $("#Honor").submit(function (o) {
        o.preventDefault();
        EndProcess();

    });

});



 //Script para select dependente de provincia a municipio onde candidata-se
 $(document).ready(function () {
    $('#provAcad').on('change', function () {
    let id = $(this).val();
    $('#munCand').empty();
    $('#munCand').append('<option value="0" disabled selected>Processando...</option>');
    $.ajax({
    type: 'GET',
    url: 'getSelectSearchMunicipie/' + id,
    success: function (response) {
    var response = JSON.parse(response);
    console.log(response);
    $('#munCand').empty();
    $('#munCand').append(`<option value="0" disabled selected>Seleccione o Município</option>`);
    response.forEach(element => {
        $('#munCand').append(`<option value="${element['id']}">${element['nameMunicipe']}</option>`);
        });
    }
});
});
});

