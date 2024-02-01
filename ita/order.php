<?php
include('../links.php');
include('../segments.php');
require('../segments_order.php');
display_head();
?>
            <div><!-- Buy WinMessenger content -->
              <h1><em>WinMessenger:</em> Comodo e semplice messenger in tempo reale</h1>
              <h2>Ordina WinMessenger</h2>

              <ul style="list-style-type:disc;">
                <li>
                  <a href="#ordering">Registrazione e pagamenti</a>
                </li>
                <li>
                  <a href="#prices">Prezzi e condizioni</a>
                </li>
                <li>
                  <a href="#academic">Sconti speciali</a>
                </li>
              </ul>

              <div class="hr"></div>

              <a id="prices"></a>
              <h4>Prezzi e condizioni</h4>

              <p>
                Siamo felici che WinMessenger ti ha interessato. Speriamo che lo troverai sempre pratico e utile per il tuo lavoro.
              </p>
              <p>
                I prezzi per i prodotti di VyPRESS Research sono incredibilmente bassi, in pi&ugrave;, un utente che acquista la licenza d`uso pu&ograve; ricevere supporto tecnico ed aggiornare il programma gratuitamente!
              </p>

<?php display_price_table(); ?>

              <p>
                Per registrare WinMessenger bisogna acquistare tante licenze quanti sono i PC su cui verr&agrave; installato il programma (ad eccezione della licenza illimitata che si concede per l`uso del programma su tutti i PC di una singola azienda).
              </p>
              <p>
                Siamo in grado di customizzare WinMessenger sulla base delle esigenze della tua azienda al costo di 80$ all`ora.
                Nel caso ti interessa la versione customizzata, contattaci via e-mail: <?=MAIL_SALES_LINK?>.
            </p>

              <div class="hr"></div>

              <a id="ordering"></a>
              <h4>Registrazione e pagamenti</h4>

              <p>
                Il pagamento della licenza puт essere effettuato in vari modi &mdash; con la carta di credito <a href="#www">tramite internet</a>,
                mediante bonifico bancario, con assegno,
                inviandoci l&rsquo;ordine via fax oppure contattando per telefono il nostro dealer in Europa (parla in italiano).
                Il modo piщ veloce e sicuro e da noi consigliato  di acquistare WinMessenger и ordinare online, pagando con la carta di credito.
                Per  pagare mediante bonifico bancario o con assegno oppure inviarci l&rsquo;ordine via fax,
                <a href="#www">compila il modulo online</a> indicando il modo in cui preferisci effettuare il pagamento.
              </p>
              <p>
                La licenza rimarr&agrave; valida per  tutte le successive versioni del programma. Gli ulteriori aggiornamenti saranno gratuiti.
              </p>
              <ul>
                <li>
                  <a href="http://www.shareit.com/ccc/index.html?publisherid=11132&amp;cccid=[DASID_3980]&amp;languageid=5">Qual и la procedura per ordinare dal centro di assistenza clienti?</a>
                </li>
                <li>
                  <a href="http://www.shareit.com/ccc/index.html?publisherid=11132&amp;cccid=[DASID_6004]&amp;languageid=5">Come si ordina dietro fattura?</a>
                </li>
                <li>
                  <a href="http://www.shareit.com/ccc/index.html?publisherid=11132&amp;languageid=5">Customer Care Center</a>
                </li>
              </ul>
              <p>
                Dopo il pagamento dell&rsquo;ordine ti invieremo la chiave (il file firmato con la nostra frima elettronica) per sbloccare WinMessenger.
                La chiave deve essere inserita nella versione trial di WinMessenger installata sul tuo PC seguendo le istruzioni (puoi scaricare la versione trial <a href="download.php">qui</a>).
              </p>
              <p>
                Ti ringraziamo ancora una volta per aver scelto il nostro programma e ti invitiamo a passare all&rsquo;ordinazione:
              </p>

              <a id="www"></a>
              <h5>Ordinare online</h5>

              <p>
                &egrave; il modo pi&ugrave; veloce e semplice di acquistare WinMessenger.
                I dati riservati (come il numero della carta di credito) verranno trasmessi
                direttamente al credit card processor in maniera assolutamente sicura
                (<img src="../img/pix/SiteSecurityGraphic.gif" width="20" height="20" alt="Secure site icon" style="vertical-align:middle;" />).
                In questo modo i dati della carta di credito saranno trattati soltanto dal
                credit card processor automatico. Puoi accedere direttamente alla pagina dove inserire
                l&rsquo;ordine online:
              </p>

<?php display_order_form(); ?>

              <div class="hr"></div>
              <a id="academic"></a>
              <h4>Sconti speciali</h4>

              <img src="../img/school.jpg" width="219" height="147" alt="School" class="floating_block"/>

              <p>
                Universit&agrave;, istituti sociali, collegi, licei, studenti possono acquistare il software di VyPRESS con lo sconto fino al 50%.
                Per maggiori informazioni <a href="<?=VYPRESS_ACADEMIC_URL?>" >clicca qui</a>.
                Per acquistare versioni accademiche del software di VyPRESS, contattaci via e-mail: <?=MAIL_SALES_LINK?>.
              </p>
              </div><!-- Buy WinMessenger content -->
<?php display_foot(); ?>