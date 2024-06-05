/*
  # ワーク課題5-2-3
  性別ごとに、最も高かった試験の点数を表示するSQLを以下に書いてください。

  (取得結果イメージ)
  +--------+-----------+
  | gender | max_score |
  +--------+-----------+
  |   男   |     92    |
  +--------+-----------+
  |   女   |     90    |
  +--------+-----------+
*/

SELECT s.gender, MAX(e.score) AS max_score
FROM students AS s
JOIN exam_results AS e ON s.id = e.student_id
GROUP BY s.gender
;
