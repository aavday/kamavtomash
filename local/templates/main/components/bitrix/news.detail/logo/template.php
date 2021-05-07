<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
if (!empty($arResult)):
?>
    <a class="logo" href="/">
        <img src="<?=CFile::GetPath($arResult['DISPLAY_PROPERTIES']['LOGO']['VALUE'])?>" alt="Логотип компании"/>
    </a>
<?endif?>