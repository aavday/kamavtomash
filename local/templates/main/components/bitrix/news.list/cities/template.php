<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?if (!empty($arResult)):?>
    <ul class="modal-town__list">
        <?foreach ($arResult["ITEMS"] as $arItem):?>
            <li><a class="modal-town__link" href="#"><?=$arItem["NAME"]?></a></li>
        <?endforeach?>
    </ul>
<?endif?>