<?php
include('../links.php');
include('../segments.php');
include('../segments_order.php');
include('../shareit.php');
display_head();
?>
            <div><!-- Buy WinMessenger content -->
              <h1><em>WinMessenger:</em> Ein kleines und einfaches Echtzeit Messaging Programm</h1>	
              <h2>WinMessenger kaufen</h2>

              <ul style="list-style-type:disc;">
                <li>
                  <a href="#ordering">Bestellung und Zahlungsmethoden</a>
                </li>
                <li>
                  <a href="#prices">Preise und Artikelnummern</a>
                </li>
                <li>
                  <a href="#invoices">Rechnungen / Kaufaufträge</a>
                </li>
                <li>
                  <a href="#academic">Bildungsrabatte</a>
                </li>
              </ul>

              <div class="hr"></div>

              <a id="prices"></a>
              <h4>Preise und Artikelnummern</h4>

              <p>
                Wir sind sehr erfreut, dass Ihnen WinMessenger gefällt! Wir hoffen WinMessenger
                wird Ihnen immer eine große Hilfe bei der Arbeit sein.
              </p>
              <p>
                VyPRESS Research bietet unglaublich niedrige Softwarepreise, inklusive
                  lebenslanger kostenloser Aktualisierungen und technische Unterstützung!
              </p>

<?php display_price_table(); ?>

              <p>
                WinMessenger lizensiert auf Computerbasis, nicht per Netzwerk, per Standort oder
                per Firma (ausgenommen unbegrenzte Lizenz, die sich auf ein Gesamtunternehmen
                bezieht).
              </p>
              <p>
                Wir können WinMessenger den besonderen Bedürfnissen Ihrer Organisation für
                $80,00 pro Stunde anpassen. Wenn Sie an eine individualisierten Version
                interessiert sind, setzen Sie sich bitte mit unserem Verkaufspersonal in
                Verbindung: <?=MAIL_SALES_LINK?>.
            </p>

              <div class="hr"></div>

              <a id="ordering"></a>
              <h4>Bestellung und Zahlungsmethoden</h4>

              <p>
                Wir nehmen fünf Arten von Zahlungen entgegen: 
                <a href="#www">Online</a>,
                <a href="#fax_phone">Fax</a>,
                <a href="#fax_phone">Phone</a>,
                <a href="#wire_transfer">Überweisung</a>
                und <a href="#mail">Mail</a>. <a href="#www">Zahlungssicherheit</a> gewährleistet.
              </p>
              <p>
                WinMessenger steht zum <a href="download.php">sofortigen Download</a> bereit.
                Sobald Sie das Produkt erworben haben, indem Sie das <a href="#www">Online Bestellformular</a>
                ausgefüllt haben, wird Ihnen die Lizenz per Email
                zugeschickt, mit der Sie die Software freischalten können. Sie können die
                Testversion vor oder nach dem Kauf herunterladen.
              </p>
              <p>
                  Ihre Lizenz gilt für alle zukünftigen Versionen des Produktes. Aktualisierungen
                  werden Ihnen niemals berechnet werden.
              </p>
              <p>
                Sollten Sie Ihre Produktlizenz nicht innerhalb eines angemessenen Zeitraumes
                erhalten (gemeinhin 2 Geschäftstage bei Kreditkartenkäufen, 2 Wochen bei andern
                Zahlungsweisen), benachrichtigen Sie uns durch E-mail Adresse <?=MAIL_SALES_LINK?>
                bitte! Wir entschuldigen uns für jegliches Ungemach, die derartige
                Verzögerungen verursachen.
              </p>

              <a id="www"></a>
              <h5>Bestellung im World Wide Web</h5>

              <p>
                Dies ist die schnellste und einfachste Methode WinMessenger zu bestellen. Ihre
                Kreditkarteninformationen werden über eine sichere Verbindung direkt an einen
                Kreditkartenbearbeiter gesendet
                (<img src="../img/pix/SiteSecurityGraphic.gif" width="20" height="20" alt="Lock" style="vertical-align:middle;" />).
                Wir schützen Sie indem wir gewährleisten, dass niemand
                außer Ihnen und dem automatisierten Kreditkartenbearbeiter Ihre
                Kreditkartendaten zu sehen bekommt. Sie können direkt auf die Bestellseite
                gehen:
              </p>

