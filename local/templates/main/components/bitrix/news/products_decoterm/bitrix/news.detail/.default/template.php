<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?if (!empty($arResult)):?>
<?$APPLICATION->SetTitle($arResult['NAME']);?>
<div class="row">
	<div class="col-xl-5">
		<div class="product__img">
			<div class="product__img__type">
				<img src="<?=CFile::GetPath($arResult['DISPLAY_PROPERTIES']['TYPE_IMG']['VALUE'])?>" alt="Тип краски"/>
			</div>
			<img class="img-1" src="<?=CFile::GetPath($arResult['DETAIL_PICTURE']['ID'])?>" alt="Картинка краски"/>
		</div>
		<?
		if ($arResult['instruction'] || $arResult['video'] || $arResult['certificates']):
		?>
		<div class="product__links">
			<?if ($arResult['instruction']):?>
			<a class="product__link link-1" href="<?=$arResult['instruction']?>">
				<div class="product__link__img"></div>
				<h5 class="product__link__text"><span>Технологическая инструкция</span></h5>
			</a>
			<?endif?>
			<?
			if ($arResult['video']):
			?>
			<a class="product__link link-2" data-toggle="modal" data-target="#videoModal">
				<div class="product__link__img"></div>
				<h5 class="product__link__text"><span>Смотреть<br> видео</span></h5>
			</a>
			<?endif?>
			<?if ($arResult['certificates']):?>
			<a class="product__link link-3" href="<?=$arResult['certificates']?>">
				<div class="product__link__img"></div>
				<h5 class="product__link__text"><span>Сертификаты на продукцию</span></h5>
			</a>
			<?endif?>
		</div>
		<?endif?>
		<button class="product__consult-btn" data-toggle="modal" data-target="#consultModal">Получить консультацию</button>
	</div>
	<div class="offset-xl-1 col-xl-6">
		<h1 class="title"><?=$arResult['NAME']?></h1>
		<h5 class="product__desc"><?=$arResult['DETAIL_TEXT']?></h5>
		<h3 class="product__char-title">Технические характеристики</h3>
		<ul class="product__char-list">
			<?
			for($i=1; $i<=20; $i++):
				if($arResult['DISPLAY_PROPERTIES']['PROPERTY_'.$i]['VALUE']):
			?>
				<li class="product__char-list__item">
					<div class="product__char-list__left"><?=$arResult['DISPLAY_PROPERTIES']['PROPERTY_' . $i]['NAME']?></div>
					<div class="product__char-list__right"><?=$arResult['DISPLAY_PROPERTIES']['PROPERTY_' . $i]['VALUE']?></div>
				</li>
				<?endif?>
			<?endfor?>
		</ul>
	</div>
</div>
<div class="product__advantage">
	<?if($arResult['DISPLAY_PROPERTIES']['ADVANTAGES']['VALUE']):?>
	<h3 class="product__advantage__title">Преимущества «<?=$arResult['NAME']?>»</h3>
	<ul class="product__advantage__list">
		<?foreach($arResult['DISPLAY_PROPERTIES']['ADVANTAGES']['VALUE'] as $advantage):?>
		<li><?=$advantage?></li>
		<?endforeach?>
	</ul>
	<?endif?>
</div>
<?endif?>