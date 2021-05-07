<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?if (!empty($arResult)):?>
    <div class="footer__left">
        <a class="footer-logo" href="/">
            <img src="<?=CFile::GetPath($arResult['DISPLAY_PROPERTIES']['LOGO_FOOTER']['VALUE'])?>" alt="Логотип компании">
        </a>
        <div class="copyright">
            <?=$arResult['DISPLAY_PROPERTIES']['COPYRIGHT']['VALUE']?>
        </div>
    </div>
<?endif?>