<?
$arResult['instruction'] = $arResult['DISPLAY_PROPERTIES']['INSTRUCTION']['VALUE'];
$arResult['video'] = str_replace('/watch?v=', '/embed/', $arResult['DISPLAY_PROPERTIES']['VIDEO']['VALUE']);
$arResult['certificates'] = $arResult['DISPLAY_PROPERTIES']['CERTIFICATES']['VALUE'];

if ($arResult['video']) $GLOBALS["video"] = $arResult['video'];
?>