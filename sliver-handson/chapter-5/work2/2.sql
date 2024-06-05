/*
  # ワーク課題5-2-2
  1教科でも30点以下の点数を取った生徒の名前(studentsテーブルのnameカラム)
  を取得するSQLを以下に書いてください。
  ただし、重複は許さないものとします。
  (同じ内容のレコードが2つ以上表示されてはいけない)

  (取得結果イメージ)
  +---------+
  |  name   |
  +---------+
  | 長岡一馬 |
  +---------+
  | 佐竹友香 |
  +---------+
*/

SELECT DISTINCT s.name
FROM students AS s
JOIN exam_results AS e ON s.id = e.student_id
WHERE e.score <= 30
;
