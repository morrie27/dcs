<?php
include 'head.php';

$chk_url = $_SERVER['HTTP_REFERER'];
$chk_domain = $_SERVER['SERVER_NAME'];
//echo $chk_domain."/".$chk_url;
if (!strstr($chk_url, $chk_domain)) {
    alert("정상적인 경로로 접속해주세요");
exit;
}
?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--    <meta http-equiv="refresh" content="3;url=/1/index.php">-->
    <title>Thanks</title>

    <style>
        ul, li {
            list-style: none;
            margin: 0;
            padding: 0
        }

        p {
            font-size: 40px;
            font-weight: bold;
            font-family: 'Nanum Gothic Coding', monospace;
        }

        #wrap {
            width: 100%;
            position:relative;
            top:100px;
        }

        .box {
            display: table;
            width: 800px;
            height: 200px;
            margin: 0 auto;
            border: 1px solid #000;
            border-radius: 20px;
            background: #f4f4f4;
        }

        .text {
            display: table-cell;
            text-align: center;
            vertical-align: middle
        }

        .text li {
            padding: 10px 0;
        }

        .return {
            display:table;
            width:200px;
            height:50px;
            margin:0 auto;
            border:1px solid #000;
            border-radius:20px;
            margin-top:50px;
            background-color:#000;
            text-align: center;
        }

        .return a {
            display:table-cell;
            vertical-align:middle;
            font-size: 1.8rem;
            color:#ffffff;
        }

        @media screen and (max-width: 1200px) {
            .box {
                width: 80%;
                height: 100px;
            }

            .text p {
                font-size: 1rem;
            }

            .return {
                width:120px;
                height:50px;
                margin-top:20px;

            }

            .return a {
                font-size: 1rem;
            }
        }


    </style>

    <link href="https://fonts.googleapis.com/css2?family=Nanum+Gothic+Coding:wght@700&display=swap" rel="stylesheet">

</head>
<body>

<div id="wrap">
    <div class="box">
        <ul class="text">
            <li><p>상담이 접수되었습니다</p></li>
            <li><p>빠른 시간안에 해피콜 드리겠습니다</p></li>
        </ul>
    </div>

    <div class="return">
        <a href="http://jspace.kr/glxnt20">돌아가기</a>
    </div>
</div>


<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-178402572-1"></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }

    gtag('js', new Date());

    gtag('config', 'UA-178402572-1');
</script>
<!-- Global site tag (gtag.js) - Google Analytics -->


<!-- Google Tag Manager -->
<script>(function (w, d, s, l, i) {
        w[l] = w[l] || [];
        w[l].push({
            'gtm.start':
                new Date().getTime(), event: 'gtm.js'
        });
        var f = d.getElementsByTagName(s)[0],
            j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : '';
        j.async = true;
        j.src =
            'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
        f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-N7572FK');</script>
<!-- End Google Tag Manager -->


<!-- Taboola Pixel Code -->
<script type='text/javascript'>
    window._tfa = window._tfa || [];
    window._tfa.push({notify: 'event', name: 'page_view', id: 1330802});
    !function (t, f, a, x) {
        if (!document.getElementById(x)) {
            t.async = 1;
            t.src = a;
            t.id = x;
            f.parentNode.insertBefore(t, f);
        }
    }(document.createElement('script'),
        document.getElementsByTagName('script')[0],
        '//cdn.taboola.com/libtrc/unip/1330802/tfa.js',
        'tb_tfa_script');
</script>
<noscript>
    <img src='https://trc.taboola.com/1330802/log/3/unip?en=page_view'
         width='0' height='0' style='display:none'/>
</noscript>
<!-- End of Taboola Pixel Code -->


<!-- Facebook Pixel Code -->
<script>
    !function (f, b, e, v, n, t, s) {
        if (f.fbq) return;
        n = f.fbq = function () {
            n.callMethod ?
                n.callMethod.apply(n, arguments) : n.queue.push(arguments)
        };
        if (!f._fbq) f._fbq = n;
        n.push = n;
        n.loaded = !0;
        n.version = '2.0';
        n.queue = [];
        t = b.createElement(e);
        t.async = !0;
        t.src = v;
        s = b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t, s)
    }(window, document, 'script',
        'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '788229105312824');
    fbq('track', 'PageView');
</script>
<script>
    fbq('track', 'Lead');
</script>
<noscript><img height="1" width="1" style="display:none"
               src="https://www.facebook.com/tr?id=788229105312824&ev=PageView&noscript=1"
    /></noscript>
<!-- End Facebook Pixel Code -->


<!-- Kakao Pixel Code -->
<script type="text/javascript" charset="UTF-8" src="//t1.daumcdn.net/adfit/static/kp.js"></script>
<script type="text/javascript">
    kakaoPixel('8592831222333748358').pageView();
    kakaoPixel('8592831222333748358').participation();
</script>
<!-- End Kakao Pixel Code -->

</body>
</html>