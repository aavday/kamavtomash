<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
if (!empty($arResult)):
    $i = 1;
?>
    <div class="row">
        <?foreach ($arResult["ITEMS"] as $arItem):?>
            <?$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem['IBLOCK_ID'], 'ELEMENT_EDIT'))?>
            <?$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem['IBLOCK_ID'], 'ELEMENT_DELETE'))?>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 mb-4 text-center">
                <a href="<?=$arItem['img_big']?>" class="text-center" data-lightbox="gallery">
                    <img src="<?=$arItem["img_small"]?>" alt="Отзыв о КамАвтоМаш <?=$i?>" class="img-fluid" id="<?=$this->GetEditAreaId($arItem['ID'])?>">
                </a>
            </div>
        <?
        $i++;
        endforeach;
        ?>
    </div>
<?endif?>