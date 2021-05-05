<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
if (!empty($arResult)):
    $i = 1;
    $colClass = 'col-xl-3';
?>
    <div class="decoterm-advantages">
        <h4 class="jotun-examples__title decoterm-advantages__title">Преимущества</h4>
        <div class="row">
        <?
            foreach ($arResult["ITEMS"] as $arItem):
                $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem['IBLOCK_ID'], 'ELEMENT_EDIT'));
                $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem['IBLOCK_ID'], 'ELEMENT_DELETE'));

                if ($i > 4) $colClass = 'col-xl-4';
        ?>
            <div class="col-lg-4 <?=$colClass?>">
                <div class="decoterm-advantages__item" id="<?=$this->GetEditAreaId($arItem['ID'])?>">
                    <div class="decoterm-advantages__item__img"><img src="<?=CFile::GetPath($arItem["PREVIEW_PICTURE"]["ID"])?>" alt="Декотерм преимущества <?=$i?>"/></div>
                    <h6><?=$arItem['NAME']?></h6>
                </div>
            </div>
        <?
        $i++;
        endforeach;
        ?>
        </div>
    </div>
<?endif?>