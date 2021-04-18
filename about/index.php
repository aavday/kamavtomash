<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
$APPLICATION->SetTitle('Главная');
?>

<div class="inside-page about-page">
	<div class="container">
		<div class="inside-wrapper about-wrapper">
			<div class="row">
				<div class="col-xl-6">
					<h1 class="title">О компании</h1>
					<div class="about__text">Компания <b>ООО "КамАвтоМаш"</b> – официальный дистрибьютер:
						<div class="about__logos"><img src="../images/about/about-logo-1.png" alt="Лого 1"/><img src="../images/about/about-logo-2.png" alt="Лого 2"/></div>
					</div>
					<p class="about__text">Компания <b>ООО "КамАвтоМаш"</b> основана в 2012 году. Наша компания осуществляет поставку высококачественных лакокрасочных материалов Jotun.</p>
					<p class="about__text">Мы обеспечиваем индивидуальный подход к каждому клиенту, проводя полный комплекс услуг по антикоррозийной защите и сопровождение проекта от начала и до его полного завершения.</p>
					<p class="about__text">С 2015 года <b>ООО "КамАвтоМаш"</b> начал активное развитие направления огнезащиты.</p>
				</div>
				<div class="col-xl-6">
					<div class="about-advantage">
						<h3 class="about-advantage__title">Наши преимущества</h3>
						<div class="about-advantage__item">
							<div class="about-advantage__item__img"><img src="../images/about-page/about-advantage-img-1.png" alt="Иконка преимущества 1"/></div>
							<h6 class="about-advantage__item__text">Гарантия качества продукции</h6>
						</div>
						<div class="about-advantage__item">
							<div class="about-advantage__item__img"><img src="../images/about-page/about-advantage-img-2.png" alt="Иконка преимущества 2"/></div>
							<h6 class="about-advantage__item__text">Квалифицированные специалисты помогут Вам принять решение</h6>
						</div>
						<div class="about-advantage__item">
							<div class="about-advantage__item__img"><img src="../images/about-page/about-advantage-img-3.png" alt="Иконка преимущества 3"/></div>
							<h6 class="about-advantage__item__text">Широкий выбор в наличии товара</h6>
						</div>
						<div class="about-advantage__item">
							<div class="about-advantage__item__img"><img src="../images/about-page/about-advantage-img-4.png" alt="Иконка преимущества 4"/></div>
							<h6 class="about-advantage__item__text">В максимально сжатый срок осуществляем поставку по всей России</h6>
						</div>
					</div>
				</div>
			</div>
			<div class="about-page__media">
				<div class="row">
					<div class="col-lg-5 col-xl-6">
						<div class="about-page__video"><iframe class="video" src="https://www.youtube.com/embed/tkHTB3DHZvw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
					</div>
					<div class="col-lg-7 col-xl-6">
						<div class="row">
							<div class="col-md-6 col-xl-6"><img class="about-page__img" src="../images/about-page/about-img-1.jpg" alt="Картинка о компании 1"/></div>
							<div class="col-md-6 col-xl-6"><img class="about-page__img" src="../images/about-page/about-img-2.jpg" alt="Картинка о компании 2"/></div>
							<div class="col-md-6 col-xl-6"><img class="about-page__img" src="../images/about-page/about-img-3.jpg" alt="Картинка о компании 3"/></div>
							<div class="col-md-6 col-xl-6"><img class="about-page__img" src="../images/about-page/about-img-4.jpg" alt="Картинка о компании 4"/></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<section class="contact">
	<div class="container"> 
		<div class="contact__block">
			<h3 class="contact__block__title">Контакты </h3>
			<div class="contact__block__town"><a class="contact__block__town__select" data-toggle="modal" data-target="#selectTownModal">Набережные Челны</a><br/>
				<p class="contact__block__town__text">ул. Раскольникова, 79, офис 5А</p>
			</div><a class="contact__block__phone" href="tel:88552200720">8 (8552) 20-07-20</a><br><a class="contact__block__phone" href="tel:89673790720">8 (967) 379-07-20</a><br><a class="contact__block__mail" href="mailto:kam-info@mail.ru">kam-info@mail.ru</a><br>
			<button class="contact__block__btn" data-toggle="modal" data-target="#contactModal">Оставить заявку</button>
		</div>
	</div>
	<div class="map">
		<div id="map-card"></div>
	</div>
</section>

<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');
?>