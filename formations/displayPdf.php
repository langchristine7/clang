<?php
// affiche le contenu d'un répertoire

function displayPdfFiles ($aDir) {
	static $compteur=0;
	$compteur++;
	$webRoot=getWebRoot();

	echo "<h4>Chapitre: " .str_ireplace($webRoot, "", $aDir)."</h4>";
	if (!is_dir($aDir)) 
		return;
	
	$filesList = scandir ($aDir);
	
	foreach ($filesList as $file) {

		if (is_dir($file))
		{		
			if ($file != "." && $file != ".." && $file != "@eaDir" )
				{
				displayPdfFiles($aDir."/".$file);
				}
		}
		else {
			$adrFile=$aDir."/".$file;
			$linkFile=str_ireplace($webRoot, "", $adrFile);
			$extension=pathinfo($adrFile,PATHINFO_EXTENSION);
			if (is_file($adrFile) && $extension=="pdf" ) {
				echo ' <li class="ui-state-default"><a href="'.$linkFile.'">'.$file."</a></li>" ;
			}
		}
	
	}
}
?>
