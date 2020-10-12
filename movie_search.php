<?php
error_reporting(0);
$apikey = "3791fa354758148d1190e3e0af17612d"; //TMDbのAPIキー
$error = "";
if (array_key_exists('movie_title', $_GET) && $_GET['movie_title'] != "") {
    $_GET['movie_title'] = mb_convert_kana($_GET['movie_title'], 'S', 'UTF-8');
    $url_Contents = file_get_contents("https://api.themoviedb.org/3/search/movie?api_key=" . $apikey . "&language=ja&&query=" . $_GET['movie_title'] . "&page=1&include_adult=false");
    $movieArray = json_decode($url_Contents, true);
}
?>


<!DOCTYPE html>
<html lang="ja">

<head>
    <!-- サイトタイトル -->
    <title>映画検索</title>
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
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:700 rel=" stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Homemade+Apple rel=" stylesheet">
    <link href="https://fonts.googleapis.com/css?family=IM+Fell+DW+Pica+SC rel=" stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Quicksand rel=" stylesheet">
    <style type="text/css">
    </style>
</head>

<body>
    <!-- 背景画像background="img/animal.jpg" -->
    <div class="wrpper">
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
        <div class="title-font"><a href="top.php?movie_title">
                <img src="img/icon2.png">
            </a></div>
        <ul id="menu">
            <li><a href="#">Search▼</a>
                <ul>
                    <li><a href="movie_search.php?movie_title#">映画を探す</a></li>
                    <li><a href="popular.php">定番映画を探す</a></li>
                </ul>
            </li>
            <li><a href="#">Cinema▼</a>
                <ul>
                    <li><a href="eigakan.php">近くの映画館</a></li>
                    <li><a href="nowplay.php">上映中の映画</a></li>
                </ul>
            </li>
            <li><a href="#">various▼</a>
                <ul>
                    <li><a href="#">お気に入り映画</a></li>
                    <li><a href="#">掲示板</a></li>
                </ul>
            <li><a href="#">Login▼</a>
                <ul>
                    <li class="test100"><a href="login.php">ログイン</a></li>
                    <li class="test100"><a href="register.php">新規登録</a></li>
                </ul>
            </li>
        </ul>
        <div class="container">

            <div class="top_text">映画を検索

                <form>
                    <fieldset class="form-group">
            </div>
            <ul class="ser-box">
                <li>
                    <div class="search-box"><input type="text" class="form-control" name="movie_title" id="movie_title" required placeholder="映画のタイトル" value="
<?php
if (array_key_exists('movie_title', $_GET)) {
    $_GET['movie_title'] = htmlspecialchars($_GET['movie_title']); //サニタイジング実装
    echo $_GET['movie_title'];
}

?>"></div>
                </li>
                </fieldset>
                <!-- <input type="submit" class="btn-flat-border" value="ログイン"></a> -->
                <li><button type="submit" class="btn btn-primary">検索</button></li>
            </ul>
            </form>
            </br>
        </div>
        <div id="movie">

            <?php
            //ワーニング対策
            error_reporting(0);
            //検索結果が無いときtotal_resultsが0の時
            $hit_total = $movieArray['total_results'];
            if ($hit_total < 1 and $movieArray) {
                echo '<br/><br/><br/><div class=null>' . $_GET['movie_title'] . 'の検索に一致するものはありませんでした。</div>';
                echo '<br/><br/><br/><br/><br/><br/><br/><br/><br/>';
            }
            if (empty($movieArray)) { //検索ボックスが空の場合なにもしない
                echo '<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>';
            } else if ($movieArray) {
                $count = 0;
                $page_count = $movieArray['total_pages'];
                foreach ($movieArray['results'] as $record) {
                    $poster_path = $record['poster_path'];
                    $title = $record['original_title'];
                    $movie_id = $record['id'];
                    $img = "https://image.tmdb.org/t/p/w300_and_h450_bestv2" . $poster_path;
                    if (empty($poster_path)) {
                        //$img = "https://www.caycegoods.com/file/shared/img/no-image.gif";//画像が無かったら置き換える
                        continue; //画像が無かったら表示しない
                    }
                    $img_get = file_get_contents($img);
                    $enc_img = base64_encode($img_get);
                    $imginfo = getimagesize('data:application/octet-stream;base64,' . $enc_img);
                    //映画情報取得処理
                    $count += 1;
                    $count2 = "'.$count.'";
                    $none2 = "'none'";
                    $block2 = "'block'";
                    $movie_Synopsis_url = file_get_contents("https://api.themoviedb.org/3/movie/" . $movie_id . "?" . "api_key=" . $apikey . "&language=ja");
                    $movie_Synopsis = json_decode($movie_Synopsis_url, true);
                    $overview = $movie_Synopsis['overview'];
                    $notimg = "";
                    $dab = '"';
                    $netflixurl = "https://www.netflix.com/search?q=$title";
                    $youtubeurl = "https://www.youtube.com/results?search_query=$title";
                    $amazonurl = "https://www.amazon.co.jp/s?k=$title&i=instant-video";
                    // <a href="#">various</a>
                    if (empty($overview)) {
                        $overview = "あらすじが登録されていません😢";
                    }
                    echo '<div class="example"><img src="data:' . $imginfo['mime'] . ';base64,' . $enc_img . '">';
                    echo ' <p>' . $title .  '</p>';
                    echo '<a href="' . $netflixurl . '"><span class="span-Netflix">Netflix</span></a><a href="' . $youtubeurl . '"><span class="span-Youtube">YouTube</span></a><a href="' . $amazonurl . '"><span class="span-Amazon">AmzonPrime</span></a>';
                    echo '<div onclick="obj=document.getElementById(' . $count2 . ').style; obj.display=(obj.display==' . $none2 . ')?' . $block2 . ':' . $none2 . ';">
                            <a style="cursor:pointer;"><div class="arasuji-color">あらすじを表示▼</div></a></div>
                            <div id=' . $count2 . ' style="display:none;clear:both;"><p>' . $overview . '</div></div>';
                }
                if ($hit_total >= 1 and $hit_total <= 19) {
                    echo '<div class="null">検索結果:' . $dab . $_GET['movie_title'] . $dab . $hit_total . '件のうち1～' . $count . '件を表示</div>';
                } elseif ($hit_total >= 20) {
                    echo '<div class="null">検索結果:' . $dab . $_GET['movie_title'] . $dab . $hit_total . '件のうち1～20件を表示</div>';
                }
            }


            ?>
        </div>
    </div>
    <!-- ページ最下部フッター -->
    <footer>
        <div class=footer>
            <span class="footer-span"><a href="https://www.hamasen.ac.jp/dept/security/">&copy; R2 HAMAJO security&network</a></span>
            <span class="footer-span"><a href="help.php">お問い合わせ</a></span>
            <span class="footer-span"><a href=about.php>このサイトについて </a> </span> </div>
    </footer>
</body>

</html>