// 2. 条件分岐 ～if文の使い方～

// if文のイメージ1
if (条件式) {
  // 処理
}

// if文のイメージ2
if (変数ageが18より小さい場合) {
  console.log("未成年者は入場できません。");
}

// if文の具体的な使い方
const age = Math.floor(Math.random() * 60);

if (age < 18) {
  console.log("未成年者は入場できません。");
}

// 2. 条件分岐 ～真偽値～​

if (17 < 18) {
  console.log("trueのとき表示される。");
}

if (true) {
  console.log("trueのとき表示される。");
}

let isChild = false;

if (isChild) {
  console.log("trueの時表示される");
}

isChild = 20 < 18;

if (isChild) {
  console.log("trueの時表示される");
}

// 2. 条件分岐 ～else～​
if (isChild) {
  console.log("未成年者は入場できません。");
} else {
  console.log("いらっしゃいませ。");
}

// 2. 条件分岐 ～else if～​
if (isChild) {
  console.log("未成年者は入場できません。");
} else if (isNewUser) {
  console.log("会員登録をお願いします。");
} else {
  console.log("いらっしゃいませ。");
}

if (条件A) {
  // 条件Aがtrueのとき
} else if (条件B) {
  // 条件Bがtrueのとき
} else if (条件C) {
  // 条件Cがtrueのとき
} else {
  // 上記条件以外の時
}

// 2. 条件分岐 ～複数の条件を比べる～​

if (条件A && 条件B) {
  // 条件Aと条件Bがどちらもtrueのとき
}

if (age >= 18 && user === "ログイン中") {
  console.log("いらっしゃいませ。");
}

if (条件A || 条件B) {
  // 条件Aまたは条件Bのどちらかがtrueのとき
}

if (user === "ログイン中" || user === "管理者") {
  console.log("いらっしゃいませ。");
}

// 2. 条件分岐 ～switch文～​
switch (animal) {
  case "dog":
    console.log("わん！");
    break;
  case "cat":
    console.log("にゃあ！");
    break;
  default:
    console.log("なんだ、気のせいか…。");
    break;
}

if (animal === "dog") {
  console.log("わん！");
} else if (animal === "cat") {
  console.log("にゃあ！");
} else {
  console.log("なんだ、気のせいか…。");
}

if (user === "ログイン中" || user === "管理者") {
  console.log("いらっしゃいませ。");
}

// 3. 繰り返し ～while文～​
while (条件式) {
  // 処理
}

let number = 1;
while (number <= 100) {
  console.log(number);
  number++;
}

// 3. 繰り返し ～for文～​
for (let i = 1; i <= 100; i++) {
  console.log("numberは[" + i + "]です。");
}

// 4. 関数 ～functionとは～​
function echoNumbers() {
  let number = 1;
  console.log(number);
  console.log(number + 1);
  console.log(number + 2);
}

echoNumbers();

// 4. 関数 ～関数の引数～​
function happyBirthday(name) {
  console.log(name + "さん、お誕生日おめでとう！");
}

happyBirthday("三河屋 太郎");
happyBirthday("カピバラ");
happyBirthday("NO NAME");

function futagoHappyBirthday(name1, name2, age) {
  console.log(name1 + "さん、" + name2 + "さん、");
  console.log(age + "才のお誕生日おめでとう！");
}

// 4. 関数 ～関数の返り値～​
function keisanki(number) {
  let result;
  result = number * (number + 2);

  // 計算結果を呼び出し元に戻す(返す)。
  return result;
}

let keisanKekka = keisanki(1);
console.log(keisanKekka);

// 4. 配列 ～配列の使い方～​
let array = ["りんご", "ごりら", "ラッパー"];
console.log(array[0]); // 「りんご」と出力されます
array[2] = "らっぱ";
array[3] = "パンツ";

// 5. オブジェクト ～オブジェクトって何？～​
const user = {
  name: "織田信長",
  age: 47,
  sexial: "男",
  deadPoint: "本能寺",
};

const japan = {
  aichiKen: {
    nagoyaShi: {
      nakamuraKu: "名古屋城",
      minatoKu: "名古屋競馬場",
    },
    komakiShi: "小牧山城",
    inuYamaShi: "犬山市",
  },
  hyogoKen: "姫路城",
};

console.log(japan.hyogoKen);
console.log(japan["hyogoKen"]);

japan.aichiKen.nagoyaShi.nakamuraKu = "名古屋駅";

// 6. nullとundefined​
const hoge = null;
let fuga;

// fugaに値が入るまではundefined
console.log(fuga);

fuga = 6;
