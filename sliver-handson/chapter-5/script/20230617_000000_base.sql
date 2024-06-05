-- データベース作成時(Dockerのイメージビルド時)に実行される、課題用のテストテーブル・テストデータを作るためのSQL
USE development;

-- studentsテーブル作成
CREATE TABLE IF NOT EXISTS
  students (
    id int(4) unsigned zerofill NOT NULL AUTO_INCREMENT PRIMARY KEY
    , name varchar(255) NOT NULL
    , gender varchar(1) NOT NULL
  )
  ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci
;

-- exam_resultsテーブル作成
CREATE TABLE IF NOT EXISTS
  exam_results (
    student_id int(4) unsigned zerofill NOT NULL
    , subject varchar(255) NOT NULL
    , score bigint(20) unsigned NOT NULL
    , PRIMARY KEY(`student_id`, `subject`)
  )
  ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci
;

-- studentsテーブルにレコード作成
INSERT INTO
  students
    (id, name, gender)
  VALUES
    (0001, '長岡 一馬', '男')
    , (0002, '中本 知佳', '女')
    , (0003, '松本 義文', '男')
    , (0004, '佐竹 友香', '女')
;

-- exam_resultsテーブルにレコード作成
INSERT INTO
  exam_results (`student_id`, `subject`, `score`)
  VALUES
    (0001, '国語', 30)
    , (0001, '英語', 30)
    , (0002, '国語', 70)
    , (0002, '数学', 80)
    , (0003, '理科', 92)
    , (0004, '社会', 90)
    , (0004, '理科', 35)
    , (0004, '英語', 22)
;
