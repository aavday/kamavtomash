<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?

$i = 0;

foreach($arResult['ITEMS'] as $arItem)
{
    $bigImg = CFile::GetPath($arItem["PREVIEW_PICTURE"]["ID"]);

    $arResult['ITEMS'][$i]['img_big'] = $bigImg;

    $smallImg = CFile::ResizeImageGet(
        $arItem['PREVIEW_PICTURE'],
        array('width' => 200, 'height' => 283),
        BX_RESIZE_IMAGE_PROPORTIONAL,
        true
    );

    $arResult['ITEMS'][$i]['img_small'] = $smallImg['src'];

    $i++;
}
?>