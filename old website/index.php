<?php include("./simplestats/simplestats.inc");?>

<!DOCTYPE html>
<html>
<title>Gabriel Almeida</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="w3.css">
<link rel="stylesheet" href="css.css">
<link rel="stylesheet" href="dropdown.css">
<link rel="stylesheet" href="slideshow.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="jquery-eu-cookie-law-popup.css"/>
<link rel="icon" href="resources/resume.png">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}

body, html {
  height: 100%;
  line-height: 1.8;
  scroll-behavior: smooth;
  height: 100%;
  width: 100%;
}

.w3-bar .w3-button {
  padding: 16px;
}

#butaocv {
	background-color: black;
	color: white;
	text-align: center;
	padding: 12px 38px;
	border: none;
}

</style>
<body class="eupopup eupopup-bottom">

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-card" id="myNavbar">
    <a href="#about" class="w3-bar-item w3-button w3-wide">GABRIEL ALMEIDA</a>
    <!-- Right-sided navbar links -->
    <div class="w3-right w3-hide-small">
      <a href="#about" class="w3-bar-item w3-button">SOBRE MIM</a>
      <a href="#team" class="w3-bar-item w3-button"><i class="fa fa-user"></i> SKILLS</a>
      <a href="#work" class="w3-bar-item w3-button"><i class="fa fa-th"></i> PORTFOLIO</a>
      <a href="#contact" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i> CONTACTOS</a>
      <a href="./index_eng.html" class="w3-bar-item w3-button"><i class="fa fa-globe"></i> <u>PT</u>/ENG</a>
    </div>
    <!-- Hide right-floated links on small screens and replace them with a menu icon -->

    <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
      <i class="fa fa-bars"></i>
    </a>
  </div>
</div>

<!-- Sidebar on small screens when clicking the menu icon -->
<nav class="w3-sidebar w3-bar-block w3-black w3-card w3-animate-right w3-hide-medium w3-hide-large" style="display:none; right:0" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-large w3-padding-16">Close x</a>
  <a href="#about" onclick="w3_close()" class="w3-bar-item w3-button">SOBRE MIM</a>
  <a href="#team" onclick="w3_close()" class="w3-bar-item w3-button">SKILLS</a>
  <a href="#work" onclick="w3_close()" class="w3-bar-item w3-button">PORTFOLIO</a>
  <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button">CONTACTOS</a>
  <a href="./index_eng.html" onclick="w3_close()" class="w3-bar-item w3-button"></i> <u>PT</u>/ENG</a>
</nav>

<!-- Header with full-height image -->
<!-- <div class="slideshow-container w3-grayscale-min" id="home">
    <div class="slides fade">
        <div class="slidenumbertext" style="padding-top: 64px">1 / 2</div>
        <div class="slideimages image1"></div>
        <div class="w3-display-left w3-text-white" style="padding: 48px">
            <span class="w3-xxlarge" style="padding-top:56px">Bem-vindos ao meu website</span><br>
            <p><a href="#about" class="w3-button w3-white w3-padding-large w3-large w3-margin-top w3-opacity w3-hover-opacity-off">Sobre mim</a></p>
        </div>
        <div class="w3-display-bottomleft w3-text-grey w3-large" style="padding:24px 48px">
          <a href="https://www.facebook.com/gabriel.almeida.18062533" target="_blank"><i class="fa fa-facebook-official w3-hover-opacity"></i></a>
          <a href="https://www.instagram.com/galmeida9/" target="_blank"><i class="fa fa-instagram w3-hover-opacity"></i></a>
          <a href="https://twitter.com/GBAlmeida9" target="_blank"><i class="fa fa-twitter w3-hover-opacity"></i></a>
          <a href="https://www.linkedin.com/in/gabriel-a-b3772a131/" target="_blank"><i class="fa fa-linkedin w3-hover-opacity"></i></a>
        </div>
    </div>
    <div class="slides fade">
        <div class="slidenumbertext" style="padding-top: 64px">2 / 2</div>
        <div class="slideimages image2"></div>
        <div class="w3-display-bottomleft w3-text-grey w3-large" style="padding:24px 48px">
          <a href="https://www.facebook.com/gabriel.almeida.18062533" target="_blank"><i class="fa fa-facebook-official w3-hover-opacity"></i></a>
          <a href="https://www.instagram.com/galmeida9/" target="_blank"><i class="fa fa-instagram w3-hover-opacity"></i></a>
          <a href="https://twitter.com/GBAlmeida9" target="_blank"><i class="fa fa-twitter w3-hover-opacity"></i></a>
          <a href="https://www.linkedin.com/in/gabriel-a-b3772a131/" target="_blank"><i class="fa fa-linkedin w3-hover-opacity"></i></a>
        </div>
    </div>
    <a class="prev" onclick="minusSlides()">&#10094</a>
    <a class="next" onclick="plusSlides()">&#10095</a>
