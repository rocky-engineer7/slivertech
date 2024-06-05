const hoge = '定数です。';

// 定数は、再代入できません。下の処理は、定数に再代入しようとしているので失敗します。
hoge = '再代入します。';
console.log(hoge);

/**
  【解説】
  定数とは、変数の中でも「一度宣言したらもう値を変えられない（再代入できない）」もののことです。
  「const」を使って宣言します。
  定数は、再代入できません。4行目の処理は、定数に再代入しようとしているので失敗します。
 */