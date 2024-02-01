<?php
include('../links.php');
include('../segments.php');
display_head();
?>
            <div><!-- Download WinMessenger content -->
                <h1><em>WinMessenger:</em> Utilidad práctica para los Mensajes Emergentes</h1>
                <h2>Descargas</h2>

                <p>Descargar la versión de prueba de 31  días de WinMessenger</p>
                <p><b style="color:Red;">versión 2.0</b>, <?= WM_FILE_SIZE_VER20?> KB:</p>

                <ul class="dlList">
                <li>
                  <?=DOWNLOAD_1_20?>&nbsp;(Ubicación principal)
                </li>
                <li>
                  <?=DOWNLOAD_2_20?>&nbsp;(HTTP servidor 1)
                </li>
                <li>
                  <?=DOWNLOAD_3_20?>&nbsp;(FTP servidor alternativo)
                </li>
              </ul>

			<p><b style="color:Red;">versión <?= WM_LATEST_VER?> 32 bit</b>, <?= WM_FILE_SIZE?> MB, Inglés solamente:</p>
              <ul class="dlList">
                <li>
                  <?=DOWNLOAD_1_28?>&nbsp;(Ubicación principal)
                </li>
              </ul>
              	  
              <p><b style="color:Red;">versión <?= WM_LATEST_VER?> 64 bit</b>, <?= WM_FILE_SIZE64?> MB, Inglés solamente:</p>
              <ul class="dlList">
                <li>
                  <?=DOWNLOAD_1_28x64?>&nbsp;(Ubicación principal)
                </li>
              </ul>
              	  
                <p><b>NOTA:</b> Los usuarios con licencia pueden descargar e instalar la versión de prueba sobre una versión existente para actualizarla.</p>

                <p>Archivos de distribución útil para los administradores de red:</p>
                <ul class="dlList">
                <li>
                  <?=DOWNLOAD_PDF?>&nbsp;(Archivo de datos para Microsoft SMS 1.2)</li>
                <li>
                  <?=DOWNLOAD_SMS?>&nbsp;(Archivo de datos para Microsoft SMS 2.0 o más nuevo)</li>
                </ul>
                
                <div class="hr"></div>

                <p style="text-align:center;">
                Para aprender más acerca de nuestros productos,<br/>por favor visite <?=VYPRESS_LINK?>
              </p>

            </div><!-- Download WinMessenger content -->
<?php display_foot(); ?>