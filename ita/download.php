<?php
include('../links.php');
include('../segments.php');
display_head();
?>
            <div><!-- Download WinMessenger content -->
              <h1><em>WinMessenger:</em> Comodo e semplice messenger in tempo reale</h1>
                <h2>Download</h2>

                <p>Scarica la versione trial completa 31 giorni</p>

                <p><b style="color:Red;">versione 2.0</b>, <?= WM_FILE_SIZE_VER20?> KB:</p>

                <ul class="dlList">
                  <li>
                    <?=DOWNLOAD_1_20?>&nbsp;(Main location)
                  </li>
                <li>
                  <?=DOWNLOAD_2_20?>&nbsp;(HTTP server 1)
                </li>
                <li>
                  <?=DOWNLOAD_3_20?>&nbsp;(FTP server)
                </li>
                </ul>
                 		
			<p><b style="color:Red;">versione <?= WM_LATEST_VER?> 32 bit</b>, <?= WM_FILE_SIZE?> MB, Inglese soltanto:</p>
              <ul class="dlList">
                <li>
                  <?=DOWNLOAD_1_28?>&nbsp;(Main location)
                </li>
              </ul>
              	  
              <p><b style="color:Red;">versione <?= WM_LATEST_VER?> 64 bit</b>, <?= WM_FILE_SIZE64?> MB, Inglese soltanto:</p>
              <ul class="dlList">
                <li>
                  <?=DOWNLOAD_1_28x64?>&nbsp;(Main location)
                </li>
              </ul>
              	  
                <p><b>NOTA:</b> Utenti registrati possono scaricare la versione trial ed installarla sull`esistente versione registrata di WinMessenger per aggiornarla.</p>

                <p>Utili file di introduzione per amministratori di rete:</p>
                <ul class="dlList">
                <li>
                  <?=DOWNLOAD_PDF?>&nbsp;(File di dati per Microsoft SMS 1.2)
                </li>
                <li>
                  <?=DOWNLOAD_SMS?>&nbsp;(File di dati per Microsoft SMS 2.0 o successive)
                </li>
                </ul>

                <div class="hr"></div>

                <p style="text-align:center;">
                  Per sapere di pi&ugrave; sui nostri prodotti<br/>visita: <?=VYPRESS_LINK?>
              </p>

            </div><!-- Download WinMessenger content -->
<?php display_foot(); ?>