</div> -->

<!-- Sobre mim -->
<div class="w3-container" style="padding:128px 16px" id="about">  
  <div class="w3-center">
    <img src="resources/profile.png" style="width: 400px; padding-bottom: 20px;">
    <h3 class="w3-center">SOBRE MIM</h3>
    <p class="w3-center w3-large">Sou estudante de Engenharia Informática e de Computadores no Instituto Superior Técnico. </p>
    <h3 class="w3-center" style="padding-top: 25px">Biografia</h3>
    <p class="w3-center w3-large">Nasci em 1999 e fiz a minha escolaridade obrigatória toda em Coimbra, no Colégio da Imaculada Conceição, acabando com média de 18.</p>
    <p class="w3-center w3-large">Desde pequeno que gostava de informática e com o tempo essa paixão foi ficando cada vez maior, tendo influência também da parte do meu pai. 
    Então, decidi-me aventurar e ir estudar em Lisboa, devido ao prestígio do IST, indo já no terceiro ano da Licenciatura com média atual de 17. Sempre me fascinei e tive interesse em Inteligência Artificial, sendo por isso que estou a ponderar
  a tirar mestrado nessa área (um dos fatores que ajudaram à decisão foi o facto de ter 20 nessa mesma cadeira). Para desenvolver as minhas capacidades, tenho feito alguns projetos nos tempos livres, alguns dos quais disponíveis neste site. Atualmente gostaria imenso de participar
num estágio de verão para adquirir mais experiência e conhecer vários ambientes de trabalho.</p>
  </div>
</div>

<!-- hobbies -->
<div class="w3-container w3-light-grey" style="padding:64px 16px">
  <h3 class="w3-center">HOBBIES</h3>
  <p class="w3-center w3-large">Atualmente estou a aprender Japonês por conta própria, queria aprender uma nova língua mas queria algo que fosse ao mesmo tempo desafiante e interessante, e como gosto da cultura japonesa, lancei este desafio a mim próprio.</p>
  <p class="w3-center w3-large">はじめまして！お元気ですか。
    <br>私の名前はガブリエルで、十九さいで、ポルトガル人です。コインブラとリスボンにすんでいます。弟と妹が一人います。私の大学はISTで、大学三年生です。
    <br>よろしくおねがいします!</p>
</div>

<!-- skills-->
<div class="w3-container" style="padding:128px 16px" id="team">
<div class="w3-row-padding">
    <div class="w3-col m6">
      <h3>Skills</h3>
      <p>Ao longo do curso fui aprendendo e desenvolvendo algumas linguagens de programação.</p>
      <p>Gosto e sei melhor C, Java e Python, sendo que na minha opinião são linguagens chave, que premitem
        tornar a aprendizagem de outras linguagens mais fácil.
      </p>
      <p>De momento estou a desenvolver uma aplicação para uso pessoal para ver conteúdo como filmes, séries, entre outros, como uma netflix.
      </p>
      <p>Em Java tenho em baixo um pequeno projeto pessoal, o jogo 2048, com interface gráfica, feito por mim de raíz; Assim como um simples jogo do Snake em C# que fiz para aprender a linguagem. Também tenho disponível alguns projetos que realizei ao longo do curso.</p>
      <button id="butaocv" style="margin-top:40px"><a href="resources/gabriel_cv.pdf" download style="text-decoration:none">MEU CV</a></button>
    </div>
    <div class="w3-col m6">
      <p class="w3-wide"><i class="fa fa-desktop w3-margin-right"></i>C</p>
      <div class="w3-grey">
        <div class="w3-container w3-dark-grey w3-center" style="width:90%">90%</div>
      </div>
      <p class="w3-wide"><i class="fa fa-desktop w3-margin-right"></i>Java, C#, Python</p>
      <div class="w3-grey">
        <div class="w3-container w3-dark-grey w3-center" style="width:85%">85%</div>
      </div>
      <p class="w3-wide"><i class="fa fa-desktop w3-margin-right"></i>HTML, CSS, JavaScript</p>
      <div class="w3-grey">
        <div class="w3-container w3-dark-grey w3-center" style="width:70%">70%</div>
      </div>
      <p class="w3-wide"><i class="fa fa-desktop w3-margin-right"></i>SQL, php</p>
      <div class="w3-grey">
        <div class="w3-container w3-dark-grey w3-center" style="width:50%">50%</div>
      </div>
      <p class="w3-wide"><i class="fa fa-desktop w3-margin-right"></i>Assembly, Prolog</p>
      <div class="w3-grey">
        <div class="w3-container w3-dark-grey w3-center" style="width:20%">20%</div>
      </div>
    </div>
  </div>
