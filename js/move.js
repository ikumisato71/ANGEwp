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

// ハンバーガーメニュー
// メニュー展開時に背景を固定
const backgroundFix = (bool) => {
  const scrollingElement = () => {
    const browser = window.navigator.userAgent.toLowerCase();
    if ("scrollingElement" in document) return document.scrollingElement;
    return document.documentElement;
  };

  const scrollY = bool
    ? scrollingElement().scrollTop
    : parseInt(document.body.style.top || "0");

  const fixedStyles = {
    height: "100vh",
    position: "fixed",
    top: `${scrollY * -1}px`,
    left: "0",
    width: "100vw",
  };

  Object.keys(fixedStyles).forEach((key) => {
    document.body.style[key] = bool ? fixedStyles[key] : "";
  });

  if (!bool) {
    window.scrollTo(0, scrollY * -1);
  }
};

// 変数定義
const CLASS = "-active";
let flg = false;
let accordionFlg = false;

let hamburger = document.getElementById("js-hamburger");
let focusTrap = document.getElementById("js-focus-trap");
let menu = document.querySelector(".js-nav-area");
let accordionTrigger = document.querySelectorAll(".js-sp-accordion-trigger");
let accordion = document.querySelectorAll(".js-sp-accordion");

// メニュー開閉制御
hamburger.addEventListener("click", (e) => {
  //ハンバーガーボタンが選択されたら
  e.currentTarget.classList.toggle(CLASS);
  menu.classList.toggle(CLASS);
  if (flg) {
    // flgの状態で制御内容を切り替え
    backgroundFix(false);
    hamburger.setAttribute("aria-expanded", "false");
    hamburger.focus();
    flg = false;
  } else {
    backgroundFix(true);
    hamburger.setAttribute("aria-expanded", "true");
    flg = true;
  }
});
window.addEventListener("keydown", () => {
  //escキー押下でメニューを閉じられるように
  if (event.key === "Escape") {
    hamburger.classList.remove(CLASS);
    menu.classList.remove(CLASS);

    backgroundFix(false);
    hamburger.focus();
    hamburger.setAttribute("aria-expanded", "false");
    flg = false;
  }
});

// メニュー内アコーディオン制御
accordionTrigger.forEach((item) => {
  item.addEventListener("click", (e) => {
    e.currentTarget.classList.toggle(CLASS);
    e.currentTarget.nextElementSibling.classList.toggle(CLASS);
    if (accordionFlg) {
      e.currentTarget.setAttribute("aria-expanded", "false");
      accordionFlg = false;
    } else {
      e.currentTarget.setAttribute("aria-expanded", "true");
      accordionFlg = true;
    }
  });
});

// フォーカストラップ制御
focusTrap.addEventListener("focus", (e) => {
  hamburger.focus();
});
