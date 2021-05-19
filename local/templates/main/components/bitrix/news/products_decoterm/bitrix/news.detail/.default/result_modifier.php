<?
$i = 0;
foreach($arResult['DISPLAY_PROPERTIES']['INSTRUCTIONS']['VALUE'] as $instruction)
{
    $GLOBALS['instructions'][$i] = CFile::GetPath($instruction);
    $i++;
}

$i = 0;
foreach($arResult['DISPLAY_PROPERTIES']['CERTIFICATES']['VALUE'] as $instruction)
{
    $GLOBALS['certificates'][$i] = CFile::GetPath($instruction);
    $i++;
}

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