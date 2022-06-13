$(function() {

    const links_with_id = $('.product_link_with_id');
    const cart_value = $("#cart_count");

    $.each(links_with_id, function(){
        $(this).bind('click', function(){
            let current_id = $(this).attr('data-id');
            $.post("./vendor/api.php", {"product_id": current_id})
            .done(function(data) {
                cart_value.html(data);
            });
            
        });
    });

});

