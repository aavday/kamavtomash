<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
if (!empty($arResult)):
    $i = 1;
?>
    <div class="row"> 
        <?foreach ($arResult["ITEMS"] as $arItem):?>
            <?$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem['IBLOCK_ID'], 'ELEMENT_EDIT'))?>
            <?$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem['IBLOCK_ID'], 'ELEMENT_DELETE'))?>
            <div class="col-lg-4 col-xl-4">
                <div class="jotun-examples__item" id="<?=$this->GetEditAreaId($arItem['ID'])?>">
                    <img src="<?=CFile::GetPath($arItem["PREVIEW_PICTURE"]["ID"])?>" alt="Пример использования 2"/>
                    <h6 class="jotun-examples__item__text"><?=$arItem['PREVIEW_TEXT']?></h6>
                </div>
            </div>
        <?
        $i++;
        endforeach;
        ?>
    </div>
<?endif?>