<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
if (!empty($arResult)):
    $i = 1;
?>
    <div class="row"> 
        <?foreach ($arResult["ITEMS"] as $arItem):?>
            <div class="col-lg-4 col-xl-4">
                <div class="jotun-examples__item"><img src="<?=CFile::GetPath($arItem["PREVIEW_PICTURE"]["ID"])?>" alt="Пример использования 2"/>
                    <h6 class="jotun-examples__item__text"><?=$arItem['PREVIEW_TEXT']?></h6>
                </div>
            </div>
        <?
        $i++;
        endforeach;
        ?>
    </div>
<?endif?>