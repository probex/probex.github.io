<section id="footer">
					<div class="container">
						<header>
							<h2>Есть вопросы? <strong>Обращайтесь:</strong></h2>
						</header>
						<div class="row">
							<div class="col-6 col-12-medium">
								<section>
									<form method="post" class="message" id="form" action="send.php">
										<div class="row gtr-50">
											<div class="col-6 col-12-small">
												<input name="name" placeholder="Имя" type="text" />
											</div>
											<div class="col-6 col-12-small">
												<input name="email" required placeholder="Email" type="text" />
											</div>											
											<div class="col-12">
											<textarea name="text" placeholder="Напишите сообщение (не вставляйте сюда скопированный текст, отправка скопированного текста игнорируется)" onkeyup="javascript:countme();"></textarea>
											</div>											
											<div class="col-12">
												<input type="submit" name="submit" value="Отправить">
												<!-- <a href="#" class="form-button-submit button icon fa-envelope">Отправить</a> -->
											</div>
										</div>
									</form>
								</section>
							</div>
							<div class="col-6 col-12-medium">
								<section>
									<p>Наши дружелюбные и профессиональные сотрудники ответят на любые вопросы о нашей компании и услугах.</p>
									<div class="row">
										<div class="col-6 col-12-small">
											<ul class="icons">
												<li class="icon fa-home">
													ул. 1905 года, 10 стр. 1<br />
													г. Москва<br />
													Россия
												</li>
												<li class="icon fa-phone">
													+7 (495) 204-2301
												</li>
												<li class="icon fa-envelope">
													<a href="#">office@probex.ru</a>
												</li>
											</ul>
										</div>
										<div class="col-6 col-12-small">
											<ul class="icons">
												<li class="icon fa-twitter">
													<a href="https://twitter.com/probex_company_">@probex_company_</a>
												</li>
												<li class="icon fa-instagram">
													<a href="https://www.instagram.com/probex_company/">instagram.com/probex_company</a>
												</li>
												<!-- <li class="icon fa-dribbble">
													<a href="#">dribbble.com/untitled</a>
												</li> -->
												<li class="icon fa-facebook">
													<a href="#">facebook.com/untitled</a>
												</li>
											</ul>
										</div>
									</div>
								</section>
							</div>
						</div>
					</div>
					<div id="copyright" class="container">
						<ul class="links">
						<li>  Copyright &copy; Анатолий Гура 2018<script>new Date().getFullYear()>2018&&document.write("-"+new Date().getFullYear());</script>.</li>
						</ul>
					</div>
				</section>

				<script type="text/javascript">
var ct = 0;
var addCount = document.createElement('input');
    addCount.type = "hidden";
    addCount.id = "count";
    addCount.name = "count";
    addCount.value = "0";
    document.getElementById('form').appendChild(addCount);
function countme() {
    document.getElementById('count').value = ++ct;
                   }
  		        </script>		
