/*
  # ワーク課題5-2-6
  理科の試験結果が存在しない生徒の名前を取得するSQLを以下に書いてください。

  (取得結果イメージ)
  +---------+
  |  name   |
  +---------+
  | 長岡一馬 |
  +---------+
  | 中本知佳 |
  +---------+
*/
SELECT s.name
FROM students AS s
LEFT JOIN exam_results AS e ON s.id = e.student_id AND e.subject = "理科"
WHERE e.student_id IS NULL
;