<?php display_order_form(); ?>

              <a id="fax_phone"></a>

              <h5>Fax- oder Telefonbestellung</h5>

              <p>
                Wenn Sie Ihre Kreditkarten Informationen nicht online übermitteln möchten, kann Sie Ihre Bestellung auch faxen oder Sharelt telefonisch wie folgt erreichen:
                </p>

              <table border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td>
                    <b><?=SH_NAME_DEU?> (DEUTSCHLAND)</b><br/>
                    Tel: <i><?=SH_PHONE_GER?></i><br/>
                    Fax: <i><?=SH_FAX_GER?></i><br/><br/>
                  </td>
                  <td>
                    <img src="../img/ccc_logo.gif" width="90" height="30" alt="ShareIt!"/>
                  </td>
                </tr>
              </table>

              <p>
                Es wird empfohlen, dass Sie die <a href="#prices">Artikelnummer (Produkt ID)</a> aufschreiben, wenn Sie Ihre Bestellung per Fax oder Telefon aufgeben möchten.
              </p>

              <a id="mail"></a>
              <h5>Scheck- und Barbestellungen</h5>

              <p>Wenn Sie es vorziehen per Scheck oder in Bar zu zahlen, schicken Sie Ihre Zahlung bitte an:</p>
              <p><?=SH_NAME_DEU?><br/>
              	<i><?=SH_ADDRESS_DEU?></i>
              </p>
              <p>
                <b>Bitte stellen Sie Schecks auf "<?=SH_NAME_DEU?>" aus</b> (Achtung: Bitte schicken Sie keine Euro-Schecks in US$. Wir akzeptieren Euro-Schecks nur in Euro.)
              </p>

              <a id="wire_transfer"></a>
              <h5>Banküberweisung</h5>

              <p>
                Sie können Ihre Zahlung auch direkt auf unser Bankkonto überweisen; setzten Sie sich mit VyPRESS&nbsp;Research,&nbsp;LLC (<?=MAIL_VYPRESS_SALES_LINK?>) für weitere Details in Verbindung.
            </p>

              <div class="hr"></div>

              <a id="invoices"></a>
              <h4>Rechnungen / Kaufaufträge</h4>

              <p>
                Unternehmen mit Einkaufsabteilungen, die keine Kreditkarten nutzen, verwenden im Allgemeinen Kaufaufträge.
                We nehmen Bestellungen auf Rechnung nur von etablierten Unternehmen, die uns einen unterzeichneten Kaufauftrag auf ihrem Briefkopf
                gefaxt haben, entgegen. Wir geben dem Kunden eine Zahlungsfrist von 30 Tagen nach Kauf (Bedingungen: Net30).
                Bitte benachrichtigen Sie uns per Email an <?=MAIL_SALES_LINK?>
                nachdem Sie uns den Kaufauftrag zugesendet (oder gefaxt) haben.
            </p>
              <p>
                Bitte nutzen Sie Ihren Briefkopf, um Ihren Kaufauftrag vorzulegen.
                Schließen Sie sowohl die Rechnungsanschrift als auch die Lieferadresse ein. Bitte geben Sie einen Namen für den Kontaktort an.
                Geben Sie alle relevanten Telefonnummern an, sowohl für Sprache als auch für Fax.
                Am aller wichtigsten ist aber die Email Adresse der Person, der wir die Lizenzinformationen zuschicken sollen.
                Bitte geben Sie sowohl die <a href="#prices">Artikelnummer</a> als auch die Kosten des Programms an.
                <b>Als Händler muß Sharelt!, nicht VyPRESS Research, LLC</b> angegeben werden.
                Sharelt! Adressen finden Sie <a href="http://www.shareit.com/contact_headquarter.html?languageid=2">hier</a>.
                Sollten Sie Fragen zu Ihrem Kauf haben, können Sie Sharelt! anrufen (siehe Telefonnummern <a href="#fax_phone">oben</a>).
              </p>
              <p>Schicken Sie Ihren Kaufauftrag wie folgt:</p>
              <table border="0" cellspacing="5">
					    <tr>
						    <td align="right" valign="top"><b>FAX:</b></td>
						    <td><i><?=SH_FAX_GER?></i></td>
					    </tr>
					    <tr>
						    <td align="right" valign="top"><b>Post:</b></td>
						    <td><b><?=SH_NAME_DEU?></b><br/>
						        <i><?=SH_ADDRESS_DEU?></i>
						    </td>
					    </tr>
              </table>

              <div class="hr"></div>

              <a id="academic"></a>
              <h4>Education Discounts</h4>

              <img src="../img/school.jpg" width="219" height="147" alt="School" class="floating_block"/>

              <p>
                Qualifizierte akademische und bildende Institutionen und Studenten, Fakultät und Mitarbeiter akkreditierter Colleges,
                Universitäten und anderer Institutionen können VyPress Software mit einem Rabatt von bis zu 50% erwerben.
                Für weitere Informationen zur Qualifikation bitte <a href="<?=VYPRESS_ACADEMIC_URL?>" >hier klicken</a>.
                Wenn Sie eine akademische Version von VyPRESS Software erwerben möchten, sollten Sie uns wegen Preisen und
                Kaufarrangements per Email an <?=MAIL_SALES_LINK?> benachrichtigen.
            </p>
              </div><!-- Buy WinMessenger content -->
<?php display_foot(); ?>