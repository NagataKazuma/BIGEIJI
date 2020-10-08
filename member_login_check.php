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
            <li><a href="http://localhost/sotuken/eigakan.php#">cinema</a></li>
            <li><a href="#">various▼</a>
                <ul>
                    <li><a href="#">お気に入り映画</a></li>
                    <li><a href="#">掲示板</a></li>
                </ul>
            </li>
            <li><a href="http://localhost/sotuken/login.php">Login</a>
            </li>
        </ul>

        <body>

<!-- 10月6日　ログイン作成（テンプレ） -->
<?php

    try
    {
    require_once('../common/common.php');

    $post=sanitize($_POST);
    $email_mail=$post['mail'];
    $password_pass=$post['pass'];

    $dsn='mysql:dbname=shop;host=localhost:3307;charset=utf8';
    $user='root';
    $password='';
    $dbh=new PDO($dsn,$user,$password);
    $dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    $sql='SELECT id,password,email FROM user_deta WHERE email=?';
    $stmt=$dbh->prepare($sql);
    $data[]=$email_mail;
    $stmt->execute($data);

    $rec=$stmt->fetch(PDO::FETCH_ASSOC);
    $db_pass=$rec['password'];
    if(!password_verify($password_pass,$db_pass))
    {
    
    print'パスワードが間違っています。';
    
    }
    else 
    {
        header('Location:top.php');
    }

    $dbh=null;

    $rec=$stmt->fetch(PDO::FETCH_ASSOC);
    }
    catch(Exception $e){
    print'ただいま障害のより大変ご迷惑をお掛けしております。';
    echo $e->getMessage();
    exit();
    }

?>
<br />
<a href = "login.php">ログインへ戻る</a>
</body>
</html>


<!-- ページ最下部フッター -->
    <footer>
        <div class=footer>
            <span class="footer-span"><a href="https://www.hamasen.ac.jp/dept/security/">&copy; R2 HAMAJO security&network</a></span>
            <span class="footer-span"><a href="http://localhost/sotuken/help.php">お問い合わせ</a></span>
            <span class="footer-span"><a href=http://localhost/sotuken/about.php>このサイトについて </a> </span> </div> </footer> </body> </html>