/*
  # ワーク課題5-1-3
  以下の2つのSQLを、このファイルに書いてください。
  1. exam_resultsテーブルからsubjectカラムが"国語"のレコードを取得するSQL
  2. exam_resultsテーブルからscoreカラムが35以下のレコードを取得するSQL
*/

/* 1 */
SELECT * FROM exam_results WHERE subject = "国語" ;

/* 2 */
SELECT * FROM exam_results WHERE score <= 35 ;
