<?php
include('../links.php');
include('../segments.php');
include('../segments_order.php');
include('../shareit.php');
display_head();
?>
            <div><!-- Buy WinMessenger content -->
              <h1><em>WinMessenger:</em> Small and easy real-time messaging utility</h1>
              <h2>Buy WinMessenger</h2>

              <ul style="list-style-type:disc;">
                <li>
                  <a href="#ordering">Ordering and Payment methods</a>
                </li>
                <li>
                  <a href="#prices">Prices and Part Numbers</a>
                </li>
                <li>
                  <a href="#invoices">Invoices / Purchase orders</a>
                </li>
                <li>
                  <a href="#academic">Education Discounts</a>
                </li>
              </ul>

              <div class="hr"></div>

              <a id="prices"></a>
              <h4>Prices and Part Numbers</h4>

              <p>
                We are very happy that you like WinMessenger! We hope WinMessenger will always help
                you at your work.
              </p>

              <p>
                VyPRESS Research offer unbelievably low prices for software and it includes
                lifetime free upgrades and technical support!
              </p>

<?php display_price_table(); ?>

              <p>
                WinMessenger is licensing on per computer basis, not per network, per site or per
                company (except unlimited license which is strongly for one company).
              </p>
              <p>
                We can customize WinMessenger to suit your organization's specific needs for $80
                per hour. If you are interested in customized version, please contact
                our sales staff: <?=MAIL_SALES_LINK?>.
            </p>

              <div class="hr"></div>

              <a id="ordering"></a>
              <h4>Ordering and Payment Methods</h4>

              <p>
                We accept five types of payment: <a href="#www">Online</a>, <a href="#fax_phone">
                  Fax
                </a>, <a href="#fax_phone">Phone</a>, <a href="#wire_transfer">Wire Transfer</a>
                and <a href="#mail">Mail</a>. <a href="#www">Secure Payments</a> assured.
                All payment must be in US dollars ($), Euros (&euro;) or in Pounds Sterling (&pound;).
              </p>
              <p>
                WinMessenger is available for <a href="download.php">immediate download</a>. Once
                you have purchased the product by filling in the <a href="#www">online order form</a>,
                a license will be sent to you via email to unlock the software for use. You may
                download the trial software before or after you complete the purchase process.
              </p>
              <p>
                Your license will be valid for all future versions of the product. You will never
                be charged for upgrades!
              </p>
              <p>
                If you do not receive your product license within a reasonable amount of time (usually
                two business days for credit card payments or two weeks for other payments), please notify us via e-mail <?=MAIL_SALES_LINK?>!
                We apologize for any inconvenience caused by such delays.
              </p>

              <a id="www"></a>
              <h5>Order through the World Wide Web</h5>

              <p>
                This is the fastest and easiest way to order WinMessenger. Your credit card information
                is sent directly to the credit card processor in a highly secure manner (<img src="../img/pix/SiteSecurityGraphic.gif"
                    width="20" height="20" alt="Lock" style="vertical-align:middle;"/>). We protect you
                by ensuring that nobody but you and the automated credit card processor will see
                your credit card information. You can go directly to the order page:
              </p>

