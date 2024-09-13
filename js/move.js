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
  loader.style.transition = "opacity 0.8s ease";
  loader.style.opacity = "0";

  // 1秒後（opacityのトランジションが完了した後）、ローダーを完全に非表示にする
  setTimeout(() => {
    loader.style.display = "none";
  }, 800);
}, 1500);

// ↑↑↑ レビュー ↑↑↑

// ページトップボタンの要素を取得
const pageTopButton = document.getElementById("js-page-top");

// クリックイベントをアロー関数で設定
pageTopButton.addEventListener("click", () => {
  // ページの一番上へスムーズにスクロール
  window.scrollTo({
    top: 0,
    behavior: "smooth",
  });
});
