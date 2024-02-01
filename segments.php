<?php
//Header and footer for all pages are included to all web site files

require ('pad_links.php');

$current_lang_eng_name = 'English'; //Currently used language, variable is used also in segmetnts_order.php
$current_lang_iso_639_1 = 'en'; //Currently used language, variable is used also in segmetnts_order.php

function display_head()
{
//All folders have 3 letters name so $file looks like "/LNG/file.php"...
$script_name = $_SERVER["SCRIPT_NAME"];
$file=substr(strrchr($script_name, '/'), 1);
$lang_folder = substr($script_name, strrpos($script_name, '/')-3, 3);

//langs_array => array(ISO_639-2_Language_Code, ISO_639-1_Language_Code, English_name_of_Language, Localized_Language_name)
$langs = array ('eng'=>array('eng', 'en', 'English', 'English'),
				'spa'=>array('spa', 'es', 'Spanish', 'Español'),
				'deu'=>array('deu', 'de', 'German', 'Deutsch'),
				'fra'=>array('fra', 'fr', 'French', 'Fran&ccedil;ais'),
				'ita'=>array('ita', 'it', 'Italian', 'Italiano'),
				'rus'=>array('rus', 'ru', 'Russian', 'Русский'),
				'jpn'=>array('jpn', 'ja', 'Japanese', '日本語'));

global $current_lang_eng_name;
global $current_lang_iso_639_1;

$current_lang_eng_name = $langs[$lang_folder][2];
$current_lang_iso_639_1 = $langs[$lang_folder][1];

//<!DOCTYPE html PUBLIC "-//VyPRESS//DTD XHTML11-with Target//EN" "http://www.winmessenger.com/DTD/xhtml11-target.dtd">
//<link rel="search" href="http://support.vypress.com/?_a=knowledgebase&amp;group=winmessenger" />
//<link rel="help" href="http://support.vypress.com/?group=winmessenger" />
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta name="author" content="VyPRESS Research, LLC."/>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<meta http-equiv="Content-Script-Type" content="text/javascript" />

		<meta name="dc.language" scheme="ISO639-2" content="<?=$langs[$lang_folder][0]?>" />
		<meta http-equiv="Content-Language" content="<?=$langs[$lang_folder][1]?>" />

<?php include('lang_headers.php');?>

		<link rel="stylesheet" type="text/css" href="../css/common.css" />
		<link rel="stylesheet" type="text/css" href="css/navbar.css" />
		<link rel="shortcut icon" href="../favicon.ico" />

		<link rel="copyright" href="http://www.vypress.com/info/legal/" />
		<link rel="author" href="mailto:webmaster@vypress.com" />
		<link rel="start" href="http://www.winmessenger.com/" />

<?php
//Adding <link> elemets to language specific sites and title for this page
include('../' . 'titles_' . $file);

foreach ($langs as $key => $val)
{
	if(strcmp($key, $lang_folder))
	{
		echo "\t\t<link xml:lang=\"$val[1]\" title=\"";
		echo constant("TITLE_$key");
		echo "\" type=\"text/html\" rel=\"alternate\" hreflang=\"$val[1]\" href=\"../$key/$file\" />\r\n";
	}
}

echo "\r\n\t\t",'<title>',constant("TITLE_$lang_folder"),'</title>';
?>		
		<script type="text/javascript" src="../js/common.js"></script>
		<script type="text/javascript">
		<!--/*Preload the navigation bar images*/
			var imgDownload = new Image();
			imgDownload.src = "img/nav/download-hot.gif";
			var imgOrder = new Image();
			imgOrder.src = "img/nav/order-hot.gif";
			var imgContact = new Image();
			imgContact.src = "img/nav/writeus-hot.gif";
		-->
		</script>
	</head>

	<body>
	<!-- Language menu -->
	<div class="lang_bar">
<?php
//Adding <a> elemets to language specific pages
$add_sep=false;

foreach ($langs as $key => $val)
{
	echo "\t\t";
	if($add_sep) echo ' | ';
	else $add_sep=true;

	if(strcmp($key, $lang_folder))
	{
		echo '<a href="../', $key, "/$file\" onclick=\"OnLangClick('$key')\">", $val[3], '</a>';
	}
	else
	{
		echo '<b style="color: Navy;">', $val[3], '</b>';
	}
	
	echo "\r\n";
}

//Top navigation bar alts
if(!defined('NAV_ALT_HOME')) define('NAV_ALT_HOME', 'Homepage');
?>
	</div>

	 <!-- Main title -->
	<div class="logo">
	<img src="../img/maintitle2.jpg" width="480" height="96" alt="WinMessenger is small and easy real-time messaging utility!"/>
	</div>
	

 	<!-- news -->
	<div class="news">
	<a href = "download.php">The latest version is <?=WM_LATEST_VER?></a>&nbsp;&nbsp;
	</div>


	<!-- Main content -->
	<div class="main_content">
		<!-- Site navigation bar -->
		<div class="nav_bar">
			<a href="index.php"><img src="../img/pix/home2.gif" alt="<?=NAV_ALT_HOME?>" height="24" width="24" style="vertical-align:top; float:left;"/></a>
			<div class="hidden_block">
			/ <a href="download.php">Download</a>
			/ <a href="order.php">Order</a>
			/ <a href="writeus.php">Write us</a>
			</div>
			<div class="slash"></div><a href="download.php" class="download"></a><div class="slash"></div><a href="order.php" class="order"></a><div class="slash"></div><a href="writeus.php" class="writeus"></a>
		</div>

<?php
} //end of display_head()

