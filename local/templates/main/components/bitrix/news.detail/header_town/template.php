<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
if (!empty($arResult)):
?>
    <a class="header__town__select select-town" data-toggle="modal" data-target="#selectTownModal"><?=$arResult['DISPLAY_PROPERTIES']['CITY']['VALUE']?></a><br/>
    <p class="header__town__text text-adress"><?=$arResult['DISPLAY_PROPERTIES']['ADDRESS']['VALUE']?></p>
<?endif?>