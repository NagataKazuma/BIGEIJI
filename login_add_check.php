<!DOCTYPE html>
<html lang="ja">

<head>
    <!-- サイトタイトル -->
    <title>ログインページ</title>
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
        <div class="title-font"><a href="http://localhost/sotuken/top.php?movie_title">
                <img src="img/icon2.png">
            </a></div>
        <ul id="menu">
            <li><a href="http://localhost/sotuken/movie_search.php?movie_title#">Search</a></li>
            <li><a href="http://localhost/sotuken/eigakan.php#">Nearest cinema</a></li>
            <li><a href="#">various▼</a>
                <ul>
                    <li><a href="#">お気に入り映画</a></li>
                    <li><a href="#">掲示板</a></li>
                </ul>
            </li>
            <li><a href="http://localhost/sotuken/login.php">Login</a>
            </li>
        </ul>

<!-- 10月6日　ログイン認証 -->
<body>
<?php

require_once('../common/common.php');

$post=sanitize($_POST);
$email_mail = $post['mail'];
$password_pass = $post['pass'];
$password_pass2 = $post['pass2'];

if($email_mail== '')
{
    print'メールアドレスが入力してください。<br />';
}
else
{
    print'アドレス:';
    print $email_mail;
    print'<br />';
}

if($password_pass=='')
{
    print'パスワードが入力してください。<br />';
}
if(preg_match("/^[A-Z]\w{7,14}$/", $password_pass)) 
{

    if($password_pass!=$password_pass2)
    {
        print'パスワードが一致しません。<br />';
    }

    if($email_mail==''||$password_pass==''||$password_pass!=$password_pass2)
    {
        print'<form>';
        print'<input type = "button" onclick = "history.back()"value="戻る">';
        print'</form>';
    }
    else
    {
        $password_pass=md5($password_pass);
        print'<form method ="post" action ="login_add_done.php">';
        print'<input type = "hidden" name = "mail" value = "'.$email_mail.'">';
        print'<input type = "hidden" name = "pass" value = "'.$password_pass.'">';
        print'<br />';
        print'<input type = "button" onclick = "history.back()" value = "戻る">';
        print'<input type = "submit" value = "OK">';
        print'</form.';
    }
}
else 
    {
        print "<p>パスワードが不適切です。</p>";
    }
?>

</body>
</html>

            
 <!-- ページ最下部フッター -->
    <footer>
        <div class=footer>
            <span class="footer-span"><a href="https://www.hamasen.ac.jp/dept/security/">&copy; R2 HAMAJO security&network</a></span>
            <span class="footer-span"><a href="http://localhost/sotuken/help.php">お問い合わせ</a></span>
            <span class="footer-span"><a href=http://localhost/sotuken/about.php>このサイトについて </a> </span> </div> </footer> </body> </html>