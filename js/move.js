// layer要素に付与したjs-modalクラスを取得し変数に格納
const modal = document.querySelectorAll(".js-modal");
// button要素に付与したjs-modal-buttonクラスを取得し、変数に格納
const modalButton = document.querySelector(".js-modal-button");

// 追記 閉じる 取得
const modalClose = document.querySelector(".js-close-button");

// モーダルボタンをクリックしたときのイベントを登録
modalButton.addEventListener("click", () => {
  modal.classList.add("is-open");
});

// 追記　閉じる　イベント登録
modalClose.addEventListener("click", () => {
  modal.classList.remove("is-open");
});
// モーダルの背景をクリックしたときにモーダルを閉じるイベントを登録
modal.addEventListener("click", (event) => {
  // クリックされた要素がモーダルの内容部分ではない場合にモーダルを閉じる
  if (event.target === modal) {
    modal.classList.remove("is-open");
  }
});
// ローディングアニメーション
$(function () {
  $(window).on("load", function () {
    $(".loader").delay(1500).fadeOut("slow");
    $(".loading_txt").delay(1200).fadeOut("slow");
  });
});
