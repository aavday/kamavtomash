<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
if (!empty($arResult)):
    $i = 1;
?>
    <?foreach ($arResult["ITEMS"] as $arItem):?>
        <?$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem['IBLOCK_ID'], 'ELEMENT_EDIT'))?>
        <?$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem['IBLOCK_ID'], 'ELEMENT_DELETE'))?>
        <div class="about-advantage__item" id="<?=$this->GetEditAreaId($arItem['ID'])?>">
            <div class="about-advantage__item__img"><img src="<?=CFile::GetPath($arItem["PREVIEW_PICTURE"]["ID"])?>" alt="Иконка преимущества <?=$i?>"/></div>
            <h6 class="about-advantage__item__text"><?=$arItem['NAME']?></h6>
        </div>
    <?
    $i++;
    endforeach;
    ?>
<?endif?>