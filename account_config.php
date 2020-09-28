<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>卒研開発テスト</title>
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
    <li><div class="title-font"><a href="http://localhost/sotuken/top.php?movie_title">Canelé Films</a></div>
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

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8"><br />
<title>アカウント設定</title>
</head>
<body>
<div class = top_text>
<h1>実装予定です</h1><br />
</div>


</div>
</div>
<footer>
<div class=footer><a href="https://www.hamasen.ac.jp/dept/security/">&copy; R2 HAMAJO security&network</a></div>
</footer>
</body>
</html>
