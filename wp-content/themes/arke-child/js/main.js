AOS.init({
    startEvent: 'load'
});

jQuery(document).ready(function($){
    $('.my-slider').unslider({
        nav: false,
        arrows: {
            prev: '<div class="arrow-div div-prev "><a class="unslider-arrow prev"></a></div>',
            next: '<div class="arrow-div div-next"><a class="unslider-arrow next"></a></div>'
        }
    });

    $('.info-icon').hover(
        function(){
            $('.info-icon-pulse').css("visibility", "hidden");
        }
    )
});

