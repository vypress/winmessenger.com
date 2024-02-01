<?php
include('../links.php');
include('../segments.php');
include('../segments_order.php');
include('../shareit.php');
display_head();
?>
            <div><!-- Buy WinMessenger content -->
              <h1><em>WinMessenger:</em> Utilidad práctica para los Mensajes Emergentes</h1>
              <h2>Comprar WinMessenger</h2>

              <ul style="list-style-type:disc;">
                <li>
                  <a href="#ordering">Ordenar y formas de pago</a>
                </li>
                <li>
                  <a href="#prices">Precios y números de partes</a>
                </li>
                <li>
                  <a href="#invoices">Facturas y órdenes de compras</a>
                </li>
                <li>
                  <a href="#academic">Descuentos académicos</a>
                </li>
              </ul>

              <div class="hr"></div>

              <a id="prices"></a>
              <h4>Precios y números de partes</h4>

              <p>
                ¡Estamos felices de que le guste WinMessenger! Esperamos que WinMessenger
                siempre lo ayude en su trabajo.
              </p>
              <p>
                VyPRESS Research propone precios increíblemente bajos para sus productos e incluye
                actualizaciones gratuitas y soporte técnico de por vida.
              </p>

<?php display_price_table(); ?>

              <p>
                El licenciamiento de WinMessenger se basa por computadora, y no por red, por
                sitio o por compañía (a excepción de licencias ilimitadas que son sólo para una
                compañía).
              </p>
              <p>
                Podemos adaptar WinMessenger para satisfacer las necesidades específicas de su
                organización, esto le costará $80.00 por hora. Si está interesado en
                versiones modificadas, por favor contáctenos: <?=MAIL_SALES_LINK?>.
            </p>

              <div class="hr"></div>

              <a id="ordering"></a>
              <h4>Compra y formas de pago</h4>

              <p>Aceptamos cinco formas de pago: <a href="#www">en línea</a>, <a href="#fax_phone">por fax</a>, <a href="#fax_phone">por teléfono</a>,
              <a href="#wire_transfer">por transferencia bancaria</a>
              y <a href="#mail">por correo</a>. <a href="#www">La seguridad de los pagos</a> está garantizada. Se paga sólo en euro o dólares.
              </p>
              <p>
                WinMessenger está disponible para su <a href="download.php">descarga inmediata</a>.
                Después de que haya comprado el producto al llenar <a href="#www">el formulario de compra en línea</a>, la licencia será enviada a su correo electrónico para
                que se pueda desbloquear el software y utilizarlo. Puede descargar la versión
                de prueba antes o después de que realice completamente el proceso de compra.
              </p>
              <p>
                  Su licencia será válida para todas las versiones futuras del producto. ¡Nunca se
                  verá obligado a pagar las actualizaciones!
              </p>
              <p>
                Si no recibe su licencia dentro de una cantidad del tiempo razonable
                (generalmente dos días hábiles para los pagos por tarjeta de crédito o dos
                semanas para los demás pagos), le rogamos que nos notifique por correo
                electrónico a la dirección <?=MAIL_SALES_LINK?>.
              Nos disculpamos por cualquier inconveniente causado por estas demoras.
            </p>

              <a id="www"></a>
              <h5>Comprar en línea</h5>

              <p>
                Esta es la manera más rápida y fácil de comprar WinMessenger. La información de
                su tarjeta de crédito se envía directamente al procesador automático de
                tarjetas de crédito de una manera altamente segura (<img src="../img/pix/SiteSecurityGraphic.gif"
                width="20" height="20" alt="Lock" style="vertical-align:middle;"/>). La operación tiene toda clase de garantías. Le
                aseguramos que nadie, excepto usted y el procesador automático, verá la
                información de su tarjeta de crédito. Ahora puede ir directamente a la página
                para comprar.
              </p>

