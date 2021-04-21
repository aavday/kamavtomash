<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
if (!empty($arResult)):
    $i = 1;
?>
    <div class="row"> 
        <?foreach ($arResult["ITEMS"] as $arItem):?>
            <?$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem['IBLOCK_ID'], 'ELEMENT_EDIT'))?>
            <?$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem['IBLOCK_ID'], 'ELEMENT_DELETE'))?>
            <div class="col-md-6 col-lg-4 col-xl-2">
                <div class="jotun-page__item" id="<?=$this->GetEditAreaId($arItem['ID'])?>">
                    <div class="jotun-page__item__img"><img src="<?=CFile::GetPath($arItem["PREVIEW_PICTURE"]["ID"])?>" alt="Картинка продукта <?=$i?>"/></div>
                    <h4 class="jotun-page__item__name"><?=$arItem['NAME']?></h4>
                </div>
            </div>
        <?
        $i++;
        endforeach;
        ?>
    </div>
<?endif?>