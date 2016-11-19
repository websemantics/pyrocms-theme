$(function () {

    /**
     *  toggle sidebar for small devices only (tablets, 768px and down) 
     * 
     */

    if($(window).width() < 768) {
        $( "body.pushing" ).not( ".pyrocms" ).removeClass('pushing');
    }
});