</div>

<!-- O que eu fiz-->
<div class="w3-container w3-dark-grey w3-center" style="padding:128px 16px" id="work">
  <h3>PORTFOLIO</h3>
  <p class="w3-large">O que eu fiz até ao momento</p>
  <div class="w3-row-padding" style="margin-top:64px">
    <div class="w3-col l3 m6">
      <img src="resources/IST_Logo.png" style="width:50%; padding-top: 15px" onclick="onClick(this, 'IST_Logo.png')" class="w3-hover-opacity" alt="Alguns dos projetos que realizei no curso">
    </div>
    <div class="w3-col l3 m6">
      <img src="resources/2048_Logo.png" style="width:50%; padding-top: 15px" onclick="onClick(this, '2048_Logo.png')" class="w3-hover-opacity" alt="2048 realizado em java com interface gráfica">
    </div>
  </div>
</div>

<!-- quando se clica nas imagens do portfolio-->
<div id="modal01" class="w3-modal w3-black" onclick="this.style.display='none'">
  <span class="w3-button w3-xxlarge w3-black w3-padding-large w3-display-topright" title="Close Modal Image">×</span>
  <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
    <img id="img01" class="w3-image" style="width: 50%">
    <p id="caption01" class="w3-opacity w3-large"></p>
	<p><a href="https://github.com/galmeida9/LEIC-A-Projects" target="_blank">Link para o Github</a></p>
  </div>
</div>

<div id="modal02" class="w3-modal w3-black" onclick="this.style.display='none'">
  <span class="w3-button w3-xxlarge w3-black w3-padding-large w3-display-topright" title="Close Modal Image">×</span>
  <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
    <img id="img02" class="w3-image" style="width: 50%">
    <p id="caption02" class="w3-opacity w3-large"></p>
	<p><a href="https://github.com/galmeida9/The-2048-Game" target="_blank">Link para o Github</a></p>
  </div>
</div>

<!-- work experience -->
<div class="w3-container" style="padding:64px 16px">
  <h3 class="w3-center">WORK EXPERIENCE</h3>
  <div style="padding: 30pt">
    <p class="w3-center" style="font-size: 20pt; margin-top: -10pt">2019</p>
    <a href="https://skyline.be" target="_blank"><img src="resources/Skyline_Communications.png" style="width: 200pt" alt="Skyline Website"></a>
    <p class="w3-large">Trabalhei como engenheiro de sistemas num estágio de verão em que realizava testes de regressão em C#, relatórios dos testes e trabalhei em scrum e sprint.</p>
  </div>
</div>

