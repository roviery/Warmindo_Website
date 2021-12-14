$(document).ready(() => {

    // remove search button
    $('#search-btn-id').hide();

    // event when keyword written
    $('#keyword-oi').on('keyup', () => {
        // $('.loader').show();
        $.get('ajax/ajaxOrderItem.php?specifier=' + $('#specifier-oi').val() +'&keyword=' + $('#keyword-oi').val(), (data) => {
            $('#content-container').html(data);
            // $('.loader').hide();
        });
    });

    $('#keyword-od').on('keyup', () => {
        // $('.loader').show();
        $.get('ajax/ajaxOrderDetail.php?specifier=' + $('#specifier-od').val() +'&keyword=' + $('#keyword-od').val(), (data) => {
            $('#content-container').html(data);
            // $('.loader').hide();
        });
    });

    $('#keyword-m').on('keyup', () => {
        // $('.loader').show();
        $.get('ajax/ajaxMenu.php?specifier=' + $('#specifier-m').val() +'&keyword=' + $('#keyword-m').val(), (data) => {
            $('#content-container').html(data);
            // $('.loader').hide();
        });
    });

    $('#keyword-e').on('keyup', () => {
        // $('.loader').show();
        $.get('ajax/ajaxEmployee.php?specifier=' + $('#specifier-e').val() +'&keyword=' + $('#keyword-e').val(), (data) => {
            $('#content-container').html(data);
            // $('.loader').hide();
        });
    });

    $('#keyword-c').on('keyup', () => {
        // $('.loader').show();
        $.get('ajax/ajaxCustomer.php?specifier=' + $('#specifier-c').val() +'&keyword=' + $('#keyword-c').val(), (data) => {
            $('#content-container').html(data);
            // $('.loader').hide();
        });
    });


});