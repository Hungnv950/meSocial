
$(document).ready(function(){
    $('.search-top').click(function(e) {
        e.preventDefault();
        if ($('.form_search').css('display') == 'none') {
            $('.form_search').show();
        }
        else {
            $('.form_search').hide();
        }
    });
});



$(window).scroll(function () {
    if ($(window).scrollTop() >=200) {
        $('#scroll_top').show();
    }
    else {
        $('#scroll_top').hide();
    }
});
$('#scroll_top').click(function(){
    jQuery('html, body').animate({scrollTop:parseInt(0)}, 'slow');
});



$( window ).load(function() {
    render_size();
    var url = window.location.href;
    $('.menu-item  a[href="' + url + '"]').parent().addClass('active');
});

$( window ).resize(function() {
    render_size();
});

function render_size(){
    var h_510 = $('.h_510 img').width();
    $('.h_510').height( 0.510 * parseInt(h_510))

}