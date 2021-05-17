<?
$arResult['instruction'] = CFile::GetPath($arResult['DISPLAY_PROPERTIES']['INSTRUCTION']['VALUE']);
$video = $arResult['DISPLAY_PROPERTIES']['VIDEO']['VALUE'];
$arResult['certificates'] = CFile::GetPath($arResult['DISPLAY_PROPERTIES']['CERTIFICATES']['VALUE']);

$video = str_replace('/watch?v=', '/embed/', $video);
$video = str_replace('.be/', 'be.com/embed/', $video);

if ($video)
{
    $GLOBALS["video"] = $video;
    $arResult['video'] = $video;
}
?>