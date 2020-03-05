<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>4eachblog 掲示板</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<header>
    <img class="pic1" src="4eachblog_logo.jpg" alt="ヘッダー画像">
    <div class="header-list">
        <ul>
            <li>トップ</li>
            <li>プロフィール</li>
            <li>4eachについて</li>
            <li>登録フォーム</li>
            <li>問い合わせ</li>
            <li>その他</li>
        </ul>
    </div>
</header>
<main>
    <div class="left">
        <h1>プログラミングに役立つ掲示板</h1>
        <form action="insert.php" method="post">
            <h3>入力フォーム</h3>
            <div>
                <label>ハンドルネーム</label>
                <br>
                <input type="text" name="handlename" size="35">
            </div>
            <div>
                <label>タイトル<label>
                <br>
                <input type="text" name="title" size="35">
            </div>
            <div>
                <label>コメント<label>
                <br>
                <textarea name="comments" cols="50" rows="7"></textarea>
            </div>
            <div>
                <input type="submit" class="submit" value="投稿する">
            </div>
        </form>
        <div class="kiji">
            <h3>タイトル</h3>
            <div class="contents">
                記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。<br>
                記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。<br>記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。
                <div class="handlename">posted by 通りすがり</div>
            </div>
        </div>
        <div class="kiji">
            <h3>タイトル</h3>
            <div class="contents">
                記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。<br>
                記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。<br>記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。
                <div class="handlename">posted by 通りすがり</div>
            </div>
        </div>
    </div>
    <div class="right">
        <div class="list1">
            <h2>人気の記事</h2>
            <p>PHP オススメ本</p>
            <p>PHP MyAdiminの使い方</p>
            <p>今人気のエディタ Top5</p>
            <p>HTMLの基礎</p>
        </div>
        <div class="list1">
            <h2>おすすめリンク</h2>
            <p>インターノウス株式会社</p>
            <p>XAMPPのダウンロード</p>
            <p>Eclipseのダウンロード</p>
            <p>Bracketsのダウンロード</p>
        </div>
        <div class="list1">
            <h2>カテゴリ</h2>
            <p>HTML</p>
            <p>PHP</p>
            <p>MySOL</p>
            <p>JavaScript</p>
        </div>
    </div>
</main>
<footer>
    copyright © internous | 4each blog is the one whith provides A to Z about programming.
</footer>
</body>
</html>