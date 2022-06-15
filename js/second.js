const imagen1 = document.getElementById('imagen1');

const menu_icon = document.getElementById('menu_icon');
const menu = document.getElementById('menu');

const close_element = document.getElementById('close_element');

const lgbtq_heart = document.getElementById('lgbtq_heart');

const HeaderRainbow = document.getElementById('header_rainbow');
const HeaderNeon = document.getElementById('header_neon');
const HeaderTrans = document.getElementById('header_trans');
const HeaderBisexual = document.getElementById('header_bisexual');
const HeaderGay = document.getElementById('header_gay');

var eachEmotion = document.querySelectorAll('.feeling_card');

const filter_list = document.getElementById('filter_list');
var filterListElements = document.querySelectorAll('.filterListElements');
var filteredList = document.querySelectorAll('.post-card_container')

var drawPost = document.querySelectorAll('.draw');

const copyright = document.querySelector('.copyright');

const cargarImagen = (entradas, observador) => {
	entradas.forEach((entrada) => {
		if(entrada.isIntersecting){
			entrada.target.classList.add('inside');
		}
	});
}

const observador = new IntersectionObserver(cargarImagen, {
	root: null,
	rootMargin: '0px 0px 0px 0px',
	threshold: 0.8
});

if (imagen1) {
	let imageCounter = 1;
	while (imageCounter <= 5) {
		var imageName = 'imagen' + imageCounter;
		var imageNameid = document.getElementById(imageName);
		if (imageNameid){
			observador.observe(imageNameid);
		}
		imageCounter++;
	}
}

function menu_f(){
	close_element.classList.toggle('active');
	menu.classList.toggle('active_menu');
	menu_icon.classList.toggle('cross');
}

menu_icon.addEventListener("keyup", function(event) {
	if (event.keyCode === 13) {
		event.preventDefault();
		menu_f();
	}
});

copyright.innerHTML = 'Casa Arcoíris - ' + new Date().getFullYear() + ' Copyright &copy;. Todos los derechos reservados';

if (lgbtq_heart){
	observador.observe(lgbtq_heart);
}


function moveHeaderRight(element) {
	element.classList.add('action');
	setTimeout(function(){
		element.classList.remove('action');
	}, 2000);
}

if (HeaderRainbow) {
	setTimeout(function(){
		moveHeaderRight(HeaderRainbow);
	}, 1000);
	setInterval(moveHeaderRight(HeaderRainbow), 300*1000);
}



function actionHeaderNeon() {
	HeaderNeon.classList.add('action');
	setTimeout(function(){
		HeaderNeon.classList.remove('action');
	}, 3000);
}

if (HeaderNeon) {
	setTimeout(function(){
		actionHeaderNeon();
	}, 1000);
	setInterval(actionHeaderNeon, 300*1000);
}

if (HeaderTrans) {
	setTimeout(function() {
		moveHeaderRight(HeaderTrans);
	}, 1000);
	setInterval(moveHeaderRight(HeaderTrans), 300*1000)
}

if (HeaderBisexual) {
	setTimeout(function() {
		moveHeaderRight(HeaderBisexual);
	}, 1000);
	setInterval(moveHeaderRight(HeaderBisexual), 300*1000)
}

if (HeaderGay) {
	setTimeout(function() {
		moveHeaderRight(HeaderGay);
	}, 1000);
	setInterval(moveHeaderRight(HeaderGay), 300*1000)
}



function meaning(id) {
	var clickedBtn = document.getElementById('meaning-' + id);
	var activeMeanings = document.querySelectorAll('.meaning.active');

	if (activeMeanings.length > 0) {
		var getActiveMeaningsId = activeMeanings[0].getAttribute("id");
		getActiveMeaningsId = document.getElementById(getActiveMeaningsId);

		if (getActiveMeaningsId != clickedBtn) {
			getActiveMeaningsId.classList.remove('active');
			getActiveMeaningsId.classList.remove('inside');
			clickedBtn.classList.toggle('active');
			setTimeout(function(){
				clickedBtn.classList.toggle('inside');
			}, 0.1);
		}

		else if (getActiveMeaningsId == clickedBtn) {
			clickedBtn.classList.toggle('active');
			setTimeout(function(){
				clickedBtn.classList.toggle('inside');
			}, 0.1);
		}
	}

	else if (activeMeanings.length === 0) {
		clickedBtn.classList.toggle('active');
		setTimeout(function(){
			clickedBtn.classList.toggle('inside');
		}, 0.1);
	}
}

if (eachEmotion) {
	eachEmotion.forEach(function(emotion, index) {
		emotion.addEventListener("keyup", function(event) {
			if (event.keyCode === 13) {
				event.preventDefault();
				emotion.click();
			}
		});
	});
}



function openFilter() {
	close_element.classList.toggle('active');
	if (filter_list.classList.contains('active')) {
		filter_list.classList.toggle('inside');
		setTimeout(function(){
			filter_list.classList.toggle('active');
		}, 500);
	}
	else {
		filter_list.classList.toggle('active');
		setTimeout(function(){
			filter_list.classList.toggle('inside');
		}, 0.1);
	}
}

function filterContent(activeClass) {
	resetFilteredContent();
	var filterListLength = filteredList.length;
	let i = 0;
	while (i <= filterListLength - 1) {
		var child = filteredList[i].children[0];
		if (!child.classList.contains(activeClass)) {
			filteredList[i].classList.add('hidefilteredelement');
		}
		i++;
	}
}

function resetFilteredContent() {
	openFilter();
	var filterListLength = filteredList.length;
	let i = 0;
	while (i <= filterListLength - 1) {
		var child = filteredList[i].children[0];
		if (filteredList[i].classList.contains('hidefilteredelement')) {
			filteredList[i].classList.remove('hidefilteredelement');
		}
		i++;
	}
}

if (filter_list) {
	document.getElementById('openFilterBtn').addEventListener("keyup", function(event) {
		if (event.keyCode === 13) {
			event.preventDefault();
			document.getElementById('openFilterBtn').click();
		}
	});

	filterListElements.forEach(function(element, index) {
		element.addEventListener("keyup", function(event) {
			if (event.keyCode === 13) {
				event.preventDefault();
				element.click();
			}
		});
	});
}

if (close_element) {
	close_element.addEventListener('click', () => {
		if (close_element.classList.contains('active')) {
			if (filter_list && filter_list.classList.contains('active')) {
				openFilter();
			}
			if (menu && menu.classList.contains('active_menu')) {
				menu_f();
			}
		}
	});
}

if (drawPost) {
	drawPost.forEach(function(image, index) {
		observador.observe(image);
	});
}