<?php display_order_form(); ?>

              <a id="fax_phone"></a>

              <h5>Compra por teléfono o fax</h5>

              <p>
                Si no quiere enviar su compra y la información de su tarjeta de crédito en
                línea, Puede hacerlo por fax o llamar a ShareIt a algunos de los siguientes
                teléfonos:
              </p>

              <table border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td>
                    <b><?=SH_NAME_DEU?> (ALEMANIA)</b><br/>
                    Tel: <i><?=SH_PHONE_GER?></i><br/>
                    Fax: <i><?=SH_FAX_GER?></i><br/><br/>
                  </td>
                  <td align="center" colspan="2">
                    <img src="../img/ccc_logo.gif" width="90" height="30" alt="ShareIt!"/>
                  </td>
                </tr>

                <tr>
                  <td>
                    <b><?=SH_NAME_US?> (EEUU)</b><br/>
                    Tel: <i><?=SH_PHONE_US_1?> (para las llamadas fuera de los EEUU.)</i><br/>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <i><?=SH_PHONE_US_2?> (para las llamadas dentro de los EEUU.)</i><br/>
                    Fax: <i><?=SH_FAX_US?></i>
                  </td>
                </tr>
              </table>

              <p>
                Se recomienda que escriba el <a href="#prices">ID del producto</a>, si desea
                hacer su compra por fax o teléfono.
              </p>

              <a id="mail"></a>
              <h5>El pago en efectivo o con cheque</h5>

              <p>
                Si está en EEUU, puede enviar su cheque o giro postal a la
                oficina de ShareIt en EEUU:
              </p>
              <p><?=SH_NAME_US?><br/>
                <i><?=SH_ADDRESS_US?></i>
              </p>
              <p>
                <b>Los clientes en EEUU: Emita su cheque a la orden de
                "<?=SH_NAME_US?>"</b> Por favor, no envíe dinero en efectivo por
                correo. Esto es ilegal.
              </p>
              <p>
                <b>Los clientes que residen en otros países</b> pueden enviar su cheque o giro 
						  postal a:
              </p>
              <p><?=SH_NAME_GER?><br/>
                <i><?=SH_ADDRESS_GER?></i>
              </p>
              <p>
                <b>Por favor emita sus cheques a la orden de "<?=SH_NAME_DEU?>"</b>
              </p>
              
              <a id="wire_transfer"></a>
              <h5>Transferencia bancaria</h5>

              <p>
                También tiene la posibilidad de usar la transferencia bancaria (a nuestra
                cuenta bancaria). Por favor, contáctenos para obtener más información: <?=MAIL_VYPRESS_SALES_LINK?>.
              </p>

              <div class="hr"></div>

              <a id="invoices"></a>
              <h4>Facturas / Ordenes de Compra</h4>

              <p>
              Este es el
              método de pago previsto especialmente para las compañías (con departamentos de
              compra) que no utilizan tarjetas de crédito, sino que por lo general utilizan
              Órdenes de Compras. Aceptamos el pago por transferencia bancaria sólo de las
              compañías que nos han enviado por fax (por correo) la orden de compra impresa
              en papel con su membrete. El pago se realiza en un plazo de 30 días. Le rogamos
              que después de haber enviado la orden de compra nos notifique por e-mail
              <?=MAIL_SALES_LINK?>.
            </p>
              <p>
                Por favor, utilice papel con membrete para enviar la orden de compra. Incluya
                en su orden la dirección de su compañía y la dirección para la factura. La
                orden de compra tiene que ser firmada por un agente apoderado para realizar la
                compra. Por favor, indique el nombre de la persona con quien nos podemos
                contactar y todos los teléfonos y faxes de la compañía. Lo más importante es
                que nos escriba el correo electrónico de la persona a nombre de la cual se debe
                enviar la licencia del producto. Por favor incluya en su orden <a href="#prices">
                el número de la identificación del producto
                </a> y el precio del programa elegido. <b>¡El nombre del vendedor tiene que ser ShareIt! Y no VyPRESS&nbsp;Research,&nbsp;LLC
                </b> (la dirección de ShareIt puede encontrarla <a href="http://www.shareit.com/contact_headquarter.html?languageid=4">aquí</a>).
                Si tiene algunas dudas referidas a la compra, puede llamar a ShareIt (los
                números de los teléfonos están <a href="#fax_phone">arriba</a>).
              </p>
                
                <p>Para enviar una Orden de Compra utilice:</p>

              <table border="0" cellspacing="5">
					    <tr>
						    <td align="right" valign="top"><b>FAX:</b></td>
						    <td>En Europa: <i><?=SH_FAX_GER?></i><br/>En EEUU: <i><?=SH_FAX_US?></i></td>
					    </tr>
					    <tr>
						    <td align="right" valign="top"><b>Postal:</b></td>
						    <td>En Europa: <b><?=SH_NAME_GER?></b><br/>
						        <i><?=SH_ADDRESS_GER?></i><br/>
						        Tel: <i><?=SH_PHONE_GER?></i><br/>
						        <br/>
                    <b><?=SH_NAME_UK?></b><br/>
                    <i><?=SH_ADDRESS_UK?></i><br/>
                    <br/>
                    En EEUU: <b><?=SH_NAME_US?></b><br/>
                    <i><?=SH_ADDRESS_US?></i><br/>
                    Tel: <i><?=SH_PHONE_US_1?> (para las llamadas fuera de los EEUU.)<br/>
                    &nbsp;&nbsp;&nbsp;&nbsp;<?=SH_PHONE_US_2?> (para las llamadas dentro de los EEUU.)</i>
						    </td>
					    </tr>
              </table>

              <div class="hr"></div>

              <a id="academic"></a>
              <h4>Descuentos académicos</h4>

              <img src="../img/school.jpg" width="219" height="147" alt="School" class="floating_block"/>

              <p>
                Ofrecemos
                precios académicos reducidos para estudiantes, miembros del cuerpo académico de
                instituciones educativas y organizaciones sin propósitos de lucro. Para más
                información <a href="<?=VYPRESS_ACADEMIC_URL?>" >haga clic aquí</a>.
                Si desea comprar la versión académica de nuestro software de VyPRESS Research
                envíenos un e-mail a <?=MAIL_SALES_LINK?>.
            </p>
              </div><!-- Buy WinMessenger content -->
<?php display_foot(); ?>