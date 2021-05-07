<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
if (!empty($arResult)):
?>
    <a class="header__contact__select select-phone" id="phoneDropdownMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?=$arResult['DISPLAY_PROPERTIES']['PHONE_1']['VALUE']?></a>
    <div class="dropdown-menu phone-dropdown" aria-labelledby="phoneDropdownMenu">
        <a class="phone-dropdown__phone" href="tel:<?=$arResult['DISPLAY_PROPERTIES']['PHONE_1']['VALUE']?>"><?=$arResult['DISPLAY_PROPERTIES']['PHONE_1']['VALUE']?><br></a>
        <a class="phone-dropdown__phone" href="tel:<?=$arResult['DISPLAY_PROPERTIES']['PHONE_2']['VALUE']?>"><?=$arResult['DISPLAY_PROPERTIES']['PHONE_2']['VALUE']?></a>
        <p class="phone-dropdown__time"><?=$arResult['DISPLAY_PROPERTIES']['WORKING_HOURS']['VALUE']?></p>
        <button class="phone-dropdown__btn" data-toggle="modal" data-target="#contactModal">Оставить заявку</button>
    </div><br/>
    <a class="header__contact__text text-mail" href="mailto:<?=$arResult['DISPLAY_PROPERTIES']['EMAIL']['VALUE']?>"><?=$arResult['DISPLAY_PROPERTIES']['EMAIL']['VALUE']?></a>
<?endif?>