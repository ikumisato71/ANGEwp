// // layer要素に付与したjs-modalクラスを取得し変数に格納
// const modal = document.querySelector(".js-modal");
// // button要素に付与したjs-modal-buttonクラスを取得し、変数に格納
// const modalButton = document.querySelector(".js-modal-button");

// // 追記 閉じる 取得
// const modalClose = document.querySelector(".js-close-button");

// // モーダルボタンをクリックしたときのイベントを登録
// modalButton.addEventListener("click", () => {
//   modal.classList.add("is-open");
// });

// // 追記　閉じる　イベント登録
// modalClose.addEventListener("click", () => {
//   modal.classList.remove("is-open");
// });
// // モーダルの背景をクリックしたときにモーダルを閉じるイベントを登録
// modal.addEventListener("click", (event) => {
//   // クリックされた要素がモーダルの内容部分ではない場合にモーダルを閉じる
//   if (event.target === modal) {
//     modal.classList.remove("is-open");
//   }
// });
// // ローディングアニメーション
// $(function () {
//   $(window).on("load", function () {
//     $(".loader").delay(1500).fadeOut("slow");
//     $(".loading_txt").delay(1200).fadeOut("slow");
//   });
// });

// ↓↓↓ レビュー ↓↓↓
// ① PRODUCTの写真のところモーダルの複数の設置
// すべての".js-modal-button"クラスを持つボタン要素を取得
const modalButton = document.querySelectorAll(".js-modal-button");

modalButton.forEach((button) => {
  // 各ボタンに対して、その次の兄弟要素であるモーダルを取得
  const modal = button.nextElementSibling;
  // モーダル内の".js-close-button"クラスを持つ閉じるボタンを取得
  const modalClose = modal.querySelector(".js-close-button");

  // ボタンがクリックされたときの処理を設定
  button.addEventListener("click", () => {
    // モーダルに"is-open"クラスを追加してモーダルを表示する
    modal.classList.add("is-open");
  });

  // モーダル自体がクリックされたときの処理を設定
  modal.addEventListener("click", (event) => {
    // クリックされたターゲットがモーダルそのものである場合
    if (event.target === modal) {
      // "is-open"クラスを削除してモーダルを非表示にする
      modal.classList.remove("is-open");
    }
  });

  // モーダル内の閉じるボタンがクリックされたときの処理を設定
  modalClose.addEventListener("click", () => {
    // "is-open"クラスを削除してモーダルを非表示にする
    modal.classList.remove("is-open");
  });
});

// ④ ローディングアニメーションがうまくいかない
// ".loader"クラスを持つ要素を取得
const loader = document.querySelector(".loader");

// ページ読み込み後、2秒後にローダーの非表示処理を開始
setTimeout(() => {
  // トランジションを設定し、opacityを1秒かけて0にする
  loader.style.transition = "opacity 1s ease";
  loader.style.opacity = "0";

  // 1秒後（opacityのトランジションが完了した後）、ローダーを完全に非表示にする
  setTimeout(() => {
    loader.style.display = "none";
  }, 1000);
}, 2000);

// ↑↑↑ レビュー ↑↑↑
