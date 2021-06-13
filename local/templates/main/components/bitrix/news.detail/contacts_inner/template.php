<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
if (!empty($arResult)):
?>
	<div class="inside-page contacts-page">
		<div class="container"> 
            <div class="inside-wrapper contacts-wrapper">
                <h1 class="title"><?=$APPLICATION->ShowTitle(false); ?></h1>
                <div class="contact__block__town">
                    <p class="contact__block__town__text"><?=$arResult['NAME']?>, <?=$arResult['DISPLAY_PROPERTIES']['ADDRESS']['VALUE']?></p>
					<p class="contact__phone"><a style="font-size: 1rem;font-weight: 499; margin: 0px 0 0px 25px;" class="contact__block__phone" href="tel:<?=$arResult['DISPLAY_PROPERTIES']['PHONE_1']['VALUE']?>"><?=$arResult['DISPLAY_PROPERTIES']['PHONE_1']['VALUE']?></a>, <a style="font-size: 1rem;font-weight: 499;" class="contact__block__phone" href="tel:<?=$arResult['DISPLAY_PROPERTIES']['PHONE_2']['VALUE']?>"><?=$arResult['DISPLAY_PROPERTIES']['PHONE_2']['VALUE']?></a></p>
					<p><a style="font-size: 1rem;margin: 0px 0 0px 25px;" class="contact__block__mail" href="mailto:<?=$arResult['DISPLAY_PROPERTIES']['EMAIL']['VALUE']?>"><?=$arResult['DISPLAY_PROPERTIES']['EMAIL']['VALUE']?></a></p>
                </div>
            </div>
		</div>
	</div>
    <section class="contact">
        <div class="map">
            <div class="ymap-container">
                <div class="loader loader-default"></div>
                <div id="map-yandex"></div>
            </div>
		</div>
    </section>
<?endif?>