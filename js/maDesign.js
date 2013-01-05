
//Effects and Actions
var cycleEndorsement = function () {
    
    $('#endorsement-block').each(function () {
        var $cur = $(this).find('.current').removeClass('current');
        var $next = $cur.next().length ? $cur.next() : $(this).children().eq(0);
        $next.addClass('current');
    })
};
 
var watermarkInput = function(field) {
    //var watermark = 'Puts your email address';

    //init, set watermark text and class
    field.each(function() {
        var displayText = $(this).attr('watermark');
        $(this).val(displayText).addClass('watermark');
        
        $(this).blur(function () {
            if ($(this).val().length == 0) {
                $(this).val(displayText).addClass('watermark');
            }
        });
        
        $(this).focus(function () {
            if ($(this).val() == displayText) {
                $(this).val('').removeClass('watermark');
            }
        });
    });
    
   
}

$(document).ready(function () {
        // Set a random arrangement on page load to ensure unique initial display
    var $endorsementContainer = $('#endorsement-block');
    var $endorsement = $('.endorsement');
    

    //var $liArr = $endorsementContainer.children('.endorsement');
    //$liArr.sort(function (a, b) {
    //    // Get a random number between 0 and 10
    //    var temp = parseInt(Math.random() * 10);
    //    // Get 1 or 0, whether temp is odd or even
    //    var isOddOrEven = temp % 2;
    //    // Get +1 or -1, whether temp greater or smaller than 5
    //    var isPosOrNeg = temp > 5 ? 1 : -1;
    //    // Return -1, 0, or +1
    //    return (isOddOrEven * isPosOrNeg);
    //}).appendTo($endorsementContainer);

    $endorsement.first().addClass('current');

    $('.endorse').click(function () {
        
        cycleEndorsement();
    });
    
    if ($('input[watermark]').length > 0) {
        var field = $('input[watermark]');
        watermarkInput(field);
    }
    if ($('textarea[watermark]').length > 0) {
        var field = $('textarea[watermark]');
        watermarkInput(field);
    }
    

})

