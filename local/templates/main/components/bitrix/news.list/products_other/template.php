<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?if (!empty($arResult)):?>
<div class="product__other">
	<h3 class="product__other__title">Другие составы</h3>
	<div class="owl-carousel owl-theme" id="other-slider">
	<?
	foreach ($arResult["ITEMS"] as $arItem):
		if($arItem['ID'] != $arParams['EXCLUDE_ELEMENT']):
	?>
		<?$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem['IBLOCK_ID'], 'ELEMENT_EDIT'))?>
		<?$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem['IBLOCK_ID'], 'ELEMENT_DELETE'))?>
		<div class="product__other__item" id="<?=$this->GetEditAreaId($arItem['ID'])?>">
			<div class="product__other__item__img">
				<img class="img-1" src="<?=$arItem['img_small']?>" alt="Краска <?=$arItem['NAME']?>"/>
				<div class="product__other__item__type">
					<img src="<?=CFile::GetPath($arItem['DISPLAY_PROPERTIES']['TYPE_IMG']['VALUE'])?>" alt="тип краски <?=$arItem['NAME']?>"/>
				</div>
			</div>
			<a class="product__other__item__name" href="<?=$arItem['DETAIL_PAGE_URL']?>"><?=$arItem['NAME']?></a>
			<p class="product__other__item__text"><?=$arItem['PREVIEW_TEXT']?></p>
		</div>
	<?
	endif;
	endforeach
	?>
	</div>
</div>
<?endif?>