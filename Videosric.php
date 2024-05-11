<!DOCTYPE html>
<html>
<head>
	
		<link rel="stylesheet" type="text/css" >


	<style>
#livross {
    
background-color: #feec71;

} 
</style>
	<meta charset="utf-8">

		

	<title>Livros</title>
</head>
	
<body>
	
		<div id="logovideos">
	<img src="imagens/logovideos.png">
</div>

	


	

	

<script>
function includeHTML() {
  var z, i, elmnt, file, xhttp;
  /*loop through a collection of all HTML elements:*/
  z = document.getElementsByTagName("*");
  for (i = 0; i < z.length; i++) {
    elmnt = z[i];
    /*search for elements with a certain attribute:*/
    file = elmnt.getAttribute("w3-include-html");
    if (file) {
      /*make an HTTP request using the attribute value as the file name:*/
      xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function() {
        if (this.readyState == 4) {
          if (this.status == 200) {elmnt.innerHTML = this.responseText;}
          if (this.status == 404) {elmnt.innerHTML = "Page not found.";}
          /*remove the attribute, and call this function once more:*/
          elmnt.removeAttribute("w3-include-html");
          includeHTML();
        }
      }      
      xhttp.open("GET", file, true);
      xhttp.send();
      /*exit the function:*/
      return;
    }
  }
};
</script>
	
<body>
		<div id="logovideos">
	<img src="logolivros.png">
</div>

	
<div w3-include-html="contentvideos.html" ></div>
<script>
includeHTML();
</script>
	

	

	
	<div id="menuecasavideos">
	
	<?php
	
	include 'menuvideosric.php';
	?>
	<div id="inicio">
	<a href="Ricardo.php"><img src="imagens/inicio.png"></a>
</div>
</div>
<div id="meiovideos">

<div id="Teoriasdapersonalidade">
<a href='Teoriasdapersonalidade.php'<img src="imagens/Psicologia.png"></br>Teorias da Personalidade</a>
</div>
<div id="Teoriasdapersonalidade">
<a href='humanidade.html'><img src="humanidade.jpg"></br>Humanidade </br>A História de</br>Todos Nós</a>
</div>
</div>


</body>
</html>
