$(document).ready(function ($) {

    $('#phone').inputmask('(9{2}) 9{4}[9]-9{4}', {'placeholder': ' ', 'removeMaskOnSubmit': true});
    $('#state').inputmask('a{2}', {'placeholder': ''});
    $('#zipcode').inputmask('9{5}-9{3}', {'placeholder': ' ', 'removeMaskOnSubmit': true});

    $('#customer-form').on('submit', function (e) {
        e.preventDefault();

        let vName = $('#name').val();
        let vEmail = $('#email').val();
        let vPhone = $('#phone').val();
        let vAddress = $('#address').val();
        let vNumber = $('#number').val();
        let vComplement = $('#complement').val();
        let vDistrict = $('#district').val();
        let vZipcode = $('#zipcode').val();
        let vState = $('#state').val();
        let vCity = $('#city').val();

        let customer = {
            name: vName,
            email: vEmail,
            phone: vPhone,
            address: vAddress,
            number: vNumber,
            complement: vComplement,
            district: vDistrict,
            zipcode: vZipcode,
            state: vState,
            city: vCity
        };

        let customerStr = JSON.stringify(customer);

        $.ajax({
            type: "POST",
            url: "service/cliente",
            data: { customer: customerStr },
            success: (response) => {
                if (response) {
                    toastr.error('Erro ao cadastrar o cliente. Verifique!', `${response}`, { timeOut: 5000 });
                } else {
                    clearFields();
                    $('#img_row').fadeOut();
                    toastr.success('Cliente foi cadastrado com sucesso.', 'Cliente cadastrado!', { timeOut: 5000 });
                }
            },
            error: (err) => {
                toastr.error('Não foi possível fazer a requisição para a URL informada. Verifique!', `${err.statusText}`, { timeOut: 5000 });
            }
        });
    });

    function clearFields() {
        $('#name').val('');
        $('#email').val('');
        $('#phone').val('');
        $('#address').val('');
        $('#number').val('');
        $('#complement').val('');
        $('#district').val('');
        $('#zipcode').val('');
        $('#state').val('');
        $('#city').val('');
    };

    function clearZipFields() {
        $('#zipcode').val('');
        $('#address').val('');
        $('#complement').val('');
        $('#district').val('');
        $('#state').val('');
        $('#city').val('');
    }

    //Quando o campo cep perde o foco.
    $("#zipcode").blur(function() {
        //Nova variável "cep" somente com dígitos.
        var cep = $(this).val().replace(/\D/g, '');

        //Verifica se campo cep possui valor informado.
        if (cep != "") {
            //Expressão regular para validar o CEP.
            var validacep = /^[0-9]{8}$/;
            //Valida o formato do CEP.
            if(validacep.test(cep)) {
                $('#address').val('...');
                $('#district').val('...');
                $('#city').val('...');
                $('#state').val('...');
                //Consulta o webservice viacep.com.br/
                $.getJSON("https://viacep.com.br/ws/"+ cep +"/json/?callback=?", function(dados) {

                    if (!("erro" in dados)) {
                        //Atualiza os campos com os valores da consulta.
                        $("#address").val(dados.logradouro);
                        $("#district").val(dados.bairro);
                        $("#city").val(dados.localidade);
                        $("#state").val(dados.uf);
                        $('#number').focus();
                    } //end if.
                    else {
                        //CEP pesquisado não foi encontrado.
                        clearZipFields();
                        toastr.error('Formato de CEP inválido. Verifique!', 'CEP Inválido!', { timeOut: 5000 });
                    }
                });
            } 
            else {
                //cep é inválido.
                clearZipFields();
                toastr.error('Formato de CEP inválido. Verifique!', 'CEP Inválido!', { timeOut: 5000 });
            }
        } //end if.
        else {
            //cep sem valor, limpa formulário.
            clearZipFields();
        }
    });

});

