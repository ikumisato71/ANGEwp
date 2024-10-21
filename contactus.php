<?php
/*
Template Name: contactus
Template Post Type:page
*/
?>
<?php get_header();?>
      <main>
      <form action="contact.php" method="POST">
      
        <input type="text" />
            <h2 class="index-h2">お問い合わせ</h2></br>
              <div class="contact-heading">
                <label class="contact-label" for="name"
                >お名前</label
                >
              </div>

                <input
                  id="name" 
                  type="text"
                  name="name"
                  placeholder=""
                  class="contact-textbox"
                />

              <div class="contact-heading">
                <label class="contact-label"
                  >フリガナ</label
                >
              </div>

                <input
                  type="text"
                  name="hurigana"
                  placeholder=""
                  class="contact-textbox"
                />

              <div class="contact-heading">
                <label class="contact-label" for="email"
                  >メールアドレス</label
                >
              </div>

                <input
                  id="email"
                  type="text"
                  name="email"
                  placeholder=""
                  class="contact-textbox"
                />

              <div class="contact-heading">
                <label class="contact-label">電話番号</label>
              </div>

                <input
                  type="text"
                  name="tel"
                  placeholder=""
                  class="contact-textbox"
                />

              <div class="contact-heading">
                <label class="contact-label" for="message"
                  >お問い合わせ内容</label
                >
              </div>

                <textarea
                  id="message"
                  class="contact-textarea"
                  placeholder=""
                  name="message"
                ></textarea>

              <div class="contact-heading">
                <label class="contact-label">privacy</label>
              </div>

              <div>
                <details>
                  <summary>
                    プライバシーポリシー
                  </summary>

                  <div>
                    <p>株式会社アンジュのコーポレートサイト（以下、「当サイト」と言います。）では、
                      お客様からお預かりする個人情報の重要性を強く認識し、個人情報の保護に関する法律、
                      その他の関係法令を遵守すると共に、以下に定めるプライバシーポリシーに従って、
                      個人情報を安全かつ適切に取り扱うことを宣言いたします。
                    </p>
                    <br />
                    <br />
                    <span>個人情報の定義</span>
                      <p>本プライバシーポリシーにおいて、個人情報とは生存する個人に関する情報であって、
                      氏名、生年月日、住所、電話番号、メールアドレス等、特定の個人を識別することができるものをいいます。
                    </p>
                    <br />
                    <br />
                    <span>個人情報の管理</span>
                      <P>お客様からお預かりした個人情報は、不正アクセス、紛失、
                      漏えい等が起こらないよう、慎重かつ適切に管理します。
                    </P>
                    <br />
                    <span>個人情報の利用目的</span>
                    <P>当サイトでは、お客様からのお問い合わせやサービスへのお申し込み等を通じて、お客様の氏名、生年月日、住所、電話番号、メールアドレス等の個人情報をご提供いただく場合があります。その場合は、以下に示す利用目的のために、適正に利用するものと致します。
                    
                    ・お客様からのお問い合わせ等に対応するため。
                    ・イベントのご案内等のため。
                    ・当サイトが実施するアンケートへのご協力のお願いのため。
                    ・当サイトのサービス向上・改善、新サービスを検討するための分析等を行うため。
                    ・個人を識別できない形で統計データを作成し、当サイトおよびお客様の参考資料とするため。
                  </P>                    
                    <span>個人情報の第三者提供</span>
                      <P>お客様からお預かりした個人情報を、個人情報保護法その他の法令に基づき開示が認められる場合を除き、
                      ご本人様の同意を得ずに第三者に提供することはありません。
                    </P><br />
                      <span>個人情報の開示・訂正・削除について </span>
                        <P>お客様からお預かりした個人情報の開示・訂正・削除をご希望の場合は、
                        ご本人様よりお申し出ください。適切な本人確認を行った後、速やかに対応させていただきます。
                      </P>
                      <span>Cookie（クッキー）について</span>
                        <p>Cookie（クッキー）とは、お客様のサイト閲覧履歴を、お客様のコンピュータにデータとして保存しておく仕組みです。
                        当サイトでは以下の用途にCookieを利用しています。
                        トラッキング: これらはGoogle Analyticsによって設定され、ユニークビジターの数やページビューなどの詳細を追跡して、
                        ユーザーエクスペリエンスの向上に役立てられます。
                      </p>
                      <span>
                        アクセス解析ツールについて</span>
                        <p>当サイトは、Googleが提供するアクセス解析ツール「Googleアナリティクス」
                        を利用しています。Googleアナリティクスは、Cookieを使用することでお客様のトラフィックデータを収集しています。
                        お客様はブラウザの設定でCookieを無効にすることで、トラフィックデータの収集を拒否することができます。
                        なお、トラフィックデータからお客様個人を特定することはできません。詳しくはGoogleアナリティクス利用規約をご確認ください。
                      </p>
                      <span>
                        当サイトはセキュリティ目的のため「reCAPTCHA v3」を使用しています</span>
                        <p>reCAPTCHAの使用は、Googleのプライバシーポリシーと利用規約の対象となります。
                        reCAPTCHA APIは、デバイスやアプリケーションのデータなどハードウェアおよびソフトウェアの情報を収集し、
                        それらのデータをGoogleに送信して分析することによって、ロボットによる悪質な行為かどうかを判断します。
                        本サービスの利用に関連して収集された情報は、reCAPTCHAの向上および一般的なセキュリティ目的のために使用され、
                        Googleによる広告には使用されません。
                      </p>
                      <span>
                        本ポリシーの変更</span>
                        <p>当サイトは、法令の制定、改正等により、本ポリシーを適宜見直し、
                        予告なく変更する場合があります。本ポリシーの変更は、
                        変更後の本ポリシーが当サイトに掲載された時点、
                        またはその他の方法により変更後の本ポリシーが閲覧可能となった時点で有効になります。
                      </p>
                      <span>
                        発行：2021/07/28
                      </span>

                  </div>

                </details>
                <input type="checkbox" name="agree" />
                <span
                  >個人情報の取り扱いについてご同意いただける場合は、送信してください。</span
                >
              </div>
      <!-- 送信 ボタン-->
      <button class="contact-btn_send" type="submit">送信</button>
          </form>
      </main>
      <?php get_footer(); ?>