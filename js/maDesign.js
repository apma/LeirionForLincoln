
//Effects and Actions


$(document).ready(function () {
        // Set a random arrangement on page load to ensure unique initial display
    var $endorsement = $('#endorsement-block');
    $('.endorsement').hide();
    //SET FIRST TO current
    var $liArr = $endorsement.children('.endorsement');
    $liArr.sort(function (a, b) {
        // Get a random number between 0 and 10
        var temp = parseInt(Math.random() * 10);
        // Get 1 or 0, whether temp is odd or even
        var isOddOrEven = temp % 2;
        // Get +1 or -1, whether temp greater or smaller than 5
        var isPosOrNeg = temp > 5 ? 1 : -1;
        // Return -1, 0, or +1
        return (isOddOrEven * isPosOrNeg);
    }).appendTo($endorsement);

    $('.endorse').click(function () {
        cycleEndorsement($('.endorsement'));
    });
})

var cycleEndorsement = function (e) {

    e.each(function () {
        var $cur = $(this).find('current').removeClass('current');
        var $next = $cur.next().length ? $cur.next() : $(this).children().eq(0);
        $next.addClass('current');
    })
};