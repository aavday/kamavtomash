<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?if (!empty($arResult)):?>
    <div class="owl-carousel owl-theme" id="project-slider">
    <?foreach ($arResult["ITEMS"] as $arItem):?>
        <?$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem['IBLOCK_ID'], 'ELEMENT_EDIT'))?>
        <?$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem['IBLOCK_ID'], 'ELEMENT_DELETE'))?>
        <div class="project__item" id="<?=$this->GetEditAreaId($arItem['ID'])?>">
            <div class="project__item__img"><img src="<?=CFile::GetPath($arItem["PREVIEW_PICTURE"]["ID"])?>" alt=""/></div>
            <div class="project__item__content"><img class="project__item__logo" src="<?=CFile::GetPath($arItem["DISPLAY_PROPERTIES"]["LOGO"]["VALUE"])?>" alt=""/>
                <h4 class="project__item__name"><?=$arItem["NAME"]?></h4>
                <ul class="project__item__list">
                    <li><span class="project__item__list__preword">город</span>
                    <p><?=$arItem["DISPLAY_PROPERTIES"]["CITY"]["VALUE"]?></p>
                    </li>
                    <li> <span class="project__item__list__preword">год</span>
                    <p><?=$arItem["DISPLAY_PROPERTIES"]["YEAR"]["VALUE"]?></p>
                    </li>
                    <li> <span class="project__item__list__preword">материал</span>
                    <p><?=$arItem["DISPLAY_PROPERTIES"]["MATERIAL"]["VALUE"]?></p>
                    </li>
                </ul>
            </div>
        </div>

    <?endforeach?>
    </div>
<?endif?>