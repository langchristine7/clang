<html>
<head>
</head>

<body>
Ligne à insérer dans le fichier de mot de passe : <br>

<?php
/*
parameters : 
login : user login
pwd : password to encrypte

output:
login:encrypted password = the line to add to password file

*/
// Password to be encrypted for a .htpasswd file
$clearTextPassword = $_POST["pwd"]; 

// Encrypt password
$password = crypt($clearTextPassword, base64_encode($clearTextPassword));

// Print encrypted password
echo $_POST["login"].":".$password;
?>
<br>
</body>
</html>
