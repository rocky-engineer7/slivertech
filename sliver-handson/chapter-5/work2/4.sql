/*
  # ワーク課題5-2-4
  教科ごとの試験の平均点が50点以下である教科を表示するSQLを以下に書いてください。

  (取得結果イメージ)
  +---------+---------------+
  | subject | average_score |
  +---------+---------------+
  |   国語  |       50      |
  +---------+---------------+
  |   英語  |       26      |
  +---------+---------------+
*/

SELECT subject, AVG(score) AS average_score
FROM exam_results
GROUP BY subject
HAVING AVG(score) <= 50
;
