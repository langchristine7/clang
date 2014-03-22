<!DOCTYPE html>
<html>
<head>
	<title> Welcome Clang Home Page </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width"/>
      
  <link rel="stylesheet" href="./style.css"  type="text/css" >
  <script src="//code.jquery.com/jquery-1.9.1.js"></script>
  <script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
<script>
$(document).ready (function () {
	
	onResizeBody();

});

function onResizeBody() {
	// calcul de la taille des boutons dessous pour ajuster la taille du bandeau fjgh
	
	//alert ("larg du contener: " + $("#contener").css("width"));
	
	var larg = new Number (0);
	var nbElts = 0;
	var largBandeau = 0;
	//var largFenetre = getLargElement($("#contener"));
	var largFenetre = $("#contener").width();
	
	$("#blocBoutons").children().each(function() {
			var largElement = getLargElement(this);
			if (largBandeau + largElement <= largFenetre)
				largBandeau += largElement;
			});
			
	if (largBandeau == 0 )
		largBandeau=230;
	largBandeau-=10;
	$("#bandeau").css("width", largBandeau+"px");
	$("footer").css("width", (largBandeau-10 )+"px");
							
}

function getLargElement (elt) {
	var larg = new Number (0);
	larg += Number($(elt).css("width").replace("px",""));
	larg += 2*(Number($(elt).css("margin").replace("px","")))+20;
	larg += 2*(Number($(elt).css("border-width").replace("px","")));
	//alert ("marge:" + $(elt).css("margin"));
	return larg;
}


</script>
<?php 
$homeClang="http://plang.us.to/clang"
?>
</head>
<body onresize="onResizeBody();">
      	


<div id="contener">
		<a id="bandeau" href="./index.php">
		Welcome Clang Home Page
		</a>
	
		<div id="blocBoutons" style="background-color:red">

		<a class="choixbtn" href="./bibliotheque2/bibliotheque.htm"> Bibliothèque</a>
		<a class="choixbtn" href="./bibliotheque/displayBiblio.php"> Bibliothèque Quilts & Co</a>
		<a class="choixbtn" href="./encryptage/newPwd.php"> Crypter un mot de passe</a>
		<a class="choixbtn" href="./formations/formations.php"> Formations</a>
		<a class="choixbtn" href="http://clang.w.pw/prestashop"> Clang livres psycho</a>
		<a class="choixbtn" href="http://clang.w.pw/piwigo"> Clang piwigo</a>
		</div>
<footer>
		<div style="clear:both">
			Site réalisé par <a href="./index.php"> Clang </a>
		</div>
</footer>
</div> <!-- contener-->
</body>
</html>