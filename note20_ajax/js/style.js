/* 스크롤이동 */
function fnMove(seq) {
    var offset = $("#mct_0" + seq).offset();
    $('html, body').animate({scrollTop: offset.top}, 400);
}

/* FadeIn,Out */
$(document).ready(function () {
    console.log($(window).height());
    $(window).scroll(function () {
        if ($(window).height() + $(window).scrollTop() > $('#mct_07').offset().top) {
            $('#quick').fadeOut();
        } else {
            $('#quick').fadeIn();
        }
    });
});

/* 카운트다운 */
$(document).ready(function () {

    var count = 76;
    var counter = setInterval(timer, 6000);

    function timer() {
        count--;

        if (count <= 12) {
            clearInterval(counter);
//document.getElementById("vip_count").innerHTML = "13";
//count = 13;
            return;
        }

        var num_txt1 = (count <= 9) ? '0' : Math.floor(count / 10);
        var num_txt2 = (count % 10);

        $('.first_num').text(num_txt1);
        $('.second_num').text(num_txt2);

//document.getElementById("vip_count").innerHTML=count;
    }
});