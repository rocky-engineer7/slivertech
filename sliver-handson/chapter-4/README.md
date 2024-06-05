# チャプター4. PHP基礎 カリキュラムの進め方

1. [このページ](https://suriba-doc.mikawaya-corp.com/64773d7ea50dc5de0bda74da.html)がチャプター4の最初のページです。ここから学習を始めましょう。
2. 教材の中に課題の指示があるので、指示された通りに課題を進めてください。
3. work1～work3が全て完了した段階でGitHubにプッシュし、discordで提出報告を行います。
4. 以上でチャプター4は修了です。次のチャプターを取り組みましょう。

# 開発用サーバの起動方法

PHPは、**PHPがインストールされたWEBサーバがないと動作できません。**
そのため、本カリキュラムではDockerで専用のWebサーバをあなたのPC上で起動する必要があります。
以下のコマンドでサーバは起動/停止できます。
## PHPサーバ起動コマンド
```
docker start chapter4
```

## PHPサーバ停止コマンド
```
docker stop chapter4
```

Docker Desktop または VSCodeの拡張機能のDockerのタブでも制御できます。
**作業を終了するとき、PCを終了・再起動するときは忘れずにサーバを停止するようにしましょう！**