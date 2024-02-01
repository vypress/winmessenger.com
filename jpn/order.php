<?php
include('../links.php');
include('../segments.php');
include('../segments_order.php');
include('../shareit.php');
display_head();
?>
            <div><!-- Buy WinMessenger content -->
              <h1><em>WinMessenger:</em> 小さくて簡単なリアルタイムメッセージユーティリティー</h1>
              <h2>WinMessengerのご購入</h2>

              <ul style="list-style-type:disc;">
                <li>
                  <a href="#ordering">ご注文方法とお支払方法</a>
                </li>
                <li>
                  <a href="#prices">価格と製品番号</a>
                </li>
                <li>
                  <a href="#invoices">納品書 / 注文書</a>
                </li>
                <li>
                  <a href="#academic">教育用ディスカウント</a>
                </li>
              </ul>

              <div class="hr"></div>

              <a id="prices"></a>
              <h4>価格と製品番号</h4>

              <p>WinMessengerをお選びいただきありがとうございます！WinMessengerがお役に立つよう、心から願っております。</p>
              <p>VyPRESS Researchは信じられないほどの低価格でソフトウェアを提供しており、しかも生涯にわたる無料アップグレードとテクニカルサポートもサービスに含まれます！</p>

<?php display_price_table(); ?>

              <p>WinMessengerは、ネットワークやサイトや企業ごとにではなく、コンピュータごとにライセンスを発行しています。（企業向けの無制限ライセンスは除きます。）</p>
              <p> 当社では、お客様の組織の特殊なご要望に沿ったカスタマイズも、時給$80.00にて承っております。カスタムバージョンに興味がおありの場合は、当社のセールススタッフ（<?=MAIL_SALES_LINK?>）までお問い合わせください。</p>

              <div class="hr"></div>

              <a id="ordering"></a>
              <h4>ご注文と製品番号</h4>

              <p>
                当社では、<a href="#www">オンライン</a>、<a href="#fax_phone">ファックス</a>、<a href="#fax_phone">電話</a>、<a href="#wire_transfer">電信送金</a>の4種類のお支払方法がご利用いただけます。<a href="#www">セキュリティで保護されたお支払い</a>が保証されています。全てのお支払いは、米ドル、ユーロもしくは英ポンドにてお願いします。
              </p>
              <p>
                WinMessengerは、<a href="download.php">すぐにダウンロード</a>可能です。<a href="#www">オンライン注文フォーム</a>に必要事項を記入し製品を購入すると、ソフトウェアの使用制限を解除するライセンスがemailを通して送られます。お試し版のダウンロードは、購入手続きの前でも後でも構いません。
              </p>
              <p>
                ライセンスは当製品の将来のバージョンにおいても有効になります。アップグレードに料金は全くかかりません！
              </p>
              <p>
                適当な時間（クレジットカードでお支払いの場合は通常2営業日、その他の方法では2週間）が経過してもプロダクトライセンスが届かない場合は、当社までご連絡（<?=MAIL_SALES_LINK?>）ください。到着の遅れによるご迷惑に対し、深くお詫びします。
              </p>

              <a id="www"></a>
              <h5>ウェブを通してのご注文</h5>
              
              <p>
              WinMessengerをご注文の場合、最も簡単で最も速い方法です。お客様のクレジットカード情報は高度にセキュリティで保護された方法（<img src="../img/pix/SiteSecurityGraphic.gif" width="20" height="20" alt="Lock" style="vertical-align:middle;"/>）で、直接クレジットカードプロセッサに送信されます。お客様と自動クレジットカードプロセッサ以外は、誰もお客様のクレジットカード情報を見ないということを保証することで、お客様を保護しております。直接ご注文ページへ進んでいただけます。
              </p>

