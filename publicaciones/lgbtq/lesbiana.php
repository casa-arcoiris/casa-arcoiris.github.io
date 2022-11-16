<!-- <?php 
// require '../../php_config/config.php';
// ?> -->

<!DOCTYPE html>
<html lang="es">
<head>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-3B6TNMJMS1"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'G-3B6TNMJMS1');
	</script>
	
	<meta charset="UTF-8">
	<meta name="description" content="¿Alguna vez has oído que una mujer dice que es 'lesbiana'? ¿Sabes lo que significa? ¿Es una etapa? ¿Es una confusión? ¡Aquí te decimos!">
	<meta name="keywords" content="casa, arcoíris, comunidad, lgbtq, nuestro, objetivo, inicio, casa arcoíris, nuestro objetivo, comunidad lgbtq, lesbiana, mujeres lesbianas, bandera representando a la comunidad de mujeres lesbianas">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>¿Lesbiana? | Casa Arcoíris</title>
	<link rel="stylesheet" href="../../css/style.css">
	<script src="https://www.casa-arcoiris.org/js/main.js"></script>
	<link rel="shortcut icon" href="https://www.casa-arcoiris.org/assets/favicon.png" type="image/x-icon">
	<link rel="apple-touch-icon" href="https://www.casa-arcoiris.org/assets/favicon.png">
