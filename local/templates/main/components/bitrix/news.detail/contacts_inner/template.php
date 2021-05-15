<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
if (!empty($arResult)):
?>
	<div class="inside-page contacts-page">
		<div class="container"> 
            <div class="inside-wrapper contacts-wrapper">
                <h1 class="title"><?=$APPLICATION->ShowTitle(false); ?></h3>
                <div class="contact__block__town">
                    <a class="contact__block__town__select" data-toggle="modal" data-target="#selectTownModal"><?=$arResult['DISPLAY_PROPERTIES']['CITY']['VALUE']?></a><br/>
                    <p class="contact__block__town__text"><?=$arResult['DISPLAY_PROPERTIES']['ADDRESS']['VALUE']?></p>
                </div>
                <a class="contact__block__phone" href="tel:<?=$arResult['DISPLAY_PROPERTIES']['PHONE_1']['VALUE']?>"><?=$arResult['DISPLAY_PROPERTIES']['PHONE_1']['VALUE']?></a><br>
                <a class="contact__block__phone" href="tel:<?=$arResult['DISPLAY_PROPERTIES']['PHONE_2']['VALUE']?>"><?=$arResult['DISPLAY_PROPERTIES']['PHONE_2']['VALUE']?></a><br>
                <a class="contact__block__mail" href="mailto:<?=$arResult['DISPLAY_PROPERTIES']['EMAIL']['VALUE']?>"><?=$arResult['DISPLAY_PROPERTIES']['EMAIL']['VALUE']?></a><br>
                <button class="contact__block__btn" data-toggle="modal" data-target="#contactModal">Оставить заявку</button>
            </div>
		</div>
	</div>
    <section class="contact">
        <div class="map">
			<div id="map-card"></div>
		</div>
    </section>
<?endif?>