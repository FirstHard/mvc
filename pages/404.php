<?php

	if (!defined("iINDEX")) {

		header("HTTP/1.1 403 Forbidden");
		die('Access denied');

	} else {

?>

	<div class="rc-padding--md rc-text--center rc-bg-colour--interface">
	<img src="/img/cat_404.png" alt="404" class="rc-text--center" style="margin: 0 auto; max-height: 350px; width: auto;" />
	<h1 class="rc-alpha">Ошибка 404...</h1>
	<p>Кажется, Вы потерялись... Но не беда! Попробуйте пожалуйста найти нужную Вам страницу, начав с
	<a href="/" class="rc-button--md">Главной</a>!</p>
	</div>

<?php

	}

?>