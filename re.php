<?php
// list of available languages, order it as you need
$phpLang_languages = array(
//	"en([-_][[:alpha:]]{2})?|english"		=>	array('eng', 'english'),
	"ru|russian"							=>	array('rus', 'russian'),
	"uk([-_][[:alpha:]]{2})?|ukrainian"		=>	array('rus', 'ukrainian'),
	"es([-_][[:alpha:]]{2})?|spanish"		=>	array('spa', 'spanish'),
	"de([-_][[:alpha:]]{2})?|german"		=>	array('deu', 'german'),
	"ja|japanese"							=>	array('jpn', 'japanese'),
	"fr([-_][[:alpha:]]{2})?|french"		=>	array('fra', 'french'),
	"it|italian"							=>	array('ita', 'italian'),
/*	"cs|czech"								=>	array('cs', 'czech'),
	"da|danish"								=>	array('da', 'danish'),
	"nl([-_][[:alpha:]]{2})?|dutch"			=>	array('nl', 'dutch'),
	"fi|finnish"							=>	array('fi', 'finnish'),
	"is|icelandic"							=>	array('is', 'icelandic'),
	"no|norwegian"							=>	array('no', 'norwegian'),
	"pl|polish"								=>	array('pl', 'polish'),
	"sk|slovak"								=>	array('sk', 'slovak'),
	"th|thai"								=>	array('th', 'thai'),
	"pt[-_]br"								=>	array('pt-br', 'brazilian portuguese'),
	"pt([-_][[:alpha:]]{2})?|portuguese"	=>	array('pt', 'portuguese'),
	"zh[-_]tw"								=>	array('zh-tw', 'chinese_traditional'),
	"zh([-_][[:alpha:]]{2})?|chinese"		=>	array('zh', 'chinese_simplified')
*/
);

// language code detection
function phpLang_detectLanguage($str, $from)
{
	$ext = '';
	reset($GLOBALS['phpLang_languages']);
	while($ext == '' && list($key, $name) = each($GLOBALS['phpLang_languages'])) {
		if (($from == 1 && eregi("^".$key."$",$str)) || ($from == 2 && eregi("(\(|\[|;[[:space:]])".$key."(;|\]|\))",$str))) {
			$ext = $name[0];
		}
	}

	return $ext;
}

//redirect to localized file
function redirectToLocalizedPage($file)
{
	$HTTP_ACCEPT_LANGUAGE = getenv('HTTP_ACCEPT_LANGUAGE');
	$HTTP_USER_AGENT = getenv('HTTP_USER_AGENT');

	$cookie_name = 'page_language';
	if(isset($_COOKIE[$cookie_name]) && file_exists($_COOKIE[$cookie_name])) define('phpLang_current', $_COOKIE[$cookie_name]);

	// Checking by server name first
	if(!defined('phpLang_current') && isset($HTTP_ACCEPT_LANGUAGE) && trim($HTTP_ACCEPT_LANGUAGE) != '') {
		// looks at the languages accepted by the browser
		$accepted = explode(',', $HTTP_ACCEPT_LANGUAGE);
		while(!defined('phpLang_current') && list($key, $name) = each($accepted)) {
			$code = explode(';', $name);
			
			$ext = phpLang_detectLanguage($code[0], 1);
			
			if(file_exists($ext)) {
				define('phpLang_current', $ext);
			}
		}
	}

	if (!defined('phpLang_current') && isset($HTTP_USER_AGENT) && trim($HTTP_USER_AGENT) != '') {
		// looks at the browser's identification
		
		$ext = phpLang_detectLanguage($HTTP_USER_AGENT, 2);
		if(file_exists($ext)) {
			define('phpLang_current', $ext);
		}
	}

	//Default language is English
	if (!defined('phpLang_current') || !file_exists(phpLang_current))
		define('phpLang_current', 'eng');

	if(defined('phpLang_current') && file_exists(phpLang_current))
	{
		header('HTTP/1.1 302 Moved temporarily');
		header('Location: /' . phpLang_current . '/' . $file);
		header('Content-Type: text/html; charset=UTF-8');
		//header('Connection: close');
		
		echo '<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/1999/REC-html401-19991224/strict.dtd"><html><head><title>Object moved</title></head><body><h2>Object moved to <a href="/';
		echo phpLang_current. '/' . $file;
		echo '">here</a>.</h2></body></html>';
	}

	return;
}
?>
