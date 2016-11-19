$(function () {

    /**
     *  hack implementation for an image select widget
     */
    
    $('[data-provides="anomaly.field_type.select"][data-type="image"] .c-radio').each(function () {        
        
        var elm = $(this);
        var id = elm.find('input').val();
        
        /* show loader */
        elm.append('<div class="visible mini inline loader"></div>');

        /* fetch image tag from server */
        $.ajax({
            url: APPLICATION_URL + '/admin/pyrocms-theme/thumb/' + id,
            timeout: 10000 
        }).done(function(thumb_img) {
            /* add a preview image */
            elm.append(thumb_img);
        }).fail(function(jqXHR, textStatus, errorThrown) {
            console.log("Image Select Error: " + textStatus);
        }).always(function() {
            /* remove loader no matter what! */
            elm.find('.loader').remove();
        });
    });
});