<?php
$download1 = "../files/WinMessenger28.msi"; //Download URL, variable is used in links.php
$download2 = "http://www.vypress.com/ftp/WinMessenger28.msi"; //Download URL, variable is used in links.php
$download3 = ""; //Download URL, variable is used in links.php
$download4 = ""; //Download URL, variable is used in links.php
$file_size_mb = "1"; //File size, variable is used in download.php
$prog_ver = "2.8"; //Program version, variable is used in download.php

function parse_pad()
{
	//echo domxml_version();

	global $download1;

	$file_name = "pads/winmessenger.xml";
	if(file_exists($file_name))
	{
		$pad_parsed = true;
		$xml = simplexml_load_file($file_name);
		echo $xml->Program_Info->Program_Name,"<br/>";
		echo $xml->Program_Info->Program_Version,"<br/>";
		$download1 = $xml->Web_Info->Download_URLs->Primary_Download_URL;

		echo $xml->Web_Info->Download_URLs->Secondary_Download_URL,"<br/>";
		echo $xml->Web_Info->Download_URLs->Additional_Download_URL_1,"<br/>";
		echo $xml->Web_Info->Download_URLs->Additional_Download_URL_2,"<br/>";
		echo $xml->Program_Info->File_Info->File_Size_MB,"<br/>";

		$filename = "";
		$slash = strrchr($download1,'/');
		if($slash)
			$filename = substr($slash,1);
		else
			$filename = $download1;

		echo $filename;
		//echo $xml->XML_DIZ_INFO;
		//var_dump($xml);
	}
	else
	{
		exit("Failed to open winmessenger.xml.");
	}

	$dom = new DOMDocument();
	$dom->load($file_name);

	if(!$dom)
	{
		echo "Error while parsing the document";

		exit();
	}

	$elements = $dom->getElementsByTagName ("Program_Name");
	echo $elements->item(0)->nodeValue;


	//if(!$dom = domxml_open_file("/pads/winmessenger.xml"))
	//{
	//	echo "Error while parsing the document";
	//	exit;
	//}

	//$root = $dom->document_element();
	//$file_name_elements = $dom->get_elements_by_tagname("Filename_Versioned");
	//$file_name = $file_name_elements[0]->node_value();
}
?>