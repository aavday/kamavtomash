<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
if (!empty($arResult)):
    $i = 1;
?>
    <div class="row">
        <?foreach ($arResult["ITEMS"] as $arItem):?>
            <div class="col-6 col-xl-3"><img class="about__img" src="<?=CFile::GetPath($arItem["PREVIEW_PICTURE"]["ID"])?>" alt="картинка о компании <?=$i?>"/></div>
        <?
        $i++;
        endforeach;
        ?>
    </div>
<?endif?>