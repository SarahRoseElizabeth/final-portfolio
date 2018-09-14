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
    );

    var xMin = -10,
        xMax = 10,
        yMin = -10,
        yMax = 10,
        scaleMin = 0.8,
        scaleMax = 1.4,
        positionsPerElement = 5,
        secondsPerIteration = 5,
        elements = document.querySelectorAll("#dots circle");

    for (var i = 0; i < elements.length; i++) {
        randomFloat(elements[i], positionsPerElement, secondsPerIteration);
    }

    var textTimeline = new TimelineMax();
    var textFade = $("#text path");
    textTimeline.to(textFade, 1.5, {autoAlpha:1, ease: Linear.easeOut}, 0.5);

//creates a timeline filled with sequenced animations for the particular element, randomly wandering around.
    function randomFloat(element, positions, duration) {
        var tl = new TimelineMax({repeat:-1, yoyo:true, delay:Math.random() * duration});
        for (var i = 0; i < positions; i++) {
            tl.to(element, duration, {x:random(xMin, xMax), y:random(yMin, yMax), scale:random(scaleMin, scaleMax), ease:Sine.easeInOut});
        }
        return tl;
    }

    function random(min, max) {
        return (min + Math.random() * (max - min));
    }

});

