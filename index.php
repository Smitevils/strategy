<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<title>Document</title>
	<!--  Отключить выделение номера телефона в браузере на iPhone -->
	<meta name="format-detection" content="telephone=no">
	<!-- Styles -->
	<link rel="stylesheet" href="assets/styles/main.css">
	<link rel="stylesheet" href="assets/modules/fullPage/jquery.fullPage.css">
	<link rel="stylesheet" href="assets/modules/fancybox/jquery.fancybox.css">
	<!-- favicon -->
	<link rel="apple-touch-icon" sizes="57x57" href="assets/img/favicon/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="assets/img/favicon/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="assets/img/favicon/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/favicon/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="assets/img/favicon/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="assets/img/favicon/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="/assets/img/favicon/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="assets/img/favicon/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicon/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="assets/img/favicon/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicon/favicon-16x16.png">
	<link rel="manifest" href="/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">
	<!-- /favicon -->
</head>
<body>
	<!-- navigation -->
	<nav>
		<ul id="myMenu">
			<li id="to-section-1" data-menuanchor="Page-1" class="anchor-1">
				<a href="#Page-1"><span data-content="01">главная</span></a>
			</li>
			<li id="to-section-2" data-menuanchor="Page-2" class="anchor-2">
				<a href="#Page-2"><span data-content="02">преимущества</span></a>
			</li>
			<li id="to-section-3" data-menuanchor="Page-3" class="anchor-3">
				<a href="#Page-3"><span data-content="03">стратегии</span></a>
			</li>
			<li id="to-section-5" data-menuanchor="Page-4" class="anchor-5">
				<a href="#Page-5"><span data-content="04">о компании</span></a>
			</li>
		</ul>
		<!-- Блок ссылок на документы -->
		<ul class="documents-links">
			<li>
				<a href="rules.php" target="_blank">Правила и Условия</a>
			</li>
			<li>
				<a href="risks.php" target="_blank">Уведомление о рисках</a>
			</li>
		</ul>
		<!-- /Блок ссылок на документы -->
	</nav>
	<!-- /navigation -->
	<div id="fullpage">
		<div class="section section-bg-1">
			<div class="table-block">
				<div class="table-cell-block">
					<!-- Активная страница -->
					<div class="section-list">
						<div class="section-item active" data-content="01"></div>
						<div class="section-item" data-content="02"></div>
						<div class="section-item" data-content="03"></div>
						<div class="section-item" data-content="04"></div>
					</div>
					<!-- /Активная страница -->
					<div class="slide slide-bg-1">
						<!-- Блок слайдер -->
						<div class="first-slide-content">
							<h1 class="slide-content-h1">
								партнерство с NinjaBrokerage
								<div class="slide-button-left">
									<div class="slide-button-left-arrow"></div>
								</div>
								<div class="slide-button-right">
									<div class="slide-button-right-arrow"></div>
								</div>
							</h1>
							<h4 class="slide-content-h4">
								С 2010 по 2013 год мы прошли длительный путь с большим количеством взлетов, падений, скрытых подводных камней в инвестиционной деятельности.
							</h4>
							<div class="slide-button">
								узнать больше
							</div>
						</div>
						<!-- /Блок слайдер -->
					</div>
					<div class="slide slide-bg-2">
						<div class="table-block">
							<div class="table-cell-block">
								<!-- Блок слайдер -->
									<div class="second-slide-content">
										<h1 class="slide-content-h1-2">
											Закажите бесплатный<br>
											<span>тестовый период на 7 дней</span>
											<div class="slide-button-left">
												<div class="slide-button-left-arrow"></div>
											</div>
											<div class="slide-button-right">
												<div class="slide-button-right-arrow"></div>
											</div>
										</h1>
										<form action="mail.php" method="post">
											<input type="text" name="name" placeholder="Ваше имя" required>
											<input type="email" name="email" placeholder="Эл. почта" required>
											<div class="second-slide-button">
												<input type="submit" value="Заказать стратегию">
											</div>
											<p>Конфиденциальность Ваших данных гарантируется</p>
										</form>
									</div>
								<!-- /Блок слайдер -->
							</div>
						</div>
					</div>
					<div class="slide slide-bg-3">
						<div class="table-block">
							<div class="table-cell-block">
								<!-- Блок слайдер -->
								<div class="third-slide-content">
									<h1 class="slide-content-h1-3">
										гибкая настройка<br>
										<span>
											параметров стратегии позволяет вам зарабатывать больше
										</span>
										<div class="slide-button-left">
											<div class="slide-button-left-arrow"></div>
										</div>
										<div class="slide-button-right">
											<div class="slide-button-right-arrow"></div>
										</div>
									</h1>
								</div>
								<!-- /Блок слайдер -->
							</div>
						</div>
					</div>
					<div class="slide slide-bg-4">
						<div class="table-block">
							<div class="table-cell-block">
								<!-- Блок слайдер -->
								<div class="fourth-slide-content clearfix">
									<h1 class="slide-content-h1-4">
										доходность стратегии
										<div class="slide-button-left">
											<div class="slide-button-left-arrow"></div>
										</div>
										<div class="slide-button-right">
											<div class="slide-button-right-arrow"></div>
										</div>
									</h1>
									<div class="fourth-slide-content-left-block">
										<img src="assets/img/graph.png" alt="graph">
									</div>
									<div class="fourth-slide-content-right-block">
										<p>
											С 2010 по 2013 год мы прошли длительный путь с большим количеством взлетов, падений, скрытых подводных камней в инвестиционной деятельности.
										</p>
										<div class="fourth-slide-button">узнать больше</div>
									</div>
								</div>
								<!-- /Блок слайдер -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="section section-bg-2" id="<inner-content-div></inner-content-div>">
			<div class="table-block">
				<div class="table-cell-block">
					<div class="rocks">
						<div class="more-button"></div>
					</div>
					<!-- Активная страница -->
					<div class="section-list">
						<div class="section-item" data-content="01"></div>
						<div class="section-item active" data-content="02"></div>
						<div class="section-item" data-content="03"></div>
						<div class="section-item" data-content="04"></div>
					</div>
					<!-- /Активная страница -->
					<!-- benefits -->
						<div class="benefits-content">
							<h1 class="benefits-title">
								преимущества
							</h1>
							<p class="benefits-under-title">
								на фондовом, валютном и рынке фьючерсов
							</p>
							<div class="benefits-container">
								<div class="benefit-block">
									<p>Получение пассивного дохода</p>
								</div>
								<div class="benefit-block">
									<p>Контроль рисков и адаптация под меняющийся рынок</p>
								</div>
								<div class="benefit-block">
									<p>Защита от мошенничества со стороны брокера или 3-х лиц</p>
								</div>
								<div class="benefit-block">
									<p>Счет открывается у всемирно известного брокера</p>
								</div>
								<div class="benefit-block">
									<p>Торговый терминал, проверенный временем и тысячами трейдеров по всему миру</p>
								</div>
								<div class="benefit-block">
									<p>Торговый терминал, проверенный временем и тысячами трейдеров по всему миру</p>
								</div>
							</div>
						</div>
					<!-- /benefits -->
				</div>
			</div>
		</div>
		<div class="section section-bg-3-1">
			<div class="table-block">
				<div class="table-cell-block">
					<!-- Активная страница -->
					<div class="section-list">
						<div class="section-item" data-content="01"></div>
						<div class="section-item" data-content="02"></div>
						<div class="section-item active" data-content="03"></div>
						<div class="section-item" data-content="04"></div>
					</div>
					<!-- /Активная страница -->
					<div class="trading-strategies">
						<h1 class="trading-strategies-title">
							Торговые стратегии
						</h1>
						<p class="trading-strategies-under-title">на фондовом, валютном и рынке фьючерсов</p>
						<div class="trading-strategies-table">
							<div class="column column-1 column-white">
								<div class="column-title">
									опции к стратегии
								</div>
								<div class="cell-block">опция 1</div>
								<div class="cell-block">опция 2</div>
								<div class="cell-block">опция 3</div>
								<div class="cell-block">опция 4</div>
								<div class="cell-block">опция 5</div>
								<div class="cell-price"></div>
							</div>
							<div class="column column-2 column-purple">
								<div class="column-title-big">
									тарифный план 1
								</div>
								<div class="cell-block cell-bg-check"> </div>
								<div class="cell-block cell-bg-check"> </div>
								<div class="cell-block cell-bg-chrest"> </div>
								<div class="cell-block cell-bg-chrest"> </div>
								<div class="cell-block cell-bg-check"> </div>
								<div class="cell-price">
									10 000 <span>&#8381;</span>
								</div>
							</div>
							<div class="column column-3 column-blue">
								<div class="column-title-big">
									тарифный план 2
								</div>
								<div class="cell-block cell-bg-check"></div>
								<div class="cell-block cell-bg-check"></div>
								<div class="cell-block cell-bg-check"></div>
								<div class="cell-block cell-bg-chrest"></div>
								<div class="cell-block cell-bg-check"></div>
								<div class="cell-price">
									10 000 <span>&#8381;</span>
								</div>
							</div>
							<div class="column column-4 column-orange scale-animation">
								<div class="column-title-big">
									тарифный план 3
								</div>
								<div class="cell-block cell-bg-check"></div>
								<div class="cell-block cell-bg-check"></div>
								<div class="cell-block cell-bg-check"></div>
								<div class="cell-block cell-bg-check"></div>
								<div class="cell-block cell-bg-check"></div>
								<div class="cell-price">
									10 000 <span>&#8381;</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="section section-bg-3-2">
			<div class="table-block">
				<div class="table-cell-block">
					<div class="rocks">
						<div class="more-button"></div>
					</div>
					<div class="about-strategy">
						<h1 class="about-strategy-title">
							СТРАТЕГИЯ 01
						</h1>
						<p class="about-strategy-under-title">
							на фондовом, валютном и рынке фьючерсов
						</p>
						<div class="about-strategy-wrap clearfix">
							<div class="about-strategy-left-block">
								<img src="assets/img/graph-2.png" alt="график стратегии">
							</div>
							<div class="about-strategy-right-block">
								<p>
									<span>
									С 2010 по 2013 год мы прошли длительный путь с большим количеством взлетов, падений, скрытых подводных камней в инвестиционной деятельности. 
									</span>
								</p>
								<p>
									Благодаря настойчивости, желанию, ясной конечной цели — доход от инвестирования не менее 10% в месяц, у нас получилось стать теми, кем мы стремились стать. Достигнув эту цель в душе появился вопрос: «Что дальше?». С середины 2013 по январь 2014 – ответа не было, мы просто продолжали делать то, что любим. 
								</p>
								<p>
									Достигнув эту цель в душе появился вопрос: «Что дальше?». С середины 2013 по январь 2014 – ответа не было, мы просто продолжали делать то, 
								</p>
							</div>
						</div>
						<ul class="about-strategy-yaar-buttons clearix">
							<li>
								<a href="#">доходность за 2011 г.</a>
							</li>
							<li>
								<a href="#">доходность за 2012 г.</a>
							</li>
							<li>
								<a href="#">доходность за 2013 г.</a>
							</li>
							<li>
								<a href="#">доходность за 2014 г.</a>
							</li>
						</ul>
						<div class="about-strategy-button">
							заказать консультацию
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="section section-bg-4">
			<div class="table-block">
				<div class="table-cell-block">
					<!-- Активная страница -->
					<div class="section-list">
						<div class="section-item" data-content="01"></div>
						<div class="section-item" data-content="02"></div>
						<div class="section-item" data-content="03"></div>
						<div class="section-item active" data-content="04"></div>
					</div>
					<!-- /Активная страница -->
					<div class="about-us">
						<h1 class="about-us-title">О компании </h1>
						<p class="about-us-under-title">
							на фондовом, валютном и рынке фьючерсов
						</p>
						<div class="about-us-text">
							<p>
								<span>
								С 2010 по 2013 год мы прошли длительный путь с большим количеством взлетов, падений, скрытых подводных камней в инвестиционной деятельности. 
								</span>
							</p>
							<p>
								Благодаря настойчивости, желанию, ясной конечной цели — доход от инвестирования не менее 10% в месяц, у нас получилось стать теми, кем мы стремились стать. Достигнув эту цель в душе появился вопрос: «Что дальше?». С середины 2013 по январь 2014 – ответа не было, мы просто продолжали делать то, что любим. 
							</p>
							<p>
								Достигнув эту цель в душе появился вопрос: «Что дальше?». С середины 2013 по январь 2014 – ответа не было, мы просто продолжали делать то, что любим. 
							</p>
						</div>
						<form action="mail.php" method="post">
							<h1 class="about-us-form-title">сомневаетесь?</h1>
							<p class="about-us-under-form-title">
								Закажите бесплатный тестовый период на 7 дней
							</p>
							<input type="text" name="name" placeholder="Ваше имя" required>
							<input type="text" name="phone" placeholder="Номер телефона" required>
							<input type="email" name="email" placeholder="Эл. почта" required>
							<input type="submit" value="Заказать стратегию">
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Modal Window -->
		<div class="modal" id="modal-1">
			<form action="mail.php" method="post">
				<ul>
					<li>
						<span>
							заказать консультацию
						</span>
					</li>
					<li>
						<input type="text" name="name" placeholder="Ваше имя" required>
					</li>
					<li>
						<input type="email" name="email" placeholder="Эл. почта" required>
					</li>
					<li>
						<input type="text" name="phone" placeholder="Номер телефона" required>
					</li>
					<li>
						<input type="submit" value="Отправить">
					</li>
				</ul>
			</form>
		</div>
		<div class="modal" id="modal-2">
			<form action="mail.php" method="post">
				<ul>
					<li>
						<span>
							Заполните форму и мы свяжемся с вами<br>в ближайшее время
						</span>
					</li>
					<li>
						<input type="text" name="name" placeholder="Ваше имя" required>
					</li>
					<li>
						<input type="email" name="email" placeholder="Эл. почта" required>
					</li>
					<li>
						<input type="submit" value="Отправить">
					</li>
				</ul>
			</form>
		</div>
		<div id="modal-sucsess">
			<div class="table-block">
				<div class="table-cell-block">
					<p>123</p>
				</div>
			</div>
		</div>
	<!-- /Modal Window -->
	<!-- Scripts -->
	<script src="assets/scripts/js/jquery-1.9.js"></script>
	<script src="assets/modules/fullPage/jquery.fullPage.min.js"></script>
	<script src="assets/modules/fancybox/jquery.fancybox.js"></script>
	<script src="assets/scripts/js/main.js"></script>
	<script src="assets/scripts/js/jquery.mask.min.js"></script>
	<!-- /Scripts -->

</body>
</html>