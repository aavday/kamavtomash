<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?if (!empty($arResult)):?>
    <ul class="modal-town__list">
        <?foreach ($arResult["ITEMS"] as $arItem):?>
            <?$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem['IBLOCK_ID'], 'ELEMENT_EDIT'))?>
            <?$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem['IBLOCK_ID'], 'ELEMENT_DELETE'))?>
            <?if ($arItem["CODE"]) $alias = $arItem["CODE"] . '.'?>

            <li id="<?=$this->GetEditAreaId($arItem['ID'])?>"><a class="modal-town__link" href="http://<?=$alias . 'kamash.ru/' ?>"><?=$arItem["NAME"]?></a></li>
        <?endforeach?>
    </ul>
<?endif?>