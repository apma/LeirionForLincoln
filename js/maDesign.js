
//Effects and Actions
var cycleEndorsement = function () {
    
    $('#endorsement-block').each(function () {
        var $cur = $(this).find('.current').removeClass('current');
        var $next = $cur.next().length ? $cur.next() : $(this).children().eq(0);
        $next.addClass('current');
    })
};

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
})