<?php display_order_form(); ?>

              <a id="fax_phone"></a>

              <h5>ファックス、電話でのご注文</h5>

              <p>
                ご注文やクレジットカード情報をオンラインで送信したくない場合は、以下のいずれかのShareItへご注文をファックスしていただくか、お電話していただけます。:
              </p>

              <table border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td>
                    <b><?=SH_NAME_DEU?>（ドイツ）</b><br/>
                    Tel: <i><?=SH_PHONE_GER?></i><br/>
                    Fax: <i><?=SH_FAX_GER?></i><br/><br/>
                  </td>
                  <td>
                    <img src="../img/ccc_logo.gif" width="90" height="30" alt="ShareIt!"/>
                  </td>
                </tr>

                <tr>
                  <td>
                    <b><?=SH_NAME_US?>（米国）</b><br/>
                    Tel: <i><?=SH_PHONE_US_1?>（または米国以外からの呼出し。）</i><br/>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <i><?=SH_PHONE_US_2?>（米国内の呼出しのため。）</i><br/>
                    Fax: <i><?=SH_FAX_US?></i>
                  </td>
                  <td></td>
                </tr>
              </table>

              <p>ファックスや電話でご注文の場合は、<a href="#prices">製品番号</a>をお書き留めいただくようお願いします。</p>

              <a id="wire_transfer"></a>
              <h5>電信送金（銀行送金）</h5>

              <p>当社の銀行口座への電信送金も承ります。詳細はVyPRESS&nbsp;Research,&nbsp;LLC （<?=MAIL_VYPRESS_SALES_LINK?>）までお問い合わせください。</p>

              <div class="hr"></div>

              <a id="invoices"></a>
              <h4>納品書、注文書</h4>

              <p>クレジットカードをご利用いただけない購買部のある企業では、通常注文書にてご注文いただきます。掛売り注文は、企業のレターヘッド入りのサイン済み注文表をファックスいただいた既存企業からのみ、受け付けております。お支払期限は、ご購入後30日とさせていただきます。（正味30日）注文表を送付もしくはファックスしていただいた後、<?=MAIL_SALES_LINK?>までemailにて当社へお知らせいただくようお願いします。</p>
              <p>注文書でご注文の際は、企業のレターヘッドを必ず使用してください。請求書送付先と共に企業の郵送先住所もお書き添えください。注文書には、購買担当者のサインを必ず入れてください。担当者のお名前、関連の電話番号、ファックス番号もお書き添えください。またemailにてライセンス情報を受け取る方のemailアドレス、プログラムの値段、<a href="#prices">製品番号</a>も忘れずにお書き添えください。<b>ベンダーは、VyPRESS Research, LLCではなく、 ShareIt!とご記入ください。</b> ShareIt! の宛先は以下に示します。ご購入に関してのご質問は、ShareIt!までお電話でもお問い合わせいただけます。（<a href="#fax_phone">上記の電話番号</a>をご覧ください。）</p>
              <p>注文書は以下の宛先までお送りください:</p>
              
              <table border="0" cellspacing="5">
					    <tr>
						    <td align="right" valign="top"><b>ファックス:</b></td>
						    <td>ヨーロッパ: <i><?=SH_FAX_GER?></i><br/>アメリカ: <i><?=SH_FAX_US?></i></td>
					    </tr>
					    <tr>
						    <td align="right" valign="top"><b>郵便:</b></td>
						    <td>ヨーロッパ: <b><?=SH_NAME_GER?></b><br/>
						        <i><?=SH_ADDRESS_GER?></i><br/>
						        Tel: <i><?=SH_PHONE_GER?></i><br/>
						        <br/>
                    <b><?=SH_NAME_UK?></b><br/>
                    <i><?=SH_ADDRESS_UK?></i><br/>
                    <br/>
                    アメリカ: <b><?=SH_NAME_US?></b><br/>
                    <i><?=SH_ADDRESS_US?></i><br/>
                    Tel: <i><?=SH_PHONE_US_1?>（または米国以外からの呼出し。）<br/>
                    &nbsp;&nbsp;&nbsp;&nbsp;<?=SH_PHONE_US_2?>（米国内の呼出しのため。）</i>
						    </td>
					    </tr>
              </table>

              <div class="hr"></div>

              <a id="academic"></a>
              <h4>教育用ディスカウント</h4>

              <img src="../img/school.jpg" width="219" height="147" alt="School" class="floating_block"/>

              <p>
                適格な学術機関、教育機関や公認された大学やその他の機関の学生、教員、スタッフは、50%までの割引価格でVyPRESSソフトウェアを購入可能です。対象資格についての詳細は、<a href="<?=VYPRESS_ACADEMIC_URL?>">ここをクリック</a>してください。アカデミックバージョンのVyPRESS softwareを購入されたい場合は、価格とご注文の手配について<?=MAIL_SALES_LINK?>までemailにてお問い合わせください。
              </p>
              </div><!-- Buy WinMessenger content -->
<?php display_foot(); ?>