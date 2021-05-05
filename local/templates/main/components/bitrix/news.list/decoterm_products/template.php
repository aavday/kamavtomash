<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
if (!empty($arResult)):
    $i = 1;
?>
    <div class="decoterm-page__items">
        <div class="row"> 
            <?foreach ($arResult["ITEMS"] as $arItem):?>
                <?$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem['IBLOCK_ID'], 'ELEMENT_EDIT'))?>
                <?$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem['IBLOCK_ID'], 'ELEMENT_DELETE'))?>
                <div class="col-md-12 col-lg-6 col-xl-4">
                    <a class="decoterm-page__item" href="#" id="<?=$this->GetEditAreaId($arItem['ID'])?>">
                        <div class="decoterm-page__item__img">
                            <img src="<?=CFile::GetPath($arItem["PREVIEW_PICTURE"]["ID"])?>" alt="Картинка продукта <?$i?>"/>
                        </div>
                        <img class="decoterm-page__item__icon" src="<?=$arItem["img_small"]?>" alt="Иконка продукта <?=$i?>"/>
                        <div class="decoterm-page__item__content">
                            <h4 class="decoterm-page__item__name"><?=$arItem['NAME']?></h4>
                            <p>
                                <?=$arItem['PREVIEW_TEXT']?>
                            </p>
                        </div>
                    </a>
                </div>
            <?
            $i++;
            endforeach;
            ?>
        </div>
    </div>
<?endif?>