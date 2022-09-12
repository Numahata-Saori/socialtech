<!DOCTYPE html>
  <html>
    <head>
      <title>SocialTech</title>
        <meta charset="utf-8">
        <meta name="description" content="SocialTechはEdTech業界のリーディングカンパニーを目指します。">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
      <header>
        <!-- ロゴ -->
        <a href="index.html" id="lofo"><img src="images/logo.png" alt="トップページに戻る"></a>

        <!-- PC用ナビゲーション -->
        <nav id="nav-pc">
          <a href="mission.html">MISSION</a>
          <a href="product.html">PRODUCT</a>
          <a href="index.html#aboutus">ABOUT US</a>
          <a href="index.html#vision">VISION</a>
          <a href="index.html#company">COMPANY</a>
          <a href="index.html#contact">CONTACT</a>
        </nav>

        <!-- スマートフォン用メニューボタン -->
        <img id="menu-sp" src="images/button-menu.png" alt="ナビゲーションを開く" onclick="document.getElementById('nav-sp').style.display = 'block'">

        <!-- スマートフォン用ナビゲーション -->
        <nav id="nav-sp">
          <!-- onclick="document.getElementById('nav-sp').style.display = 'none'"
          ⇒nav-spというidを持つ要素（今回の場合はスマートフォン用ナビゲーション）に対し、クリック（タップ）時にdisplay: none;というスタイルを適用する -->
          <img id="close" src="images/button-close.png" alt="ナビゲーションを閉じる" onclick="document.getElementById('nav-sp').style.display = 'none'">
          <a id="logo-sp" href="index.html" onclick="document.getElementById('nav-sp').style.display = 'none'"><img
              src="images/logo-sp.png" alt="トップページに戻る"></a>
          <a class="menu" href="mission.html" onclick="document.getElementById('nav-sp').style.display = 'none'">MISSION</a>
          <a class="menu" href="product.html" onclick="document.getElementById('nav-sp').style.display = 'none'">PRODUCT</a>
          <a class="menu" href="index.html#aboutus" onclick="document.getElementById('nav-sp').style.display = 'none'">ABOUT
            US</a>
          <a class="menu" href="index.html#vision"
            onclick="document.getElementById('nav-sp').style.display = 'none'">VISION</a>
          <a class="menu" href="index.html#company"
            onclick="document.getElementById('nav-sp').style.display = 'none'">COMPANY</a>
          <a class="menu" href="index.html#contact"
            onclick="document.getElementById('nav-sp').style.display = 'none'">CONTACT</a>
          <div id="sns">
            <a href="https://www.facebook.com/sejuku2013"><img src="images/button-facebook.png" alt="Facebookのリンク"></a>
            <a href="https://twitter.com/samuraijuku"><img src="images/button-twitter.png" alt="Twitterのリンク"></a>
            <a href="https://www.youtube.com/channel/UCCFOQO5aDK0xXam4cUQXT8g"><img src="images/button-youtube.png" alt="YouTubeのリンク"></a>
          </div>
        </nav>
      </header>

      <main>
        <article>
          <!-- メインビジュアル -->
          <section id="main-visual">
            <div id="main-message">
              <h1>WORLD PEACE</h1>
              <p>IT教育で世界平和を実現する</p>
            </div>
            <img src="images/index/index-main.png" alt="PCの周りに集まる多国籍の仲間たち">
          </section>

          <!-- ミッション -->
          <section id="mission">
            <h2 class="index-h2">MISSISON</h2>
            <div id="mission-flex">
              <div>
                <img id="mission-photo" src="images/index/index-mission.png" alt="野外のベンチで写真を撮影する多国籍の仲間たち">
                <h3>世界平和の実現</h3>
                <p>人類の日観である世界平和。
                  世界平和を脅かす様々な社会問題を解決するためには、イノベーションをどんどん起こしていく必要があります。
                  SosialTechは、プログラミング教育を通してイノベーターを輩出することで、世界平和という大きなテーマに挑んでいきます。
                </p>
              </div>
              <div>
                <img id="s2dgs" src="images/index/s2dgs.png" alt="S2DGs">
                <h3>S2DGsの実現</h3>
                <p>国連が掲げる「Sustainable Development Goals(持続可能な開発目標)」に含まれる17つのグローバル目標のうち、
                  以下の5つの目標の実現をミッションとしてサービスを展開していきます。</p>
                <a href="mission.html">
                  <img src="images/button-more.png" alt="もっとみる">
                </a>
              </div>
            </div>
          </section>

          <!-- プロダクト -->
          <section id="product">
            <h2 class="index-h2">PRODUCT</h2>
            <div>
              <div id="product-left">
                <div>
                  <img class="product-photo" src="images/index/index-career.png" alt="笑顔で話し合う2人の男性">
                  <div class="product-explain">
                    <span>CAREER</span>
                    <h3>人材紹介事業</h3>
                    <p>エンジニアへの転職に特化した履歴書や職務経歴書のアドバイスや面接対策を行い、豊富な求人の中から最適なキャリア選択を支援します。</p>
                  </div>
                </div>
                <div>
                  <img class="product-photo" src="images/index/index-mantoman.png" alt="PCでコードを書く男">
                  <div class="product-explain">
                    <span>MAN TO MAN</span>
                    <h3>プログラミング教育</h3>
                    <p>2013年より日本で唯一の専属講師によるマンツーマンのプログラミングレッスンを開始。
                      AI/人口知能やウェブデザインの学習も可能です。</p>
                  </div>
                </div>
              </div>
              <div id="product-right">
                <div>
                  <img class="product-photo" src="images/index/index-media.png" alt="スマートフォンを操作する人">
                  <div class="product-explain">
                    <span>MEDIA</span>
                    <h3>プログラミング学習メディア</h3>
                    <p>月間200万人に読まれる日本最大級のプログラミング学習サイト「Social Blog」やYouTubeチャンネルにて学習情報を発信しています。</p>
                  </div>
                </div>
                <div>
                  <img class="product-photo" src="images/index/index-b2b.png" alt="公演中の男性とそれを聴く人々">
                  <div class="product-explain">
                    <span>B2B</span>
                    <h3>法人研修事業</h3>
                    <p>社員のスキルアップ・資格取得・福利厚生を目的としたプログラミング法人研修。
                      貴社の事業モデルに合わせた研修内容の提案を致します。</p>
                  </div>
                </div>
              </div>
            </div>
            <div>
              <a id="product-more" href="product.html">
                <img src="images/button-more.png" alt="もっとみる">
              </a>
            </div>
          </section>

          <!-- ABOUT US -->
          <section id="aboutus">
            <h2 class="index-h2">ABOUT US</h2>
            <h3>3つの組織文化</h3>
            <div>
              <table class="culture-table">
                <tr>
                  <td>
                    <span class="culture-num">01</span>
                  </td>
                  <td>
                    <span class="culture-en">FLEXIBLE</span>
                    <span class="culture-jp">フレキシブル</span>
                  </td>
                </tr>
                <tr>
                  <td></td>
                  <td>
                    <p class="culture-description">
                      リモートワーク、フルフレックス、副業推奨など1人1人が最大限のパフォーマンスを発揮できる柔軟な働き方を促進しています。
                    </p>
                  </td>
                </tr>
                <tr>
                  <td>
                    <span class="culture-num">02</span>
                  </td>
                  <td>
                    <span class="culture-en">TEAL</span>
                    <span class="culture-jp">ティール</span>
                  </td>
                </tr>
                <tr>
                  <td></td>
                  <td>
                    <p class="culture-description">
                      会社全体を1つの生命体として捉え、お互いが深く結びついた一階層型組織として部署・チーム関係なく課題解決をできる組織を目指しています。
                    </p>
                  </td>
                </tr>
                <tr>
                  <td></td>
                  <td>
                    <p class="culture-description">
                      クォーター毎に経営・部署・個人ごとにOKRを設定し個人のキャリアと会社の目指す方向の軌道修正を行っております。
                    </p>
                  </td>
                </tr>
              </table>
              <img class="culture-img" src="images/index/index-aboutus1.png" alt="笑顔で話し合う2人の女性">
            </div>
            <img class="culture-img2" src="images/index/index-aboutus2.png" alt="笑顔で話し合う3人の男女">
          </section>

          <!-- VISION -->
          <section id="vision">
            <h2 class="index-h2">VISION</h2>
            <h3>7つの行動指針</h3>
            <div>
              <div class="vision-box">
                <img src="images/index/vision-01.png" alt="01">
                <span>
                  <h4>CUSTOMER IS BOSS</h4>
                  <h5>あなたのボスは顧客である</h5>
                  <p>私たちは常にお客様施行で行動し、お客様を喜ばせ、期待値を超えた感動を提供することを大切にしまし。</p>
                </span>
              </div>
              <div class="vision-box">
                <img src="images/index/vision-02.png" alt="02">
                <span>
                  <h4>MOVE FAST</h4>
                  <h5>速さは価値</h5>
                  <p>素早く試し、素早く実行することで新しい気付きや発見を見つけていきます。</p>
                </span>
              </div>
              <div class="vision-box">
                <img src="images/index/vision-03.png" alt="03">
                <span>
                  <h4>IMPACT DRIVEN</h4>
                  <h5>作業するのは仕事ではない</h5>
                  <p>問題から考え、成果とは何かを考え続け、インパクトのある成果を生むために仕事をしていきます。</p>
                </span>
              </div>
              <div class="vision-box">
                <img src="images/index/vision-04.png" alt="04">
                <span>
                  <h4>SAVE TIME, SAVE MONEY</h4>
                  <h5>浪費は命取りになる</h5>
                  <p>少ないコストでできる方法を考えます。
                    お金だけでなく、人の時間をいただいている自覚を持ち、あらゆるリソースを有意義に活用します。</p>
                </span>
              </div>
              <div class="vision-box">
                <img src="images/index/vision-05.png" alt="05">
                <span>
                  <h4>BE GENTLE</h4>
                  <h5>「優しくない」をなくす</h5>
                  <p>社会を少しずつ優しくしていきます。自分、家族、同僚、顧客、他人、全ての人に優しくいることを心がけます。</p>
                </span>
              </div>
              <div class="vision-box">
                <img src="images/index/vision-06.png" alt="06">
                <span>
                  <h4>ABC</h4>
                  <h5>当たり前のことをバカにせずちゃんとやる</h5>
                  <p>礼儀、健康、嘘をつかない。当たり前の事が出来ているかを常に自問し、当たり前の基準を高く持って行動します。</p>
                </span>
              </div>
              <div class="vision-box">
                <img src="images/index/vision-07.png" alt="07">
                <span>
                  <h4>ZTI</h4>
                  <h5>絶対的当事者意識</h5>
                  <p>役職や役割に応じた相対的な当事者意識ではなく、自信のみで起こることすべてに対する絶対的な当事者意識を持ちます。</p>
                </span>
              </div>
            </div>
          </section>

          <!-- COMPANY -->
          <section id="company">
            <h2 class="index-h2">COMPANY</h2>
            <h3>会社概要</h3>
            <table id="company-table">
              <tr>
                <th class="tableheader-first">会社名</th>
                <td class="cell-first">株式会社SocialTech</td>
              </tr>
              <tr>
                <th class="tableheader">所在地</th>
                <td class="cell">〒150-0043 東京都渋谷区道玄坂2丁目11-1 Gスクエア渋谷道玄坂4F<br>JR山手線「渋谷駅」より徒歩3分</td>
              </tr>
              <tr>
                <th class="tableheader">代表者</th>
                <td class="cell">代表取締役社　田中　太郎</td>
              </tr>
              <tr>
                <th class="tableheader">設立</th>
                <td class="cell">2015年3月19日</td>
              </tr>
            </table>
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3241.776131418901!2d139.6940020150329!3d35.65788688019969!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188b55ffeee63f%3A0x73330361de4fb84f!2z44CSMTUwLTAwNDMg5p2x5Lqs6YO95riL6LC35Yy66YGT546E5Z2C77yS5LiB55uu77yR77yR4oiSMSBHIDRm!5e0!3m2!1sja!2sjp!4v1662823794519!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
            </iframe>
          </section>

          <!-- お問い合わせフォーム -->
          <section id="contact">
            <h2 class="index-h2">CONTACT</h2>
            <h3>お問い合わせ</h3>
            <!-- STATIC FORMSのフォームタグ -->
            <!-- Make sure you don't change the form action-->
            <form action="https://api.staticforms.xyz/submit" method="post">
              <!-- If we receive data in this field submission will be ignored -->
              <input type="text" name="honeypot" style="display: none;">
              <!-- STATIC FORMSのアクセスキー -->
              <input type="hidden" name="accessKey" value="9c31d0c2-f126-4d3c-8f61-b45da60e7fe5">
              <!-- メールのタイトル -->
              <input type="hidden" name="subject" value="お問い合わせフォーム" />
              <!-- 送信先のメールアドレスをvalueに設定する -->
              <input type="hidden" name="replyTo" value="numahata.saori@gmail.com">
              <!-- redirectToのURLは公開後のURLへリンクする -->
              <input type="hidden" name="redirectTo" value="">
            <!-- </form> -->
            <!-- <form> -->
              <div>
                <div class="contact-heading">
                  <label class="contact-label">お名前<span class="contact-span">必須</span></label>
                </div>
                <div class="contact-form">
                  <input class="contact-textbox" type="text" name="name" placeholder="入力してください">
                </div>
              </div>
              <div>
                <div class="contact-heading">
                  <label class="contact-label">フリガナ<span class="contact-span">必須</span></label>
                </div>
                <div class="contact-form">
                  <input class="contact-textbox" type="text" name="hurigana" placeholder="入力してください">
                </div>
              </div>
              <div>
                <div class="contact-heading">
                  <label class="contact-label">メールアドレス<span class="contact-span">必須</span></label>
                </div>
                <div class="contact-form">
                  <input class="contact-textbox" type="text" name="email" placeholder="入力してください">
                </div>
              </div>
              <div>
                <div class="contact-heading">
                  <label class="contact-label">電話番号<span class="contact-span">必須</span></label>
                </div>
                <div class="contact-form">
                  <input class="contact-textbox" type="text" name="tel" placeholder="入力してください">
                </div>
              </div>
              <div>
                <div class="contact-heading">
                  <label class="contact-label">お問い合わせ内容<span class="contact-span">必須</span></label>
                </div>
                <div class="contact-form">
                  <textarea class="contact-textbox" name="message" placeholder="入力してください"></textarea>
                </div>
              </div>
              <div>
                <div class="contact-heading">
                  <label class="contact-label">ご希望の連絡先<span class="contact-span">必須</span></label>
                </div>
                <div>
                  <input class="radiobutton" type="radio" value="tel" name="contact" checked><label>お電話</label>
                  <input class="radiobutton" type="radio" value="mail" name="contact"><label>メール</label>
                  <input class="radiobutton" type="radio" value="both" name="contact"><label>どちらでも</label>
                </div>
              </div>
              <div>
                <div class="contact-heading">
                  <label class="contact-label">個人情報の取り扱い</label>
                </div>
                <div>
                  <details>
                    <summary>お問い合わせフォームの個人情報の取り扱いについて</summary>
                    <div>
                      <span>
                        １．組織の名称又は氏名
                      </span><br>
                      株式会社SocialTech<br><br>
                      <span>
                        ２．個人情報保護管理者（若しくはその代理人）の氏名又は職名、所属及び連絡先
                        鈴木 一郎 コーポレート部
                      </span><br>
                      メールアドレス:support@socialtech.net<br>
                      TEL:03-xxxx-xxxx<br>
                      <span>３．個人情報の利用目的</span><br>
                      ・本サービス及び本サービスに関連する情報の提供又はそれらに関する連絡のため<br>
                      ・ユーザーの本人確認のため<br>
                      ・当社サービスのご案内のため<br>
                      ・当社の商品等の広告または宣伝（電子メールによるものを含むものとします。）<br><br>
                      <span>
                        ４．個人情報の取り扱い業務の委託
                      </span><br>
                      個人情報の取扱業務の全部または一部を外部に業務委託する場合があります。<br>
                      その際、弊社は、個人情報を適切に保護できる管理体制を敷き実行していることを条件として<br>
                      委託先を厳選したうえで、機密保持契約を委託先と締結し、お客様の個人情報を厳密に管理させます。<br><br>
                      <span>
                        ５．個人情報の開示等の請求
                      </span><br>
                      お客様は、弊社に対してご自身の個人情報の開示等（利用目的の通知、開示、内容の訂正・追加・削除、利用の停止または消去、第三者への提供の停止）に関して、
                      当社問合わせ窓口に申し出ることができます。<br>
                      その際、弊社はお客様ご本人を確認させていただいたうえで、合理的な期間内に対応いたします。<br><br>
                      なお、個人情報に関する弊社問合わせ先は、次の通りです。<br><br>
                      株式会社SocialTech 個人情報問合せ窓口<br>
                      〒150-0043 東京都渋谷区道玄坂2丁目11-1 Ｇスクエア渋谷道玄坂 4F<br>
                      メールアドレス:support@socialtech.net TEL:03-xxxx-xxxx<br><br>
                      <span>
                        ６．個人情報を提供されることの任意性について
                      </span><br><br>
                      お客様がご自身の個人情報を弊社に提供されるか否かは、お客様のご判断によりますが、
                      もしご提供されない場合には、適切なサービスが提供できない場合がありますので予めご了承ください。
                    </div>
                  </details>
                  <input type="checkbox" name="agree">
                  <span>
                    個人情報の取り扱いについてご同意いただける場合は、チェックをしてください。
                  </span>
                </div>
              </div>
              <input type="image" value="Submit" src="images/button-submit.png" alt="送信する">
            </form>
          </section>
        </article>

        <footer>
          <div id="footer-logo">
            <img src="images/logo-sp.png" alt="SocialTech">
          </div>
          <div id="footer-link">
            <a href="mission.html">MISSION</a>
            <a href="product.html">PRODUCT</a>
            <a href="index.html#aboutus">ABOUT US</a>
            <a href="index.html#vision">VISION</a>
            <a href="index.html#company">COMPANY</a>
            <a href="index.html#contact">CONTACT</a>
          </div>
          <div id="sns-footer">
            <a href="https://www.facebook.com/sejuku2013"><img src="images/button-facebook.png" alt="Facebookのリンク"></a>
            <a href="https://twitter.com/samuraijuku"><img src="images/button-twitter.png" alt="Twitterのリンク"></a>
            <a href="https://www.youtube.com/channel/UCCFOQO5aDK0xXam4cUQXT8g"><img src="images/button-youtube.png" alt="YouTubeのリンク"></a>
            <span id="copyright">&copy;2021 SocialTech, Inc. All Rights Reserved. </span>
          </div>
        </footer>
      </main>
    </body>
  </html>
