/*
  # ワーク課題5-1-4
  以下の3つのSQLを、このファイルに書いてください。
  1. studentsテーブルから、nameカラムの文字に「本」が含まれるレコードを取得するSQL
  2. exam_resultsテーブルから、scoreカラムがNULLであるレコードを取得するSQL
  3. exam_resultsテーブルからsubjectカラムが"国語"のレコードを、点数が高い順に、最大取得件数が10件になるよう取得するSQL。
*/

/* 1 */
SELECT * FROM students WHERE name LIKE "%本%" ;

/* 2 */
SELECT * FROM exam_results WHERE score is NULL ;

/* 3 */
SELECT * FROM exam_results WHERE subject = "国語" ORDER BY score DESC LIMIT 10 ;
