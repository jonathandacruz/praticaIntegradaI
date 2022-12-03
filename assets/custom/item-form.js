$(document).ready(function ($) {

    $('#img_row').hide();
    $('#alert_message').hide();

    function loadImageURL() {
        url = $('#img_url').val();

        if (url) {
            $('#img_loader').attr('src', url);
            $('#img_loader').attr('height', '200px');
            $('#img_loader').attr('width', '200px');
            $('#img_row').fadeIn();
        } else {
            $('#img_row').fadeOut();
        }
    };

    $('#img_url').on('change', function () {
        loadImageURL();
    });

    $('#item-form-update').on('submit', function (e) {
        e.preventDefault();

        let vId = $('#id').val();
        let vName = $('#name').val();
        let vCategory = $('#category').val();
        let vPrice = $('#price').val();
        let vUrl = $('#img_url').val();
        let vUnit = $('#unit').val();
        let vDesc = $('#description').val();

        let item = {
            id: vId,
            name: vName,
            category: vCategory,
            price: vPrice,
            img_url: vUrl,
            unit: vUnit,
            description: vDesc
        };

        let itemStr = JSON.stringify(item);

        $.ajax({
            type: "POST",
            url: "service/produtoUpdate",
            data: { item: itemStr },
            success: (response) => {
                if (response) {
                    toastr.error('Erro ao atualizar o produto. Verifique!', `${response}`, { timeOut: 5000 });
                } else {
                    clearFields();
                    $('#img_row').fadeOut();
                    toastr.success('Produto foi atualizado com sucesso.', 'Produto cadastrado!', { timeOut: 5000 });
                }
            },
            error: (err) => {
                toastr.error('Não foi possível fazer a requisição para a URL informada. Verifique!', `${err.statusText}`, { timeOut: 5000 });
            }
        });
        setTimeout(() => {
            window.location.href = "produtos";
        }, 1000);
    });

    $('#img_url').on('change', function () {
        loadImageURL();
    });

    $('#item-form').on('submit', function (e) {
        e.preventDefault();
        let vName = $('#name').val();
        let vCategory = $('#category').val();
        let vPrice = $('#price').val();
        let vUrl = $('#img_url').val();
        let vUnit = $('#unit').val();
        let vDesc = $('#description').val();

        let item = {
            name: vName,
            category: vCategory,
            price: vPrice,
            img_url: vUrl,
            unit: vUnit,
            description: vDesc
        };

        let itemStr = JSON.stringify(item);

        $.ajax({
            type: "POST",
            url: "service/produtoService",
            data: { item: itemStr },
            success: (response) => {
                if (response) {
                    toastr.error('Erro ao cadastrar o produto. Verifique!', `${response}`, { timeOut: 5000 });
                } else {
                    clearFields();
                    $('#img_row').fadeOut();
                    toastr.success('Produto foi cadastrado com sucesso.', 'Produto cadastrado!', { timeOut: 5000 });
                }
            },
            error: (err) => {
                toastr.error('Não foi possível fazer a requisição para a URL informada. Verifique!', `${err.statusText}`, { timeOut: 5000 });
            }
        });
        setTimeout(() => {
            window.location.href = "produtos";
        }, 1000);
    });

    function clearFields() {
        $('#name').val('');
        $('#category').val('');
        $('#price').val('');
        $('#img_url').val('');
        $('#unit').val('');
        $('#description').val('');
    };


});