</head>
<body>
	<div class="lesbian_post-bg" id="post_background"></div>

	<header>
		<div class="header_lesbian" id="header_moving_right"></div>
		<a class="header_link_logo" href="https://www.casa-arcoiris.org"><img src="https://www.casa-arcoiris.org/assets/casa_arcoiris_logo.png" class="header_logo" alt="Logo de Casa Arcoíris"></a>
		<svg tabindex="0" onclick="menu_f()" id="menu_icon" class="menu_icon" viewBox="0 0 100 80" width="40" height="40">
  			<rect y="0" width="100" height="20" rx="8"></rect>
  			<rect y="30" width="100" height="20" rx="8"></rect>
  			<rect y="60" width="100" height="20" rx="8"></rect>
		</svg>
		<ul id="menu" class="menu_list">
			<li><a href="https://www.casa-arcoiris.org">Inicio</a></li>
			<li><a href="https://www.casa-arcoiris.org/publicaciones.php">Publicaciones</a></li>
			<button class="switch" id="switch">
				<span>

					<i class="sun">
						<svg viewBox="0 0 512 512">
							<path fill="currentColor" d="M256 160c-52.9 0-96 43.1-96 96s43.1 96 96 96 96-43.1 96-96-43.1-96-96-96zm246.4 80.5l-94.7-47.3 33.5-100.4c4.5-13.6-8.4-26.5-21.9-21.9l-100.4 33.5-47.4-94.8c-6.4-12.8-24.6-12.8-31 0l-47.3 94.7L92.7 70.8c-13.6-4.5-26.5 8.4-21.9 21.9l33.5 100.4-94.7 47.4c-12.8 6.4-12.8 24.6 0 31l94.7 47.3-33.5 100.5c-4.5 13.6 8.4 26.5 21.9 21.9l100.4-33.5 47.3 94.7c6.4 12.8 24.6 12.8 31 0l47.3-94.7 100.4 33.5c13.6 4.5 26.5-8.4 21.9-21.9l-33.5-100.4 94.7-47.3c13-6.5 13-24.7.2-31.1zm-155.9 106c-49.9 49.9-131.1 49.9-181 0-49.9-49.9-49.9-131.1 0-181 49.9-49.9 131.1-49.9 181 0 49.9 49.9 49.9 131.1 0 181z"></path>
						</svg>
					</i>

				</span>
				<span>

					<i class="moon">
						<svg viewBox="0 0 512 512">
							<path fill="currentColor" d="M283.211 512c78.962 0 151.079-35.925 198.857-94.792 7.068-8.708-.639-21.43-11.562-19.35-124.203 23.654-238.262-71.576-238.262-196.954 0-72.222 38.662-138.635 101.498-174.394 9.686-5.512 7.25-20.197-3.756-22.23A258.156 258.156 0 0 0 283.211 0c-141.309 0-256 114.511-256 256 0 141.309 114.511 256 256 256z" class=""></path>
						</svg>
					</i>

				</span>
			</button>
		</ul>
		<ul id="menu_list-no_mobile" class="menu_list-no_mobile">
			<li><a href="https://www.casa-arcoiris.org">Inicio</a></li>
			<li><a href="https://www.casa-arcoiris.org/publicaciones.php">Publicaciones</a></li>
			<button class="switch" id="switch-no_mobile">
				<span>

					<i class="sun">
						<svg viewBox="0 0 512 512">
							<path fill="currentColor" d="M256 160c-52.9 0-96 43.1-96 96s43.1 96 96 96 96-43.1 96-96-43.1-96-96-96zm246.4 80.5l-94.7-47.3 33.5-100.4c4.5-13.6-8.4-26.5-21.9-21.9l-100.4 33.5-47.4-94.8c-6.4-12.8-24.6-12.8-31 0l-47.3 94.7L92.7 70.8c-13.6-4.5-26.5 8.4-21.9 21.9l33.5 100.4-94.7 47.4c-12.8 6.4-12.8 24.6 0 31l94.7 47.3-33.5 100.5c-4.5 13.6 8.4 26.5 21.9 21.9l100.4-33.5 47.3 94.7c6.4 12.8 24.6 12.8 31 0l47.3-94.7 100.4 33.5c13.6 4.5 26.5-8.4 21.9-21.9l-33.5-100.4 94.7-47.3c13-6.5 13-24.7.2-31.1zm-155.9 106c-49.9 49.9-131.1 49.9-181 0-49.9-49.9-49.9-131.1 0-181 49.9-49.9 131.1-49.9 181 0 49.9 49.9 49.9 131.1 0 181z"></path>
						</svg>
					</i>

				</span>
				<span>

					<i class="moon">
						<svg viewBox="0 0 512 512">
							<path fill="currentColor" d="M283.211 512c78.962 0 151.079-35.925 198.857-94.792 7.068-8.708-.639-21.43-11.562-19.35-124.203 23.654-238.262-71.576-238.262-196.954 0-72.222 38.662-138.635 101.498-174.394 9.686-5.512 7.25-20.197-3.756-22.23A258.156 258.156 0 0 0 283.211 0c-141.309 0-256 114.511-256 256 0 141.309 114.511 256 256 256z" class=""></path>
						</svg>
					</i>

				</span>
			</button>
		</ul>
	</header>

	<div class="space"></div>

	<div itemscope itemtype="http://schema.org/Article" class="post-bg">
		
        <a href="https://www.casa-arcoiris.org/publicaciones.php" class="back-to-posts"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M447.1 256C447.1 273.7 433.7 288 416 288H109.3l105.4 105.4c12.5 12.5 12.5 32.75 0 45.25C208.4 444.9 200.2 448 192 448s-16.38-3.125-22.62-9.375l-160-160c-12.5-12.5-12.5-32.75 0-45.25l160-160c12.5-12.5 32.75-12.5 45.25 0s12.5 32.75 0 45.25L109.3 224H416C433.7 224 447.1 238.3 447.1 256z"/></svg> <p>Volver a las publicaciones</p></a>

		<div class="post_text">
			<h1 itemprop="name">¿Lesbiana?</h1>

			<p>¿Alguna vez has oído que una mujer dice que es "lesbiana"? ¿Sabes lo que significa? ¿Es una etapa? ¿Es una confusión? ¡Aquí te decimos!</p>

			<img itemprop="image" class="post_image" src="https://www.casa-arcoiris.org/assets/lesbian_flag.jpg" alt="Bandera representando a la comunidad de mujeres lesbianas">
			<p class="post_image-small">Bandera representando a la comunidad de mujeres lesbianas</p>

			<span itemprop="articleBody">

				<h2>¿Qué es ser lesbiana?</h2>

				<p>Una mujer lesbiana es alguien que siente atracción romántica o sexual hacia otras mujeres.</p>

				<h2><i>Las lesbianas odian a los hombres</i></h2>

				<p></p>

				<h2><i>Son lesbianas porque no han estado con un hombre</i></h2>
				<h2><i>Las mujeres guapas no pueden ser lesbianas</i></h2>
				<h2>¿Quién es el hombre en una relación lésbica?</h2>
				<h2>¿Todas las lesbianas se conocen entre sí?</h2>
				<h2>¿A todas las lesbianas les gustan todos los deportes?</h2>
				<h2>¿A todas las lesbianas les gustan los gatos?</h2>
				<h2><i>Las mujeres lesbianas son más masculinas que las mujeres heterosexuales</i></h2>

				<p>La masculinidad o feminidad no tiene que ver con la orientación sexual o con la identidad de género. El ser una persona "masculina" o "femenina" es un tipo de expresión de género.</p>

			</span>

			<div class="referencias">
				<h3>Referencias: </h3>

				<a href="" target="_blank"></a>
				<a href="" target="_blank"></a>
				<a href="" target="_blank"></a>
			</div>
			
			<h3 class="categorias_h3">Categorías</h3>
			<div class="categorias_post">
				<div class="categoria_post lgbtq">LGBTQ+</div>
				<div class="categoria_post lesbian">Lesbiana</div>
			</div>
		</div>

		
		<div class="published">
			<svg class="clock_icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm0 448c-110.5 0-200-89.5-200-200S145.5 56 256 56s200 89.5 200 200-89.5 200-200 200zm61.8-104.4l-84.9-61.7c-3.1-2.3-4.9-5.9-4.9-9.7V116c0-6.6 5.4-12 12-12h32c6.6 0 12 5.4 12 12v141.7l66.8 48.6c5.4 3.9 6.5 11.4 2.6 16.8L334.6 349c-3.9 5.3-11.4 6.5-16.8 2.6z"/></svg>
			<p>Publicado el <span itemprop="datePublished" content="2022-08-??">??/08/2022</span></p>
		</div>

	</div>

	<div class="subscribe_news" id="subscribe_news">
		<p>¿Quieres saber cuando subamos una nueva publicación? ¡Suscríbete a nuestro boletín de noticias!</p>
		<form action="" method="post">
			<div class="fields_container">
				<div class="field">
					<input type="text" name="name" placeholder="Nombre" title="Nombre" required>
				</div>
				<div class="field">
					<input type="text" name="email" placeholder="Correo" title="Correo" required>
				</div>
				<div id="recaptcha" data-sitekey="6LeeM6EgAAAAAB3kmI47hig8I5gOFEDjeqU5-xI9" SameSite="secure" class="g-recaptcha"></div>
				<p id="p_advertisement" class="wrong_log"></p>
				<div class="field">
					<input name="subscribe" type="submit" value="Suscribirse">
				</div>
			</div>
		</form>
	</div>

	<footer>
		<div class="footer_content">
			<p class="copyright footer_text"></p>
			<a href="https://www.casa-arcoiris.org"><img class="footer_logo" src="https://www.casa-arcoiris.org/assets/casa_arcoiris_logo.png" alt="Logo de Casa Arcoíris"></a>
		</div>
	</footer>

	<div id="close_element"></div>

	<script src="https://www.casa-arcoiris.org/js/second.js"></script>
	<script src="https://www.casa-arcoiris.org/js/dark-mode.js"></script>
	<script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit&hl={{app.request.locale|default(defaultLang) }}" async defer></script>

	<?php include('../../php_config/subscribe_form.php'); ?>
</body>
</html>