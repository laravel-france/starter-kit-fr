<!DOCTYPE html>
<html lang="fr-FR">
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <h2>Contact de la part d'un utilisateur</h2>
        <hr>
   	<a href="mailto:{{ $email }}">{{ $email }}</a> 
 		<hr>
 		<h3>Message :</h3>
        <p>
        	{{ $content }}
        </p>
    </body>
</html>
