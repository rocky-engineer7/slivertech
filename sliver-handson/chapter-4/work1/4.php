<!DOCTYPE html>
<html lang="ja">
<head>
    <title>課題4-1-4</title>
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

    <?php
        /*
            # 課題
            以下の指示を満たすコードを書いてください。
            ※各設問の回答の最後には改行を入れましょう。
            (改行がないと出力した時に横一列で表示されるため見づらくなります。)
            <br>タグをHTMLとして出力することで改行ができます。
        */

        // 1. $colorsという配列を作り、’赤’、’黄’、’青’の順に入れて、
        // ２番目の値を出力し、その後、’白’ を追加して下さい。
        $colors = array("赤", "黄", "青");
        echo $colors[1] . "<br>";
        $colors[] = "白";


        // 2. $scoresという連想配列を作り、数学というキーに数値70,
        // 英語というキーに数値90、国語というキーに数値80を代入し、
        // 国語に5を足した後、国語の値を出力して下さい。
        $scores = array(
            "数学" => 70,
            "英語" => 90,
            "国語" => 80
        );

        $scores["国語"] += 5;

        echo $scores["国語"] . "<br>";

        // 3.for文を用いて、51から100までの数値を出力して下さい。
        for ($i = 51; $i <= 100; $i++) {
            echo $i . "<br>";
        }


        // 4.$a = 2 とし、変数2~100までの偶数をwhile文を用いて、出力して下さい。
        $a = 2;

        while ($a <= 100) {
            echo $a . "<br>";
            $a += 2;
        }

        // 5.for文を用いて、1から100の値を出力して下さい。ただし、50以上の値は表示しない様にして下さい。
        for ($i = 1; $i < 50; $i++) {
            echo $i . "<br>";
        }

        // 6.for文を用いて、1から100の値を出力して下さい。
        // ただし、3の倍数の場合は処理を飛ばし、表示しない様にして下さい。
        for ($i = 1; $i <= 100; $i++) {
            if ($i % 3 ==0) {
                continue;
            }

            echo $i . "<br>";
        }

    ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
