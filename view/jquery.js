$(document).ready(function () {
    $("input[name='complemento']").change(function () {
        if ($("#csim").is(":checked")) {
            $("label[for='complResidCliente']").show();
            $("input[name='complResidCliente']").show();
            $("label[for='obsResidCliente']").show();
            $("input[name='obsResidCliente']").show();
        } else {
            $("label[for='complResidCliente']").hide();
            $("input[name='complResidCliente']").hide();
            $("label[for='obsResidCliente']").hide();
            $("input[name='obsResidCliente']").hide();
        }
    });

    if ($("#csim").is(":checked")) {
        $("label[for='complResidCliente']").show();
        $("input[name='complResidCliente']").show();
        $("label[for='obsResidCliente']").show();
        $("input[name='obsResidCliente']").show();
    } else {
        $("label[for='complResidCliente']").hide();
        $("input[name='complResidCliente']").hide();
        $("label[for='obsResidCliente']").hide();
        $("input[name='obsResidCliente']").hide();
    }
});