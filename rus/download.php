<?php
include('../links.php');
include('../segments.php');
display_head();
?>
            <div><!-- Download WinMessenger content -->
              <h1><em>WinMessenger:</em> Простой и удобный обмен сообщениями</h1>
              <h2>Загрузить WinMessenger</h2>

              <p>
                На этой странице Вы можете скачать полнофункциональную версию WinMessenger и попробовать её в работе в течении 31-го дня
              </p>
              
              <p><b style="color:Red;">версия <?=WM_LATEST_VER?> 32 битная</b>, <?= WM_FILE_SIZE_RUS?> МБ:</p>
              <ul class="dlList">
                <li><?= DOWNLOAD_28_RUS?>&nbsp;(Этот сервер)
                </li>
              </ul>
              	  
              <p><b style="color:Red;">версия <?=WM_LATEST_VER?> 64 битная</b>, <?= WM_FILE_SIZE64_RUS?> МБ:</p>
              <ul class="dlList">
                <li><?= DOWNLOAD_28x64_RUS?>&nbsp;(Этот сервер)
                </li>
              </ul>
              
              <p>
                <b>ВНИМАНИЕ:</b> Пользователи, купившие лицензии на использование программы, могут использовать данный дистрибутив для обновления установленных у них версий.
              </p>

              <p>Файлы, полезные для развертывания программы в сети:</p>
              <ul class="dlList">
              <li>
                <?=DOWNLOAD_PDF?>&nbsp;(Файл для Microsoft SMS 1.2)
              </li>
              <li>
                <?=DOWNLOAD_SMS?>&nbsp;(Файл для Microsoft SMS 2.0 и выше)
              </li>
              </ul>


              <div class="hr"></div>

                <p style="text-align:center;">
                  Чтобы узнать о нашей компании и других производимых нами продуктах,<br/> пожалуйста, посетите наш корпоративный сервер: <?=VYPRESS_LINK?>
              </p>

            </div><!-- Download WinMessenger content -->
<?php display_foot(); ?>