<?php display_order_form(); ?>

              <a id="fax_phone"></a>

              <h5>Fax or Phone Orders</h5>

              <p>
                If you do not want to submit your order and credit card information online, you
                can fax your order or call ShareIt at any of the following locations:
              </p>

              <table border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td>
                    <b><?=SH_NAME_DEU?> (GERMANY)</b><br/>
                    Phone: <i><?=SH_PHONE_GER?></i><br/>
                    Fax: <i><?=SH_FAX_GER?></i><br/><br/>
                  </td>
                  <td>
                    <img src="../img/ccc_logo.gif" width="90" height="30" alt="ShareIt!"/>
                  </td>
                </tr>

                <tr>
                  <td>
                    <b><?=SH_NAME_US?> (USA)</b><br/>
                    Phone: <i><?=SH_PHONE_US_1?> (for calls from outside the U.S.)</i><br/>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <i><?=SH_PHONE_US_2?> (for calls within the U.S.)</i><br/>
                    Fax: <i><?=SH_FAX_US?></i>
                  </td>
                  <td></td>
                </tr>
              </table>

              <p>
                It is recommended that you wrote down <a href="#prices">product ID</a> if you wish
                to make your purchase by fax or by phone.
              </p>

              <a id="mail"></a>
              <h5>Check and Cash Orders</h5>

              <p>If you're located in the U.S., you can send your check or money order to ShareIt! Inc. USA office:</p>
              <p>
                <?=SH_NAME_US?><br/>
                <i>
                  <?=SH_ADDRESS_US?>
                </i>
              </p>
              <p>
                <b>Please make U.S. checks payable to "<?=SH_NAME_US?>"</b> (U.S. customers: Please do not send cash.
                It is illegal to mail cash in the United States.)
              </p>
              <p>
                <b>Non-U.S. Customers:</b> if you prefer to pay with cash or by check, please
                send payment to:
              </p>
              <p>
                  <?=SH_NAME_GER?><br/>
                <i>
                  <?=SH_ADDRESS_GER?>
                </i>
              </p>
              <p>
                <b>Please make checks payable to "<?=SH_NAME_DEU?>"</b> (Note:
                please do not send eurocheques in US$. We can only accept eurocheques in Euro.)
              </p>

              <a id="wire_transfer"></a>
              <h5>Wire Transfer (Bank Transfer)</h5>

              <p>
                You can also use the wire transfer (to our bank account); contact VyPRESS&nbsp;Research,&nbsp;LLC
                (<?=MAIL_VYPRESS_SALES_LINK?>) for more details.
            </p>

              <div class="hr"></div>

              <a id="invoices"></a>
              <h4>Invoices / Purchase orders</h4>

              <p>
                Companies with purchasing departments that do not use credit cards usually use Purchase
                Orders. We accept orders on account only from established companies that have faxed
                us signed Purchase Orders on their company letterhead. We have given the customer
                a payment deadline of 30 days from purchase (Terms: Net30). Please notify us via
                e-mail <?=MAIL_SALES_LINK?> after you sent (or faxed) the Purchase Order.
            </p>
              <p>
                Please use company letterhead to submit the purchase order. Include your company's
                mailing address as well as billing address. Purchase orders need to be signed by
                a purchasing agent of your company. Please give name for the point of contact. Include
                all pertinent telephone numbers, both voice and fax. Most Importantly please include
                the email address of the person you would like to have the license information emailed
                to. Please include the <a href="#prices">Product ID</a> number as well as the cost
                of the program. <b>The vendor needs to be made out to ShareIt! and not VyPRESS&nbsp;Research,&nbsp;LLC.</b>
                ShareIt! addresses are <a href="#mail">here</a>. You can call to ShareIt
                if you have any purchase-related questions (see phone numbers <a href="#fax_phone">above</a>).
              </p>
              <p>To send Purchase Order use following:</p>
              <table border="0" cellspacing="5">
					    <tr>
						    <td align="right" valign="top"><b>FAX:</b></td>
						    <td>In Europe: <i><?=SH_FAX_GER?></i><br/>In USA: <i><?=SH_FAX_US?></i></td>
					    </tr>
					    <tr>
						    <td align="right" valign="top"><b>Snail Mail:</b></td>
						    <td>In Europe: <b><?=SH_NAME_GER?></b><br/>
						        <i><?=SH_ADDRESS_GER?></i><br/>
						        Phone: <i><?=SH_PHONE_GER?></i><br/>
						        <br/>
                    <b><?=SH_NAME_UK?></b><br/>
                    <i><?=SH_ADDRESS_UK?></i><br/>
                    <br/>
                    In USA: <b><?=SH_NAME_US?></b><br/>
                    <i><?=SH_ADDRESS_US?></i><br/>
                    Phone: <i><?=SH_PHONE_US_1?> (for calls from outside the U.S.)<br/>
                    or <?=SH_PHONE_US_2?> (for calls within the U.S.)</i>
						    </td>
					    </tr>
              </table>

              <div class="hr"></div>

              <a id="academic"></a>
              <h4>Education Discounts</h4>

              <img src="../img/school.jpg" width="219" height="147" alt="School" class="floating_block"/>

              <p>
                Eligible Academic and Educational Institutions and the Students, Faculty and Staff
                of accredited Colleges, Universities and other institutions are able to purchase
                VyPRESS software at up to 50% discounted pricing. For more information on eligibility,
                <a href="<?=VYPRESS_ACADEMIC_URL?>" >click here</a>. If you
                wish to purchase Academic versions of VyPRESS software, you should e-mail
                <?=MAIL_SALES_LINK?> for pricing and purchase arrangements.
              </p>
              </div><!-- Buy WinMessenger content -->
<?php display_foot(); ?>