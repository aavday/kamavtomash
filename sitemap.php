<?
$CATALOG_IDS = [8];
$MENU_TYPE = 'top';

require_once($_SERVER['DOCUMENT_ROOT'] . '/bitrix/modules/main/include/prolog_before.php');
header('Content-Type: text/xml');
CModule::IncludeModule('iblock');
$site = 'https://' . $_SERVER['HTTP_HOST'];
$xml = new XMLWriter();
$xml->openMemory();
$xml->startDocument('1.0', 'UTF-8');
$xml->startElement('urlset');
$xml->writeAttribute('xmlns', 'http://www.sitemaps.org/schemas/sitemap/0.9');

$menu = new CMenu($MENU_TYPE);
$menu->Init($APPLICATION->GetCurDir(), true);
$menu = $menu->arMenu;

foreach ($menu as $item)
{
    $xml->startElement('url');
    $xml->writeElement('loc', $site . $item[1]);
    $xml->writeElement('lastmod', date('Y-m-d'));
    $xml->endElement();
}

foreach($CATALOG_IDS as $CATALOG_ID)
{
	$arSelect = array('ID', 'SECTION_PAGE_URL');
	$arFilter = array('IBLOCK_ID' => $CATALOG_ID, 'ACTIVE' => 'Y');
	$sections = CIBlockSection::GetList(array(), $arFilter, false, $arSelect, false);
	
	while ($section = $sections->GetNext()) 
	{
		$path_1 = $site . $section['SECTION_PAGE_URL'];
		$xml->startElement('url');
		$xml->writeElement('loc', $path_1);
		$xml->writeElement('lastmod', date('Y-m-d'));
		$xml->endElement();
	}

	$arSelect = array('ID', 'DETAIL_PAGE_URL');
	$arFilter = array('IBLOCK_ID' => $CATALOG_ID, 'ACTIVE' => 'Y');
	$elements = CIBlockElement::GetList(array(), $arFilter, false, false, $arSelect);
	while ($element = $elements->GetNext()) 
	{
		$path_1 = $site . $element['DETAIL_PAGE_URL'];
		$xml->startElement('url');
		$xml->writeElement('loc', $path_1);
		$xml->writeElement('lastmod', date('Y-m-d'));
		$xml->endElement();
	}
}


$xml->endElement();
echo $xml->outputMemory();
?>