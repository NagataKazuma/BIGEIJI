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
    <script src="js/tinynav.min.js"></script>

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
                <li><a href="favorite.php">お気に入り映画</a></li>
                <li><a href="review.php">映画レビュー</a></li>
            </ul>
        </li>
        <li><a href="login.php">Login</a>
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
            <div class=top_text>
                <h1>実装予定です</h1><br />
            </div>


    </div>
    </div>
    <footer>
        <div class=footer><a href="https://www.hamasen.ac.jp/dept/security/">&copy; R2 HAMAJO security&network</a></div>
    </footer>
</body>

</html>