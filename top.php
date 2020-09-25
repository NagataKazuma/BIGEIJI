<!DOCTYPE html>
<html lang="ja">

<head>
    <!-- サイトタイトル -->
    <title>トップページ</title>
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
    <link href="https://fonts.googleapis.com/css?family=Teko rel=" stylesheet">
    <link href="https://fonts.googleapis.com/css?family=IM+Fell+DW+Pica+SC rel=" stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP&display=swap" rel="stylesheet">
</head>

<body>
    <!-- トップ画像 -->
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
            <br />loding now!!
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
        <div class="header-bg"></div>
        <div class="container">
            <div class=top_text>注目映画ランキング</div>

            <?php
            $apikey = "3791fa354758148d1190e3e0af17612d"; //TMDbのAPIキー
            $count = 0;
            $juni = '位:';
            $top_list = file_get_contents("https://api.themoviedb.org/3/trending/movie/day?api_key=" . $apikey . "&language=ja");
            $movieTop = json_decode($top_list, true);
            foreach ($movieTop['results'] as $record) {
                $title = $record['title'];
                // $movie_id = $record['id'];
                // $movie_Synopsis_url = file_get_contents("https://api.themoviedb.org/3/movie/".$movie_id."?"."api_key=".$apikey."&language=ja");
                // $movie_Synopsis = json_decode($movie_Synopsis_url, true);
                // $overview = $movie_Synopsis['overview'];
                $poster_path = $record['poster_path'];
                $img = "https://image.tmdb.org/t/p/w300_and_h450_bestv2" . $poster_path;
                $img_get = file_get_contents($img);
                $enc_img = base64_encode($img_get);
                $imginfo = getimagesize('data:application/octet-stream;base64,' . $enc_img);
                $overview = $record['overview'];
                if (empty($overview)) {
                    $overview = "あらすじがまだ登録されていません　申し訳ございません😢";
                }
                $count += 1;
                $count2 = "'.$count.'";
                $none2 = "'none'";
                $block2 = "'block'";
                $netflixurl = "https://www.netflix.com/search?q=";
                if ($count <= 20) { //トップ１０を取得
                    echo '<div class="example">  <img src="data:' . $imginfo['mime'] . ';base64,' . $enc_img . '">';
                    echo '<p>' . $count . $juni . $title . '</p>';
                    echo '<div class="neturl"><a href="' . $netflixurl . $title . '">netflixでみる</a></div>';
                    echo '<div onclick="obj=document.getElementById(' . $count2 . ').style; obj.display=(obj.display==' . $none2 . ')?' . $block2 . ':' . $none2 . ';">
                <a style="cursor:pointer;"><div class="arasuji-color">▼ あらすじを表示</div></a></div>
                <div id=' . $count2 . ' style="display:none;clear:both;"><p>' . $overview . '</div></div>';
                }
            }

            ?>

        </div>
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