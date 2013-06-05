<!DOCTYPE html>
<html lang="en-US">
	<head>
		<meta charset="utf-8">
	</head>
	<body>
		<h2>Réinitialisation du mot de passe</h2>

		<div>
			Cliquez sur le lien ci-dessous pour réinitialiser votre mot de passe :
			{{ URL::to('password/reset', array($token)) }}.
		</div>
	</body>
</html>