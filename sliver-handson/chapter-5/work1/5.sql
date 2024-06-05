/*
  # ワーク課題5-1-5
  以下の2つのSQLを、このファイルに書いてください。
  1. exam_resultsテーブルに、student_id=6,subject="国語",score=80のレコードとstudent_id=6,subject="数学",score=90のレコードを1回で挿入するSQL
  2. studentsテーブルの、id=4のレコードを、name="佐竹 友香 ジュニア",gender=男、といった内容に更新するSQL
  3. exam_resultsテーブルの、student_id=6のレコードを全て削除するSQL
*/

/* 1 */
INSERT INTO exam_results (student_id, subject, score) VALUES (6, "国語", 80), (6, "数学", 90) ;

/* 2 */
UPDATE students SET name = "佐竹 友香 ジュニア", gender = "男" WHERE id = 4 ;

/* 3 */
DELETE FROM exam_results WHERE student_id = 6 ;
