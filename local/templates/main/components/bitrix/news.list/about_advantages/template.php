<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
if (!empty($arResult)):
    $i = 1;
?>
    <?foreach ($arResult["ITEMS"] as $arItem):?>
        <div class="about-advantage__item">
            <div class="about-advantage__item__img"><img src="<?=CFile::GetPath($arItem["PREVIEW_PICTURE"]["ID"])?>" alt="Иконка преимущества <?=$i?>"/></div>
            <h6 class="about-advantage__item__text"><?=$arItem['NAME']?></h6>
        </div>
    <?
    $i++;
    endforeach;
    ?>
<?endif?>