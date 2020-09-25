<!DOCTYPE html>
<html lang="ja">

<head>
    <!-- サイトタイトル -->
    <title>近くの映画館</title>
    <!-- 規定値 -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <!-- ローディング画面実装jsリンク -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- CSSリンク -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css" integrity="sha384-y3tfxAZXuh4HwSYylfB+J125MxIs6mR5FOHamPBG064zB+AFeWH94NdvaCBm8qnd" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.4/css/all.css">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:700 rel=" stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Homemade+Apple rel=" stylesheet">
    <link href="https://fonts.googleapis.com/css?family=IM+Fell+DW+Pica+SC rel=" stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Quicksand rel=" stylesheet">
</head>

<body>
    <div class="wrapper">
        <!-- ページトップに戻す描写 -->
        <div id="page_top"><a href="#"></a></div>
        <!-- ローディング画面 -->
        <script>
            jQuery(function() {
                var pagetop = $('#page_top');
                pagetop.hide();
                $(window).scroll(function() {
                    if ($(this).scrollTop() > 700) { //100pxスクロールしたら表示
                        pagetop.fadeIn();
                    } else {
                        pagetop.fadeOut();
                    }
                });
                pagetop.click(function() {
                    $('body,html').animate({
                        scrollTop: 0
                    }, 700); //0.5秒かけてトップへ移動
                    return false;
                });
            });
        </script>
        <!-- ローディング画面の描写-->
        <div id="loader-bg">
            <img src="img/loading.gif">
        </div>
        <script>
            jQuery(window).on('load', function() {
                jQuery('#loader-bg').hide();
            });
        </script>
        <!-- ページ上部のリスト -->
        <ul id="menu">
            <li><a href="http://localhost/sotuken/top.php?movie_title">
                    <div class="title-font"><img src="img/icon.png"> Canelé Films</div>
                </a></li>
            <li><a href="http://localhost/sotuken/movie_search.php?movie_title#">Search</a></li>
            <li><a href="#">various</a>
                <ul>
                    <li><a href="http://localhost/sotuken/eigakan.php#">近くの映画館を探す</a></li>
                    <li><a href="#">お気に入り映画</a></li>
                    <!-- <li><a href="#">仮</a></li> -->
                </ul>
            </li>
            <li><a href="http://localhost/sotuken/login.php">Login</a>
            </li>
        </ul>
        <div class="helpcon">

            <body>

                <br />
                <div class=top_text>
                    <h1>実装予定です</h1>
                </div><br />
                <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d52488.85376799608!2d137.7079077627731!3d34.69122037862246!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1z5pig55S76aSo!5e0!3m2!1sja!2sjp!4v1600046131647!5m2!1sja!2sjp" width="480" height="600" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>



        </div>
        <div class="push"></div>
    </div>
    <!-- ページ最下部フッター -->
    <br />
    <footer>
        <div class=footer>
            <a href="https://www.hamasen.ac.jp/dept/security/">&copy; R2 HAMAJO security&network &emsp;&emsp;</a>
            <a href="http://localhost/sotuken/help.php">お問い合わせ</a>
    </footer>
</body>

</html>