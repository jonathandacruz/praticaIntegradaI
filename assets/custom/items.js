$(document).ready(function($){

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
    
    $('#img_url').on('change', function() {
        loadImageURL();
    });
    
    $('#item-form').on('submit', function(e) {
        e.preventDefault();
        let vName = $('#name').val();
        let vCategory = $('#category').val();
        let vPrice = $('#price').val();
        let vUrl = $('#img_url').val();
        let vUnit = $('#unit').val();
    
        let item = { name: vName, 
                     category: vCategory,
                     price: vPrice,
                     img_url: vUrl,
                     unit: vUnit
                    };
    
        let itemStr = JSON.stringify(item);
        
        $.ajax({
            type: "POST",
            url: "produto-service",
            data: {item: itemStr},
            success: (response) => {
                console.log(response);
                console.log('OK!');
                clearFields();
                $('#img_row').fadeOut();
                toastr.success('Produto cadastrado com sucesso!', `${response}`, {timeOut: 5000});
            },
            error: (err) => {
                console.log(err);
                console.log('Deu Erro!');
                toastr.error('Ocorreu um erro ao cadastrar o produto!', `${err.statusText}`, {timeOut: 5000});
            }
          });
    });
    
    function clearFields() {
        $('#name').val('');
        $('#category').val('');
        $('#price').val('');
        $('#img_url').val('');
        $('#unit').val('');
        $('.alert').alert();
    }
    

});