function display_foot()
{
//Bottom navigation bar labels
if(!defined('NAVLABEL_HOME')) define('NAVLABEL_HOME', 'Home');
if(!defined('NAVLABEL_DOWNLOAD')) define('NAVLABEL_DOWNLOAD', 'Download WinMessenger');
if(!defined('NAVLABEL_ORDER')) define('NAVLABEL_ORDER','Purchase licenses');
if(!defined('NAVLABEL_CONTACTS')) define('NAVLABEL_CONTACTS', 'Contacts');
if(!defined('WM_BOTTOM_SLOGAN')) define('WM_BOTTOM_SLOGAN', 'WinMessenger is a Messenger service for Windows Vista and Windows 7!');
?>
		<!-- Site text navigation bar -->
		<div class="centered_bar">
			[ <a href="index.php"><?=NAVLABEL_HOME?></a> ]
			[ <a href="download.php"><?=NAVLABEL_DOWNLOAD?></a> ]
			[ <a href="order.php"><?=NAVLABEL_ORDER?></a> ]
			[ <a href="writeus.php"><?=NAVLABEL_CONTACTS?></a> ]
		</div>

	</div>  <!-- Main content -->

 	<!-- bottom slogan -->
	<div class="bottom_slogan"><?=WM_BOTTOM_SLOGAN?></div>
	<div><div id="adv">
	<p>Our other products:</p>
	<ul>
	<li>Vypress Chat - <a href="http://www.vypress.com/lan_chat">chat for LAN</a></li>
	<li>Vypress Messenger - <a href="http://www.vypress.com/lan_instant_messenger">instant messenger for LAN</a></li>
	<li>Vypress Auvis - <a href="http://www.vypress.com/products/auvis">receive only instant messenger client</a></li>
	<li>SafeKuvert - <a href="http://www.vypress.com/products/safekuvert">file encryption and digital signing PKCS#7 tool</a></li>
	</ul>
	</div></div>

	<div class="footer"><?php if(defined('COPYRIGHT_1')) echo COPYRIGHT_1," " ?>
&copy;2024 <a href="http://www.vypress.com/?ref=winmessenger"><img src="../img/vypress-small.gif" width="81" height="22" style="vertical-align:middle;"  alt="VyPRESS Research, LLC."/></a><?php if(defined('COPYRIGHT_2')) echo " ",COPYRIGHT_2 ?></div>
		
<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
try {
var pageTracker = _gat._getTracker("UA-1684303-4");
pageTracker._trackPageview();
} catch(err) {}</script>
	</body>
</html>
<?php
} //end of display_foot()
?>