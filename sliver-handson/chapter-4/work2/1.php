<?php
/*
    # アルゴリズム課題の注意点
    アルゴリズムではこれまでのように調べる力ではなく物事を論理的に考える力が必要です。
    検索して答えを探して解いても考える力には繋がりません。
    まずは検索に頼らずに自分で処理手順を考えてみましょう。

    # 課題
    以下は1900年から現在の年までのうるう年を判定するプログラムです。
    うるう年なら"◯◯◯◯年はうるう年です。"
    うるう年でないなら"◯◯◯◯年はうるう年ではありません。"
    と表示してください。
    判定は関数に記述し、関数を呼び出して結果表示すること

    うるう年の定義
    - 4で割り切れる年は、うるう年
    - 100で割り切れる年は、うるう年ではない
    - 400で割り切れる年は、うるう年
    現在の年はdate()関数を用いて取得します。

    表示例）

    1900年はうるう年ではありません。
    1901年はうるう年ではありません。
    1902年はうるう年ではありません。
    1903年はうるう年ではありません。
    1904年はうるう年です。
    1905年はうるう年ではありません。
    1906年はうるう年ではありません。
    1907年はうるう年ではありません。
    1908年はうるう年です。
    1909年はうるう年ではありません。
    1910年はうるう年ではありません。
    1911年はうるう年ではありません。
    1912年はうるう年です。
    1913年はうるう年ではありません。
    1914年はうるう年ではありません。
    1915年はうるう年ではありません。
    1916年はうるう年です。
    1917年はうるう年ではありません。
    1918年はうるう年ではありません。
    1919年はうるう年ではありません。
    1920年はうるう年です。
    ...
*/




function leapYear($i, $year) {
    // ここに処理を記載
    for ($i=1900; $i <= $year; $i++) {
        if ($i % 400 == 0) {
            echo "{$i}はうるう年です。" . "<br>";
        } elseif ($i % 100 == 0) {
            echo "{$i}はうるう年ではありません。" . "<br>";
        } elseif ($i % 4 == 0) {
            echo "{$i}はうるう年です。" . "<br>";
        } else {
            echo "{$i}はうるう年ではありません。" . "<br>";
        }
    }
}

?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <title>うるう年判定プログラム</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="http://localhost">目次に戻る</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link" href="http://localhost/work1">4-1課題</a>
                    <a class="nav-link" href="http://localhost/work2">4-2課題</a>
                    <a class="nav-link" href="http://localhost/work3">4-3課題</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="m-5">
        <h1>うるう年を判定していきます！</h1>
        <!-- ここから表示する処理を記載 -->
        <?php
            $year = date("Y");
            echo leapYear(1900, $year) . "<br>";
        ?>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
