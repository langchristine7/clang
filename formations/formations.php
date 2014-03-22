<!DOCTYPE html>
<html>
<head>
<title> Welcome Clang Home Page </title>
      <meta charset="utf-8">
<!--  <title>jQuery UI Draggable + Sortable</title>-->
<?php include "displayPdf.php" ?>
<?php $doc_formations="/volume1/web/doc_formations"; ?>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.9.1.js"></script>
  <script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css">
  <style>
  ul { list-style-type: none; margin: 0; padding: 0; margin-bottom: 10px; }
  li { margin: 5px; padding: 5px; width: 500px; }
  </style>
  <script>
      $(function () {
          $("#sortable").sortable({
              revert: true
          });
          $("#draggable").draggable({
              connectToSortable: "#sortable",
              helper: "clone",
              revert: "invalid"
          });
          $("ul, li").disableSelection();
      });
	  
  </script>
<?php 
		function getWebRoot() {
			return "/volume1/web";
		}
	?>

</head>
<body>
    <div style="width:200px;height:100px;background-color:red;" >
	<span> <a href="/clang/index.php"> Accueil </a> </span>
	</div>
	
	<h1>Formations</h1>
	<h2>Tutorials</h2>
<div>
	<div>
	
<ul id="sortable">

<?php
	//displayPdfFiles (getcwd());
	echo "toto";
	echo "<br>pwd:" . getcwd();
	echo '<br>$doc_formations:' . $doc_formations;
	displayPdfFiles ($doc_formations);
?>
<!--
<br>
  <li class="ui-state-default"><a href="/clang/formations/formations.php">Formations </a></li>
  <li class="ui-state-default"><a href='./le site du zero'>lien complet </a></li>
  <li class="ui-state-default">Item 2</li>
  <li class="ui-state-default">Item 3</li>
  <li class="ui-state-default">Item 4</li>
  <li class="ui-state-default">Item 5</li>
  -->
</ul>
 </div>
 </div>

</body>
</html>