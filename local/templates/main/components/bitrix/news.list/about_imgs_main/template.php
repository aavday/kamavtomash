<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
if (!empty($arResult)):
    $i = 1;
?>
    <div class="row">
        <?foreach ($arResult["ITEMS"] as $arItem):?>
            <?$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem['IBLOCK_ID'], 'ELEMENT_EDIT'))?>
            <?$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem['IBLOCK_ID'], 'ELEMENT_DELETE'))?>
            <div class="col-6 col-xl-3">
                <img class="about__img" src="<?=CFile::GetPath($arItem["PREVIEW_PICTURE"]["ID"])?>" alt="картинка о компании <?=$i?>" id="<?=$this->GetEditAreaId($arItem['ID'])?>"/>
            </div>
        <?
        $i++;
        endforeach;
        ?>
    </div>
<?endif?>