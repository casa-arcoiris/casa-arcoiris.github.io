<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Publicaciones no revisadas | Casa Arcoíris</title>
	<link rel="stylesheet" href="css/style.css">
	<script src="https://www.casa-arcoiris.org/js/main.js"></script>
	<link rel="shortcut icon" href="https://www.casa-arcoiris.org/assets/favicon.png" type="image/x-icon">
	<link rel="apple-touch-icon" href="https://www.casa-arcoiris.org/assets/favicon.png">
</head>
<body>

	<header>
		<a class="header_link_logo" href="https://www.casa-arcoiris.org"><img src="https://www.casa-arcoiris.org/assets/casa_arcoiris_logo.png" class="header_logo"></a>
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

	<div class="space"></div>

	<h1 class="div_text">Publicaciones no revisadas</h1>

	<div class="filter_posts">
		<p id="openFilterBtn" tabindex="0" onclick="openFilter()">Filtrar <svg xmlns="http://www.w3.org/2000/svg" class="filter_icon" viewBox="0 0 512 512"><path d="M3.853 54.87C10.47 40.9 24.54 32 40 32H472C487.5 32 501.5 40.9 508.1 54.87C514.8 68.84 512.7 85.37 502.1 97.33L320 320.9V448C320 460.1 313.2 471.2 302.3 476.6C291.5 482 278.5 480.9 268.8 473.6L204.8 425.6C196.7 419.6 192 410.1 192 400V320.9L9.042 97.33C-.745 85.37-2.765 68.84 3.854 54.87L3.853 54.87z"/></svg></p>

		<ul id="filter_list" class="filter_list">
			<li tabindex="0" class="filterListElements" onclick="filterContent('jovenes')">Ver sólo categoría de "Jóvenes"</li>
			<li tabindex="0" class="filterListElements" onclick="filterContent('lgbtq')">Ver sólo categoría de "LGBTQ+"</li>
			<li tabindex="0" class="filterListElements" onclick="resetFilteredContent()">Ver todas las categorías</li>
		</ul>

		<p id="clearFiltersBtn" tabindex="0" class="hide" onclick="resetFilteredContent(1)"> <svg xmlns="http://www.w3.org/2000/svg" class="clear_filters_icon" viewBox="0 0 512 512"><path d="M0 256C0 114.6 114.6 0 256 0C397.4 0 512 114.6 512 256C512 397.4 397.4 512 256 512C114.6 512 0 397.4 0 256zM175 208.1L222.1 255.1L175 303C165.7 312.4 165.7 327.6 175 336.1C184.4 346.3 199.6 346.3 208.1 336.1L255.1 289.9L303 336.1C312.4 346.3 327.6 346.3 336.1 336.1C346.3 327.6 346.3 312.4 336.1 303L289.9 255.1L336.1 208.1C346.3 199.6 346.3 184.4 336.1 175C327.6 165.7 312.4 165.7 303 175L255.1 222.1L208.1 175C199.6 165.7 184.4 165.7 175 175C165.7 184.4 165.7 199.6 175 208.1V208.1z"/></svg>Restaurar filtros</p>
	</div>

	

	<div class="centered_content post-container" id="filteredList">

		

	</div>

	<footer>
		<div class="footer_content">
			<p class="copyright footer_text"></p>
			<a href="https://www.casa-arcoiris.org"><img class="footer_logo" src="https://www.casa-arcoiris.org/assets/casa_arcoiris_logo.png" alt=""></a>
		</div>
	</footer>

	<div id="close_element"></div>

	<script src="https://www.casa-arcoiris.org/js/second.js"></script>
	<script src="https://www.casa-arcoiris.org/js/dark-mode.js"></script>
</body>
</html>