<?php
include('../links.php');
include('../segments.php');
display_head();
?>
            <div><!-- Download WinMessenger content -->
                <h1><em>WinMessenger:</em> 小さくて簡単なリアルタイムメッセージユーティリティー</h1>
                <h2>ダウンロード</h2>

                <p>WinMessengerの31日間お試し版をダウンロード</p>

              <p><b style="color:Red;">バージョン 2.0</b>, <?= WM_FILE_SIZE_VER20?> KB:</p>
              
              <ul class="dlList">
                <li>
                  <?=DOWNLOAD_1_20?>&nbsp;(メイン)
                </li>
                <li>
                  <?=DOWNLOAD_2_20?>&nbsp;(HTTP サーバー1)
                </li>
                <li>
                  <?=DOWNLOAD_3_20?>&nbsp;(代用 FTP サーバー)
                </li>
              </ul>
              	  
              <p><b style="color:Red;">バージョン <?= WM_LATEST_VER?> 32 bit</b>, <?= WM_FILE_SIZE?> MB, English:</p>
              <ul class="dlList">
                <li>
                  <?=DOWNLOAD_1_28?>&nbsp;(メイン)
                </li>
              </ul>
              	  
              <p><b style="color:Red;">バージョン <?= WM_LATEST_VER?> 64 bit</b>, <?= WM_FILE_SIZE64?> MB, English:</p>
              <ul class="dlList">
                <li>
                  <?=DOWNLOAD_1_28x64?>&nbsp;(メイン)
                </li>
              </ul>
              	  
                  <p>
                    <b>注意:</b> ライセンス済みユーザーは、お試し版をダウンロードし、既存のライセンス済みインストールの上からインストールすることで、アップデートが可能です。
                  </p>
                 
              <p>ネットワーク管理者向けの実用的な展開ファイル:</p>

              <ul class="dlList">
                <li>
                  <?=DOWNLOAD_PDF?>&nbsp;(Microsoft SMS 1.2用データファイル)
                </li>
                <li>
                  <?=DOWNLOAD_SMS?>&nbsp;(Microsoft SMS 2.0以降用データファイル)
                </li>
              </ul>
                
                <div class="hr"></div>

                <p style="text-align:center;">当社のその他の製品についての詳細は、<?=VYPRESS_LINK?>をご覧ください。</p>

            </div><!-- Download WinMessenger content -->
<?php display_foot(); ?>