<!DOCTYPE html>

<html>
	<head>
		<meta charset="utf-8"/>
		 <meta name="viewport" content="width=device-width"/>
		<title>The Clang Bibliothèque</title>
		<link rel="stylesheet" href="//code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" type="text/css">
		<link rel="stylesheet" href="//cdn.datatables.net/plug-ins/505bef35b56/integration/jqueryui/dataTables.jqueryui.css" type="text/css">
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
		<script src="//cdn.datatables.net/1.10.0-beta.2/js/jquery.dataTables.js"></script>
		<script src="//cdn.datatables.net/plug-ins/505bef35b56/integration/jqueryui/dataTables.jqueryui.js"></script>
<script>
$(document).ready(  
 function()
 {
 $.ajax( {
    type: "GET",
    url: "bibliotheque.xml",
    dataType: "xml",
    success: function(xml)
       {
       	 var dataroot = $(xml).find('dataroot').first();
         $(xml).find('livres').each(   
           function()
           {
            var id = $(this).find('id').text();
            var titre = $(this).find('titre').text();
            var sstitre = $(this).find('sstitre').text();
            var auteur = $(this).find('auteur').text();
            var editeur = $(this).find('editeur').text();
            var categorie = $(this).find('categorie').text();
            var tr=$('<tr></tr>');
            tr.append($('<td>' + id + '</td>'))
            		.append($('<td>' + titre + '</td>'))
            		.append($('<td>' + sstitre + '</td>'))
            		.append($('<td>' + auteur + '</td>'))
            		.append($('<td>' + editeur + '</td>'))
            		.append($('<td>' + categorie + '</td>'));
            tr.appendTo('#tbBiblio');

          });
		 $("#biblioTable").dataTable ( ); 
        }
});
}
);

</script>
<style>
* {
font-family:Verdana,sans-serif;
/*font-family: AvenirLT-BookOblique, Helvetica, Arial;*/
}
</style>	
</head>
<body>
	<p>
	Bibliothèque de Clang:
	</p>

    <div id="Div_XML"></div>
    <table id="biblioTable" class="display" cellspacing="0" width="100%">
    	<thead>
		<tr>
    		<th>Id</th>
    		<th>Titre</th>
    		<th>Sous-Titre</th>
    		<th>Auteur</th>
    		<th>Editeur</th>
    		<th>Catégorie</th>
		</tr>
    	</thead>
    	<tbody id="tbBiblio">
    	</tbody>
    </table>
</body>
</html>