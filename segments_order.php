<?php
//Price table and an order form for order.php
function display_price_table()
{

//Table items labels should be defined in the lang_headers.php
//default language is English
if(!defined('QUANTITY')) define('QUANTITY', 'Quantity');
if(!defined('UNIT_PRICE')) define('UNIT_PRICE', 'Price per unit');
if(!defined('PRODUCT_ID')) define('PRODUCT_ID', 'Part # (Product ID)');
if(!defined('UNLIMITED_LICENSE')) define('UNLIMITED_LICENSE', 'Unlimited');
if(!defined('BUY_LINK')) define('BUY_LINK', 'buy');

global $current_lang_eng_name; //defined in the display_head() function of segmetnts.php
?>
		<table border="0" cellpadding="3" width="85%">
		<tr style="background-color:#D9EBFF;">
			<th align="center" ><?=QUANTITY?></th>
			<th align="center" ><?=UNIT_PRICE?></th>
			<th align="center" ><?=PRODUCT_ID?></th>
		</tr>
		<tr>
			<td align="center" >1..39</td>
			<td align="center" >$14.00 US</td>
			<td align="center" >140116
			<a href="https://secure.shareit.com/shareit/checkout.html?productid=140116&amp;language=<?=$current_lang_eng_name?>"><?=BUY_LINK?></a></td>
		</tr>
		<tr style="background-color:#D9EBFF;">
			<td align="center" >50..72</td>
			<td align="center" >$11.00 US</td>
			<td align="center" >140117
			<a href="https://secure.shareit.com/shareit/checkout.html?productid=140117&amp;license=50&amp;language=<?=$current_lang_eng_name?>"><?=BUY_LINK?></a></td>
		</tr>
		<tr>
			<td align="center" >100..362</td>
			<td align="center" >$8.00 US</td>
			<td align="center" >140118
			<a href="https://secure.shareit.com/shareit/checkout.html?productid=140118&amp;license=100&amp;language=<?=$current_lang_eng_name?>"><?=BUY_LINK?></a></td>
		</tr>
		<tr style="background-color:#D9EBFF;">
			<td align="center" ><?=UNLIMITED_LICENSE?></td>
			<td align="center" >$2900.00 US</td>
			<td align="center" >140119
			<a href="https://secure.shareit.com/shareit/checkout.html?productid=140119&amp;language=<?=$current_lang_eng_name?>"><?=BUY_LINK?></a></td>
		</tr>
		<tr>
			<td style="height:4px; background-color:#0056B5;" colspan="3"></td>
		</tr>
	</table>
 
<?php
} //end of display_price_table()

function display_order_form()
{
//Order form items labels should be defined in the lang_headers.php
//default language is English
if(!defined('NOSCRIPT_TEXT')) define('NOSCRIPT_TEXT', '<b style="color:#f00;">Your browser has JavaScript turned off.</b><br/>The order form below requires JavaScript is turned on.');
if(!defined('ORDER_ONLINE')) define('ORDER_ONLINE', 'Order Online');
if(!defined('IMAGE_CC_ALT')) define('IMAGE_CC_ALT', 'Order online using a credit card');
if(!defined('PRODUCT_NAME')) define('PRODUCT_NAME', 'Product:');
if(!defined('LIC_QUANTITY')) define('LIC_QUANTITY', 'Licenses Quantity:');
if(!defined('NOTE_UNLIMITED')) define('NOTE_UNLIMITED', '<b>NOTE:</b> Enter "-1" for unlimited license.');
if(!defined('IMAGE_CHECKOUT_ALT')) define('IMAGE_CHECKOUT_ALT', 'Buy it now on secure server');
if(!defined('HAVE_FORM_PROBLEMS')) define('HAVE_FORM_PROBLEMS', 'Have troubles with purchasing?<br/>Try this alternative e-commerce provider');

global $current_lang_iso_639_1; //defined in the display_head() function of segmetnts.php
global $current_lang_eng_name; //defined in the display_head() function of segmetnts.php
?>
		<noscript><p><?=NOSCRIPT_TEXT?></p></noscript>

		<form action="https://secure.shareit.com/shareit/checkout.html" id="OrderForm" xml:lang="<?=$current_lang_iso_639_1?>" onsubmit="return OnPlaceOrder();">
		<table cellpadding="5">
			<tr>
				<td colspan="2" align="center">
				<b><?=ORDER_ONLINE?></b>
				<img src="../img/pix/CreditCardsSmall.gif" alt="<?=IMAGE_CC_ALT?>" width="291" height="34" style="margin: 2px 2px 2px 2px; vertical-align:middle;"/>
				</td>
			</tr>
			<tr>
				<td align="right"><?=PRODUCT_NAME?></td>
				<td><b>WinMessenger</b></td>
			</tr>
			<tr valign="top">
				<td align="right"><?=LIC_QUANTITY?></td>
				<td><input type="text" name="license" id="license" size="4" maxlength="4" /><br/><?=NOTE_UNLIMITED?></td>
			</tr>
			<tr class="hidden_block">
				<td align="right">Product ID:</td>
				<td><input type="hidden" name="productid" id="productid" value="140116" /></td>
			</tr>
			<tr class="hidden_block">
				<td align="right">Language:</td>
				<td><input type="hidden" name="language" id="language" value="<?=$current_lang_eng_name?>" /></td>
			</tr>
			<tr>
				<td colspan="2" align="center" valign="middle">
				<input type="image" src="img/proceedtocheckout.gif" alt="<?=IMAGE_CHECKOUT_ALT?>" size="90" />
				</td>
			</tr>
		</table>
		</form>

		<p><?=HAVE_FORM_PROBLEMS?> <a href="http://www.regnow.com/softsell/nph-softsell.cgi?item=1349-4&amp;styleid=12159">(RegNow - A Digital River Company)...</a>
		</p>
		
<?php
} //end of display_order_form()
?>