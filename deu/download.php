<?php
include('../links.php');
include('../segments.php');
display_head();
?>
            <div><!-- Download WinMessenger content -->
                <h1><em>WinMessenger:</em> Ein kleines und einfaches Echtzeit Messaging Programm</h1>		

                <h2>Downloads</h2>

              <p>Laden Sie eine vollständige 31-Tage Test Version von WinMessenger herunter</p>
              <p><b style="color:Red;">version 2.0</b>, <?= WM_FILE_SIZE_VER20?> KB:</p>

              <ul class="dlList">
                <li>
                  <?=DOWNLOAD_1_20?>&nbsp;(Hauptspeicherort)
                </li>
              <li>
                <?=DOWNLOAD_2_20?>&nbsp;(HTTP server 1)
              </li>
                <li>
                  <?=DOWNLOAD_3_20?>&nbsp;(alternativer FTP Server)
                </li>
              </ul>

 			  <p><b style="color:Red;">version <?= WM_LATEST_VER?> 32 bit</b>, <?= WM_FILE_SIZE?> MB, nur englisch:</p>
              <ul class="dlList">
                <li>
                  <?=DOWNLOAD_1_28?>&nbsp;(Hauptspeicherort)
                </li>
              </ul>
              	  
              <p><b style="color:Red;">version <?= WM_LATEST_VER?> 64 bit</b>, <?= WM_FILE_SIZE64?> MB, nur englisch:</p>
              <ul class="dlList">
                <li>
                  <?=DOWNLOAD_1_28x64?>&nbsp;(Hauptspeicherort)
                </li>
              </ul>
             
              <p>
                <b>Anmerkung:</b> Lizensierte Nutzer können die Testversion zum Updaten über ihre bestehende lizensierte Installation installieren.
              </p>

              <p>Nützliche Implementationsdateien für Netzwerkadministratoren:</p>
              <ul class="dlList">
                <li>
                  <?=DOWNLOAD_PDF?>&nbsp;(Daten für  Microsoft SMS 1.2)
                </li>
              <li>
                <?=DOWNLOAD_SMS?>&nbsp;(Daten für  Microsoft SMS 2.0 oder höher)
              </li>
              </ul>

              <div class="hr"></div>

                <p style="text-align:center;">
                 Um mehr über unsere anderen Produkte zu erfahren,<br/>besuchen Sie bitte: <?=VYPRESS_LINK?>
              </p>

            </div><!-- Download WinMessenger content -->
<?php display_foot(); ?>