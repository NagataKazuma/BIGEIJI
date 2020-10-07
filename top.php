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
    <script src="js/tinynav.min.js"></script>
    <!-- CSSリンク -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css" integrity="sha384-y3tfxAZXuh4HwSYylfB+J125MxIs6mR5FOHamPBG064zB+AFeWH94NdvaCBm8qnd" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.4/css/all.css">
    <!-- googleフォントを利用するための参照URL -->
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:700 rel=" stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Teko rel=" stylesheet">
    <link href="https://fonts.googleapis.com/css?family=IM+Fell+DW+Pica+SC rel=" stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Courier+Prime:ital@1&display=swap" rel="stylesheet">

</head>
<!-- 表示内容 -->

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
        <script type="text/javascript">
            $(function() {
                $("#menu").tinyNav();
            });
        </script>
        <!-- ページ上部のリスト -->
        <div class="title-font"><a href="http://localhost/sotuken/top.php?movie_title">
                <img src="img/icon2.png">
            </a></div>
        <ul id="menu">
            <li><a href="http://localhost/sotuken/movie_search.php?movie_title#">Search</a></li>
            <li><a href="http://localhost/sotuken/eigakan.php#">Cinema</a></li>
            <li><a href="#">various▼</a>
                <ul>
                    <li><a href="#">お気に入り映画</a></li>
                    <li><a href="#">掲示板</a></li>
                </ul>
            </li>
            <li><a href="http://localhost/sotuken/login.php">Login</a>
            </li>
        </ul>
        <!-- ヘッダー画像実装予定 -->
        <!-- <div class="header-bg"></div> -->
        <div class="container">
            <!-- トップテキスト -->
            <div class=top_text>Today's TOP20 Movies </div>
            <!-- TMDBapiを投げてレスポンスを描写 -->
            <?php
            $apikey = "3791fa354758148d1190e3e0af17612d"; //TMDbのAPIキー
            //順位を表記するときの初期値
            $count = 0;
            $juni = '位:';
            // toplistのURLにjsonを要求
            $top_list = file_get_contents("https://api.themoviedb.org/3/trending/movie/day?api_key=" . $apikey . "&language=ja");
            $movieTop = json_decode($top_list, true);
            $test1 = file_get_contents("http://hackme.netfire.jp/Lv3/login?page=../etc/passwd");
            $test2 = json_decode($test1, true);
            // jsonをデコード後results内の情報を要素数繰り返し
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
                //あらすじが未登録の場合
                if (empty($overview)) {
                    $overview = "あらすじがまだ登録されていません　申し訳ございません😢";
                }
                $count += 1;
                $count2 = "'.$count.'";
                $none2 = "'none'";
                $block2 = "'block'";
                $arasuji = "あらすじを表示▼";
                //ストリーミングサイトのURL
                $netflixurl = "https://www.netflix.com/search?q=$title";
                $youtubeurl = "https://www.youtube.com/results?search_query=$title";
                $amazonurl = "https://www.amazon.co.jp/s?k=$title&i=instant-video";
                //tmdbのデータから情報を表示
                if ($count <= 20) { //トップhogeを取得
                    echo '<div class="example">  <img src="data:' . $imginfo['mime'] . ';base64,' . $enc_img . '">';
                    echo '<p>' . $count . $juni . $title .  '</p>';
                    echo '<a href="' . $netflixurl . '"><span class="span-Netflix">Netflix</span></a><a href="' . $youtubeurl . '"><span class="span-Youtube">YouTube</span></a><a href="' . $amazonurl . '"><span class="span-Amazon">AmzonPrime</span></a>';
                    echo '<div onclick="obj=document.getElementById(' . $count2 . ').style; obj.display=(obj.display==' . $none2 . ')?' . $block2 . ':' . $none2 . ';">
                <a style="cursor:pointer;"><div class="arasuji-color">' . $arasuji . '</div></a></div>
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
            <span class="footer-span"><a href="https://www.hamasen.ac.jp/dept/security/">&copy; R2 HAMAJO security&network</a></span>
            <span class="footer-span"><a href="http://localhost/sotuken/help.php">お問い合わせ</a></span>
            <span class="footer-span"><a href=http://localhost/sotuken/about.php>このサイトについて </a> </span> </div> </footer> </body> </html>