<!-- Contactos -->
<div class="w3-container w3-light-grey" style="padding:128px 16px" id="contact">
  <h3 class="w3-center">CONTACTOS</h3>
  <div style="margin-top:48px">
    <p><i class="fa fa-phone fa-fw w3-xxlarge w3-margin-right"></i> Telemóvel: +351 917 308 440</p>
    <p><i class="fa fa-envelope fa-fw w3-xxlarge w3-margin-right"> </i> Email pessoal: <a href="mailto:galmeida9@gmail.com">galmeida9@gmail.com</a></p>
    <p><i class="fa fa-envelope fa-fw w3-xxlarge w3-margin-right"> </i> Email da universidade: <a href="mailto:>gabriel.almeida@tecnico.ulisboa.pt">gabriel.almeida@tecnico.ulisboa.pt</a></p>
    <br>
  </div>
  <h4 style="padding-left: 10px">Redes Sociais:</h4>
  <div class="w3-xxlarge w3-margin-right w3-section">
    <a href="https://www.facebook.com/gabriel.almeida.18062533" target="_blank"><i class="fa fa-facebook-official w3-hover-opacity" style="padding-left: 10px"></i></a>
    <a href="https://www.instagram.com/galmeida9/" target="_blank"><i class="fa fa-instagram w3-hover-opacity"></i></a>
    <a href="https://twitter.com/GBAlmeida9" target="_blank"><i class="fa fa-twitter w3-hover-opacity"></i></a>
    <a href="https://www.linkedin.com/in/gabriel-a-b3772a131/" target="_blank"><i class="fa fa-linkedin w3-hover-opacity"></i></a>
  </div>
  
  <!-- enviar mensagem -->
  <div class="w3-row-padding">
    <div class="w3-col m12 w3-center">
      <h3>Envia-me um email!</h3>
	    <div class="w3-container">
	      <form action="php/mail.php" method="post">
	        <p><input class="w3-input w3-border" type="text" placeholder="Nome" required name="Nome"></p>
          <p><input class="w3-input w3-border" type="text" placeholder="E-mail" required name="Email"></p>
          <p><input class="w3-input w3-border" type="text" placeholder="Título" required name="Titulo"></p>
		      <p><input class="w3-input w3-border" type="text" placeholder="Comentário" required name="Comentario"></p>
		      <p>
		        <button class="w3-button w3-black" type="submit">
			        <i class="fa fa-paper-plane"></i> Enviar
		        </button>
		      </p>
        </form>
      </div>
	  </div>
  </div>
</div>


<!-- Rodapé -->
<footer class="w3-center w3-black w3-padding-64">
  <a href="#about" class="w3-button w3-light-grey"><i class="fa fa-arrow-up w3-margin-right"></i>Para cima</a>
  <div class="w3-xlarge w3-section">
    <a href="https://www.facebook.com/gabriel.almeida.18062533" target="_blank"><i class="fa fa-facebook-official w3-hover-opacity"></i></a>
    <a href="https://www.instagram.com/galmeida9/" target="_blank"><i class="fa fa-instagram w3-hover-opacity"></i></a>
    <a href="https://twitter.com/GBAlmeida9" target="_blank"><i class="fa fa-twitter w3-hover-opacity"></i></a>
    <a href="https://www.linkedin.com/in/gabriel-a-b3772a131/" target="_blank"><i class="fa fa-linkedin w3-hover-opacity"></i></a>
  </div>
  <p>Este website recolhe informação para estatística, para a observar carregue <a href="https://web.tecnico.ulisboa.pt/~ist189446/simplestats/" target="_blank">aqui</a></p>
</footer>

<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="jquery-eu-cookie-law-popup.js"></script>
 
<script>

var slideIndex=1;
var timeout;
//showSlides(slideIndex);

function plusSlides() { 
    clearTimeout(timeout);
	showSlides(slideIndex += 1);    
}

function minusSlides() {
    clearTimeout(timeout);
	showSlides(slideIndex += -1);    
}

function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("slides");
    if (n > slides.length) {slideIndex = 1}
    if (n < 1) {slideIndex = slides.length}
    
    for (i = 0; i < slides.length; i++) {slides[i].style.display = "none";}
    
    slides[slideIndex-1].style.display = "block";    

	timeout = setTimeout(plusSlides, 7000);
}

// Modal Image Gallery
function onClick(element, img) {
	if (img == "IST_Logo.png") {
		document.getElementById("img01").src = element.src;
		document.getElementById("modal01").style.display = "block";
		var captionText = document.getElementById("caption01");
		captionText.innerHTML = element.alt;
	}
	else if (img == "2048_Logo.png") {
		document.getElementById("img02").src = "resources/2048_Screenshot.png";
		document.getElementById("modal02").style.display = "block";
		var captionText = document.getElementById("caption02");
		captionText.innerHTML = element.alt;
	}
}


// Toggle between showing and hiding the sidebar when clicking the menu icon
var mySidebar = document.getElementById("mySidebar");

function w3_open() {
	if (mySidebar.style.display === 'block') {
		mySidebar.style.display = 'none';
	} else {
		mySidebar.style.display = 'block';
	}
}

// Close the sidebar with the close button
function w3_close() {
	mySidebar.style.display = "none";
}

function grayScale(element) {
	element.style="filter: grayscale(100%)";	
}

function notGrayScale(element) {
	element.style="filter: grayscale(0%)";	

}

</script>

</body>
</html>
