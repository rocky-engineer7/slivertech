<?php
/*
    # アルゴリズム課題の注意点
    アルゴリズムではこれまでのように調べる力ではなく物事を論理的に考える力が必要です。
    検索して答えを探して解いても考える力には繋がりません。
    まずは検索に頼らずに自分で処理手順を考えてみましょう。

    # 課題
    ブラックジャックのプログラムを作成し、相手、自分の点数を表示し、勝敗を出力して下さい。
    カードの追加はなしとし、自分と相手にランダムで２枚ずつのカードを配布し、勝敗を判定します。
    ****ルール****
    「カードの合計が21点」に近ければ勝利となります。
    ただし「カードの合計が21点」を超えてしまうと、その時点で負けとなります。

    【カードの数え方】
    ”2～9”まではそのままの数字、”10・J・Q・K”は「すべて10点」と数えます。
    また、”A”（エース）は「1点」もしくは「11点」のどちらに数えても構いません。

    【特別な役】
    最初に配られた2枚のカードが　”Aと10点札”　で21点が完成していた場合を『ブラックジャック』といい、その時点で勝ちとなります。

    [出力例]
    自分：20点　対戦相手：15点 　勝敗：あなたの勝ちです。
    自分：21点　対戦相手：20点　勝敗：ブラックジャック！あなたの勝ちです。
    自分：20点　対戦相手：20点　勝敗：引き分けです。
*/


// カードを2枚ランダムに引く関数
function drawCards($cards) {
    $drawnCards = [];
    for ($i = 0; $i < 2; $i++) {
        $card = $cards[array_rand($cards)];
        $drawnCards[] = $card;
    }
    return $drawnCards;
}

// カードの点数を計算する関数
function calculatePoints($cards) {
    $points = 0;
    foreach ($cards as $card) {
        if ($card == "A") {
            $points += 11; // エースは11点
        } elseif (in_array($card, ["J", "Q", "K"])) {
            $points += 10;
        } else {
            $points += $card;
        }
    }

    // エースの調整（21点を超える場合）
    if ($points > 21) {
        foreach ($cards as $card) {
            if ($card == "A") {
                $points -= 10; // エースを1点としてカウント
                if ($points <= 21) break;
            }
        }
    }

    return $points;
}

// 勝敗判定
function determineWinner($playerPoints, $opponentPoints) {
    if ($playerPoints > 21) {
        return "あなたの負けです。";
    } elseif ($opponentPoints > 21) {
        return "あなたの勝ちです。相手がバーストしました。";
    } elseif ($playerPoints > $opponentPoints) {
        return "あなたの勝ちです。";
    } elseif ($playerPoints < $opponentPoints) {
        return "あなたの負けです。";
    } else {
        return "引き分けです。";
    }
}

// ブラックジャックゲームのメイン関数
function blackJack() {
    // トランプカードを格納した配列、マークの考慮はなし
    $cards = ["A", "J", "Q", "K", 2, 3, 4, 5, 6, 7, 8, 9, 10];

    // カードを引く
    $playerCards = drawCards($cards);
    $opponentCards = drawCards($cards);

    // 点数を計算
    $playerPoints = calculatePoints($playerCards);
    $opponentPoints = calculatePoints($opponentCards);

    // 勝敗を決定
    $result = determineWinner($playerPoints, $opponentPoints);

    // 結果を表示
    echo "<p>自分のカード: " . implode(", ", $playerCards) . " (合計: $playerPoints 点)</p>";
    echo "<p>相手のカード: " . implode(", ", $opponentCards) . " (合計: $opponentPoints 点)</p>";
    echo "<p>勝敗: $result</p>";
}

?>


<!DOCTYPE html>
<html lang="ja">
<head>
    <title>ブラックジャックプログラム</title>
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
        <h1>ブラックジャック、ゲームスタート！</h1>
        <!-- ここから表示する処理を記載 -->
        <?php blackJack(); ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
