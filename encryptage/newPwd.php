<!DOCTYPE html>
<html>
<head>

<script src="/jquery/jquery-1.11.0.js"></script>

<script>
	function validate () {
	//alert ("function validate: mdp= " + $("#pwd").val());
	
		if ($("#pwd").val() != $("#pwd2").val() )
			{
			alert ("Les mots de passe ne conrespondent pas");
			return;
			}
		else
			window.theForm.submit();
	}
</script>
</head>

<body>

<form id="theForm" method="post" action="cryptage.php">
  Nom utilisateur: <input type="text" name="login" ><br>
  Mot de passe: <input type="password" name="pwd" id="pwd"><br>
  Retapez le mot de passe : <input type="password" id="pwd2"><br>
  <input type="button" onClick="validate();" value="Valider"/>
</form>
</body>
</html>
