<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
if (!empty($arResult)):
    $i = 1;
?>
    <div class="row">
        <?foreach ($arResult["ITEMS"] as $arItem):?>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 mb-4 text-center">
                <a href="<?=$arItem['img_big']?>" class="text-center" data-lightbox="gallery" id="<?=$this->GetEditAreaId($arItem['ID'])?>">
                    <img src="<?=$arItem["img_small"]?>" alt="Отзыв о КамАвтоМаш <?=$i?>" class="img-fluid">
                </a>
            </div>
        <?
        $i++;
        endforeach;
        ?>
    </div>
<?endif?>