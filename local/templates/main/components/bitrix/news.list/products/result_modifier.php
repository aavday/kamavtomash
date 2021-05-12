<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
$i = 0;

foreach($arResult['ITEMS'] as $arItem)
{
    $bigImg = CFile::GetPath($arItem["DETAIL_PICTURE"]["ID"]);

    $smallImg = CFile::ResizeImageGet(
        $arItem['DETAIL_PICTURE'],
        array('width' => 150, 'height' => 171),
        BX_RESIZE_IMAGE_PROPORTIONAL,
        true
    );

    $arResult['ITEMS'][$i]['img_small'] = $smallImg['src'];

    $i++;
}
?>