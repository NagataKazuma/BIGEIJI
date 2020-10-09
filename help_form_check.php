<!DOCTYPE html>
<html lang="ja">

<head>
    <!-- サイトタイトル -->
    <title>お問い合わせページ</title>
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
        <script type="text/javascript">
            $(function() {
                $("#menu").tinyNav();
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
            </li>
            <li><a href="login.php">Login</a>
            </li>
        </ul>

        <body>
            <div class=help-check-text>
                <?php

                require_once('../common/common.php');

                $post = sanitize($_POST);

                $onamae = $post['onamae'];
                $email = $post['email'];
                $toiawasetxt = $post['toiawasetxt'];

                $okflg = true;
                if ($onamae == '') {
                    print '<br />お名前が入力されていません。<br /><br />';
                    $okflg = false;
                } else {
                    print 'お名前<br />';
                    print $onamae . ' 様';
                    print '<br /><br />';
                }

                if (preg_match('/\A[\w\-\.]+\@[\w\-\.]+\.([a-z]+)\z/', $email) == 0) {
                    print 'メールアドレスを正確に入力してください。<br /><br />';
                    $okflg = false;
                } else {
                    print 'メールアドレス<br />';
                    print $email;
                    print '<br /><br />';
                }

                if ($toiawasetxt == '') {
                    print 'お問い合わせ内容が入力されていません。<br /><br />';
                    $okflg = false;
                } else {
                    print 'お問い合わせ内容<br />';
                    print $toiawasetxt;
                    print '<br /><br />';
                }
                echo '</div>';
                if ($okflg == true) {
                    print '<form method="post" action="shop_form_done.php">';
                    print '<input type="hidden" name="onamae" value="' . $onamae . '">';
                    print '<input type="hidden" name="email" value="' . $email . '">';
                    print '<input type="hidden" name="postal1" value="' . $toiawasetxt . '">';
                    print '<input type="button" onclick="history.back()" value="戻る">';
                    print '<input type="submit" value="送信"><br />';
                    print '</form>';
                } else {
                    print '<form>';
                    print '<input type="button" onclick="history.back()" value="戻る">';
                    print '</form>';
                }
                ?>
                <!-- ページ最下部フッター -->
                <footer>
                    <div class=footer>
                        <span class="footer-span"><a href="https://www.hamasen.ac.jp/dept/security/">&copy; R2 HAMAJO security&network</a></span>
                        <span class="footer-span"><a href="help.php">お問い合わせ</a></span>
                        <span class="footer-span"><a href=about.php>このサイトについて </a> </span> </div>
                </footer>
        </body>

</html>