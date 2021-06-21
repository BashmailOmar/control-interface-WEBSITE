//START READY
$(document).ready(function() {
    $(".box").mouseenter(function() {
        $(".box").css("opacity", "0.8");
    });
    $(".box").mouseleave(function() {
        $(".box").css("opacity", "0.7");
    });

    $(".ctrlP").animate({
            opacity: 1
        },
        500

    );

    $(".box").animate({
            width: '600px',
            top: '150px',
            height: '600px',
            opacity: '0.7',
            borderRadius: '10px'
        },
        1000
    );

    /*---------------------------------------------------*/

    $('body').css('background-image', 'url("img/img1.png")');
    $('body').css('background-attachment', 'fixed');

}); //END READY