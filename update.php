<?php
$download1 = "../files/WinMessenger.msi"; //Download URL, variable is used in links.php
$download2 = "http://www.vypress.com/ftp/WinMessenger28.msi"; //Download URL, variable is used in links.php
$download3 = "ftp://ftp.winmessenger.com/WinMessenger28.msi"; //Download URL, variable is used in links.php
$file_size_mb = "1"; //File size, variable is used in download.php
$prog_ver = "2.8"; //Program version, variable is used in download.php

function parse_pad_file()
{
global $download1;
global $download2;
global $download3;
global $file_size_mb;
global $prog_ver;

$file_name = "pads/winmessenger.xml";

if(!file_exists($file_name)) return false;

$xml = simplexml_load_file($file_name);
if(!$xml) return false;

$prog_ver = $xml->Program_Info->Program_Version;
$download1 = $xml->Web_Info->Download_URLs->Primary_Download_URL;
$download2 = $xml->Web_Info->Download_URLs->Secondary_Download_URL;
$download3 = $xml->Web_Info->Download_URLs->Additional_Download_URL_1;
$file_size_mb = $xml->Program_Info->File_Info->File_Size_MB;

return true;
}

function fdefine_param($f, $paramname, $param)
{
	fprintf($f, "define('%s', '%s');\n", $paramname, $param);
}

function fdefine_link($f, $paramname, $link_href, $is64 = false, $isRus = false)
{
	if($is64)
	{
		$ext = substr($link_href,-4, -1);
		$link_href = substr_replace($link_href, 'x64'.$ext, -4, -1);
	}

	if($isRus)
	{
		$ext = substr($link_href,-4, -1);
		$link_href = substr_replace($link_href, 'Rus'.$ext, -4, -1);
	}

	$filename = "";
	$slash = strrchr($link_href,'/');
	if($slash)
		$filename = substr($slash,1);
	else
		$filename = $link_href;

	fprintf($f, "define('%s', '<a type=\"application/octet-stream\" href=\"%s\">%s</a>');\n", $paramname, $link_href, $filename);
}

function get_filesize_mb($filename)
{
	global $file_size_mb;
	
	$path = 'files/'.$filename;

	if(file_exists($path))
	{
		$size = filesize($path)/1024/1024;
		echo "Size of file '".$filename."' is ".$size." MB.<br/>";
		return $size;
	}
	else echo "File '".$filename."' does not exists.<br/>";

	return $file_size_mb;//It is a default value
}

if(!parse_pad_file())
{
	echo "Unable to parse the PAD file.";
	return;
}

echo "The PAD file was processed successfully.<br/>";
echo $download1;
echo "<br/>";
echo $download2;
echo "<br/>";
echo $download3;
echo "<br/>";
echo $file_size_mb;
echo "<br/>";
echo $prog_ver;
echo "<br/>";

$pad_links_name = 'pad_links.php';
$fw = fopen($pad_links_name, 'w');
if(!$fw)
{
echo "Unable to open file '".$pad_links_name."'.";
return;
}

//Generate file names
$filename32 = "";
$slash = strrchr($download1,'/');
if($slash)
	$filename32 = substr($slash,1);
else
	$filename32 = $download1;

$ext = substr($filename32,-4);
$filename64 = substr_replace($filename32, 'x64'.$ext, -4);
$filename32rus = substr_replace($filename32, 'Rus'.$ext, -4);
$filename64rus = substr_replace($filename64, 'Rus'.$ext, -4);

$file_size_mb_32 = get_filesize_mb($filename32);
$file_size_mb_64 = get_filesize_mb($filename64);
$file_size_mb_32_rus = get_filesize_mb($filename32rus);
$file_size_mb_64_rus = get_filesize_mb($filename64rus);

fputs($fw, '<?php');
fputs($fw, "\n//Automatically generaged by update.php file\n");
fputs($fw, "//Contains download links fot the latest version of WinMessenger from /pads/WinMessenger.xml\n");
fputs($fw, "//Included to segments.php\n");

fputs($fw, "\n");

fdefine_param($fw, 'WM_LATEST_VER', $prog_ver);
fdefine_param($fw, 'WM_FILE_SIZE', number_format($file_size_mb_32, 2, '.', ''));
fdefine_param($fw, 'WM_FILE_SIZE64', number_format($file_size_mb_64, 2, '.', ''));
fdefine_param($fw, 'WM_FILE_SIZE_RUS', number_format($file_size_mb_32_rus, 2, '.', ''));
fdefine_param($fw, 'WM_FILE_SIZE64_RUS', number_format($file_size_mb_64_rus, 2, '.', ''));

fputs($fw, "\n");

fdefine_link($fw, 'DOWNLOAD_1_28', $download1);
fdefine_link($fw, 'DOWNLOAD_2_28', $download2);
fdefine_link($fw, 'DOWNLOAD_3_28', $download3);
fdefine_link($fw, 'DOWNLOAD_28_RUS', '../files/'.$filename32rus);
fputs($fw, "\n");

fdefine_link($fw, 'DOWNLOAD_1_28x64', $download1, true);
fdefine_link($fw, 'DOWNLOAD_2_28x64', $download2, true);
fdefine_link($fw, 'DOWNLOAD_3_28x64', $download3, true);
fdefine_link($fw, 'DOWNLOAD_28x64_RUS', '../files/'.$filename64rus);

fputs($fw, '?');
fputs($fw, '>');
fclose($fw);

echo "File '".$pad_links_name."' was updated successfully.<br/>";

if(chmod($pad_links_name, 0777))
	echo "File permissions were changed successfully.";
else
	echo "Unable to change file permissions.";
?>