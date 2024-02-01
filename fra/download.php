<?php
include('../links.php');
include('../segments.php');
display_head();
?>
            <div><!-- Download WinMessenger content -->
                <h1><em>WinMessenger:</em> Un utilitaire de messagerie en temps réel simple er facile</h1>
                <h2>Téléchargements</h2>

                <p>Téléchargez une version complète de WinMessenger pour une période d’essai de 31 jours</p>
              <p><b style="color:Red;">version 2.0</b>, <?= WM_FILE_SIZE_VER20?> KB:</p>

                <ul class="dlList">
                <li>
                  <?=DOWNLOAD_1_20?>&nbsp;(adresse principale)
                </li>
                <li>
                  <?=DOWNLOAD_2_20?>&nbsp;(serveur HTTP 1)
                </li>
                <li>
                  <?=DOWNLOAD_3_20?>&nbsp;(serveur FTP secondaire)
                </li>
              </ul>

			<p><b style="color:Red;">version <?= WM_LATEST_VER?> 32 bit</b>, <?= WM_FILE_SIZE?> MB, L’anglais seulement:</p>
              <ul class="dlList">
                <li>
                  <?=DOWNLOAD_1_28?>&nbsp;(adresse principale)
                </li>
              </ul>
              	  
              <p><b style="color:Red;">version <?= WM_LATEST_VER?> 64 bit</b>, <?= WM_FILE_SIZE64?> MB, L’anglais seulement:</p>
              <ul class="dlList">
                <li>
                  <?=DOWNLOAD_1_28x64?>&nbsp;(adresse principale)
                </li>
              </ul>
              	  
              <p>
                <b>NOTE:</b> Les utilisateurs licencés peuvent faire la mise à jour de leur version licencée en téléchargeant et en installant la version d’essai.
              </p>

              <p>Fichiers de déploiement pour les administrateurs de réseaux :</p>
              <ul class="dlList">
                <li>
                  <?=DOWNLOAD_PDF?>&nbsp;(Fichier de données pour Microsoft SMS 1.2)
                </li>
                <li>
                  <?=DOWNLOAD_SMS?>&nbsp;(Fichier de données pour Microsoft SMS 2.0 et plus)
                </li>
              </ul>

              <div class="hr"></div>

              <p style="text-align:center;">
                    Pour en savoir plus sur nos autres produits,<br/>visitez: <?=VYPRESS_LINK?>
            </p>
            </div><!-- Download WinMessenger content -->
<?php display_foot(); ?>