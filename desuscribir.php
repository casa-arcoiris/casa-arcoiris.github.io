<?php 
require 'php_config/config.php';
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="description" content="Casa Arcoíris es un blog con el objetivo de ayudar a jóvenes que forman parte de la comunidad LGBTQ+.">
	<meta name="keywords" content="casa, arcoíris, comunidad, lgbtq, nuestro, objetivo, inicio, casa arcoíris, nuestro objetivo, comunidad lgbtq">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Casa Arcoíris | Inicio</title>
	<link rel="stylesheet" href="css/style.css">
	<script src="https://www.casa-arcoiris.org/js/main.js"></script>
	<link rel="shortcut icon" href="https://www.casa-arcoiris.org/assets/favicon.png" type="image/x-icon">
	<link rel="apple-touch-icon" href="https://www.casa-arcoiris.org/assets/favicon.png">
</head>
<body>

	<header>
		<a class="header_link_logo" href="https://www.casa-arcoiris.org"><img src="https://www.casa-arcoiris.org/assets/casa_arcoiris_logo.png" class="header_logo" alt="Logo de Casa Arcoíris"></a>
		<svg tabindex="0" onclick="menu_f()" id="menu_icon" class="menu_icon" viewBox="0 0 100 80" width="40" height="40">
  			<rect y="0" width="100" height="20" rx="8"></rect>
  			<rect y="30" width="100" height="20" rx="8"></rect>
  			<rect y="60" width="100" height="20" rx="8"></rect>
		</svg>
		<ul id="menu" class="menu_list">
			<li><a href="https://www.casa-arcoiris.org">Inicio</a></li>
			<li><a href="https://www.casa-arcoiris.org/publicaciones.html">Publicaciones</a></li>
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
			<li><a href="https://www.casa-arcoiris.org/publicaciones.html">Publicaciones</a></li>
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

	<div class="extra_space"></div>

	<div class="div_text">
		<h1>Desuscribir</h1>
			
		<p>Por favor, ingresa el siguiente correo electrónico para confirmar que quieres desuscribirte de nuestro boletín de noticias:</p>

		<div class="centered_content" id="subscribe_news">

			<div class="form-inner">
				<form action="" class="" method="post">
					<div class="fields_container">
						<p class="confirm_email"><?php $email = $_GET['email']; echo $email ?></p>
						<div class="field vl">
							<input type="hidden" name="compare_email" value="<?php echo $email;?>" required>
						</div>
						<div class="field">
							<input type="text" name="confirm_email" placeholder="Confirmación de correo" title="Confirmación de correo" required>
						</div>
						<div id="recaptcha" data-sitekey="6LeeM6EgAAAAAB3kmI47hig8I5gOFEDjeqU5-xI9" SameSite="secure" class="g-recaptcha"></div>
						<p id="p_advertisement" class="wrong_log"></p>
						<div class="field">
							<input name="unsubscribe" type="submit" value="Desuscribir">
						</div>
					</div>
				</form>
			</div>

		</div>

	</div>

	<footer>
		<div class="footer_content">
			<p class="copyright footer_text"></p>
			<a href="https://www.casa-arcoiris.org"><img class="footer_logo" src="https://www.casa-arcoiris.org/assets/casa_arcoiris_logo.png" alt="Logo de Casa Arcoíris"></a>
		</div>
	</footer>

	<div id="close_element"></div>

	<script src="js/second.js"></script>
	<script src="https://www.casa-arcoiris.org/js/dark-mode.js"></script>
	<script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit&hl={{app.request.locale|default(defaultLang) }}" async defer></script>

	<?php include('php_config/subscribe_form.php'); ?>
</body>
</html>