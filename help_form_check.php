<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>お問い合わせフォーム確認</title>
    <!-- CSSリンク -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css" integrity="sha384-y3tfxAZXuh4HwSYylfB+J125MxIs6mR5FOHamPBG064zB+AFeWH94NdvaCBm8qnd" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">

</head>


<body>
    <!-- ローディング画面の実装-->
    <div id="loader-bg">
        <img src="img/loading.gif">
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script>
        jQuery(window).on('load', function() {
            jQuery('#loader-bg').hide();
        });
    </script>

    <ul id="menu">
        <li>
            <div class="title-font"><a href="http://localhost/sotuken/top.php?movie_title">Canelé Films</a></div>
        </li>
        <li><a href="#">仮</a>
            <ul>
                <li><a href="http://localhost/sotuken/eigakan.php#">近くの映画館を探す</a></li>
                <li><a href="#">お気に入り映画</a></li>
                <li><a href="#">仮</a></li>
            </ul>
        </li>
        <li><a href="http://localhost/sotuken/movie_search.php?movie_title#">映画検索🔍</a>
            <ul>
                <!--<li><a href="#">仮</a></li>-->
            </ul>
        </li>
        <li><a href="#">設定</a>
            <ul>
                <li><a href="http://localhost/sotuken/account_config.php">アカウント設定</a></li>
                <li><a href="http://localhost/sotuken/help.php">ヘルプ</a></li>
                <li><a href="http://localhost/sotuken/login.php">ログイン</a></li>
            </ul>
        </li>
    </ul>

    <div class="helpcon">

        <body>
            <div class=top_text>
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
                <footer>
                    <div class=footer><a href="https://www.hamasen.ac.jp/dept/security/">&copy; R2 HAMAJO security&network</a></div>
                </footer>
        </body>

</html>