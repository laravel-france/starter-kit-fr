<?php

# Traduction Laravel-france
# Maj: 6/06/2013 - frontend.php

return array(

	# views/layouts/default.blade.php
	"site-title" => "Titre du site",
	"copyright"  => "@ Société - 2013",

	"menu" => array(
		"home"     	 => "Accueil",
		"about-us"   => "A Propos",
		"contact-us" => "Contact",
		"signin"     => "Connexion",
		"signup"     => "Inscription",
		"user-menu"  => array(
			"title" 	=> "Bonjour, ",
			"admin"		=> "Administration",
			"profile"	=> "Profil",
			"logout"	=> "Déconnexion"
		)
	),

	# views/frontend/welcome.blade.php
	"welcome" => array (
		"section-title" => "Accueil ::",
		"page-title"    => "Accueil"
	),

	# views/frontend/about-us.blade.php
	"about-us" => array (
		"section-title" => "A Propos ::",
		"page-title"    => "A Propos"
	),

	# views/frontend/contact-us.blade.php
	"contact-us" => array (
		"section-title" => "Contact ::",
		"page-title"    => "Contactez-nous",
		"name"        	=> "Nom",
		"email"       	=> "Email",
		"description" 	=> "Message",
		"submit"     	=> "Envoyer"
	),

	"auth" => array (

		# views/frontend/auth/signin.blade.php
		"signin" => array (
			"section-title" 	=> "Connexion ::",
			"page-title"		=> "Connexion",
			"email"           	=> "Email",
			"password"        	=> "Mot de passe",
			"remember-me"     	=> "Mémoriser",
			"cancel"		  	=> "Annuler",
			"submit"          	=> "Connexion",
			"forgot-password" 	=> "Mot de passe perdu ?"
		), 

		# views/frontend/auth/signup.blade.php
		"signup" => array (
			"section-title" 	=> "Inscription ::",
			"page-title"		=> "Inscription",
			"firstname"       	=> "Prénom",
			"lastname"        	=> "Nom",
			"email"           	=> "Email",
			"confirm-email"   	=> "Confirmation Email",
			"password"        	=> "Mot de passe",
			"confirm-password" 	=> "Confirmation mot de passe",
			"cancel"		  	=> "Annuler",
			"submit"          	=> "Inscription"
		),

		# views/frontend/auth/forgot-password.blade.php
		"forgot-password" => array (
			"section-title" 	=> "Mot de passe perdu ::",
			"page-title"		=> "Mot de passe perdu",
			"email"           	=> "Email",
			"cancel"		  	=> "Annuler",
			"submit"          	=> "Récupérer le mot de passe"
		),

		# views/frontend/auth/forgot-password-confirm.blade.php
		"forgot-password-confirm" => array (
			"section-title" 	=> "Réinitialisation du mot de passe ::",
			"page-title"		=> "Réinitialisation du mot de passe",
			"new-password"      => "Nouveau mot de passe",
			"confirm-password" 	=> "Confirmation mot de passe",
			"cancel"		  	=> "Annuler",
			"submit"          	=> "Réinitialiser"
		)

	),

	"account" => array (

		# views/layouts/account.blade.php
		"menu" => array (
			"menu-title" 		=> "Configuration",
			"profile"			=> "Modifier le profil",
			"change-password"   => "Changer le mot de passe",
			"change-email" 		=> "Changer l'email"
		),

		# views/frontend/account/profile.blade.php
		"profile" => array (
			"section-title" 	=> "Profil ::",
			"page-title"		=> "Profil",
			"firstname"    		=> "Prénom",
			"lastname" 			=> "Nom",
			"website"		  	=> "Site",
			"country"          	=> "Pays",
			"gravatar"          => "Email du compte gravatar",
			"gravatar-change"   => "Modifier votre gravatar en ligne",
			"submit"          	=> "Mettre à jour votre profil"
		),

		# views/frontend/account/change-password
		"change-password" => array (
			"section-title" 	=> "Changer le mot de passe ::",
			"page-title"		=> "Changer le mot de passe",
			"old-password"  	=> "Ancien mot de passe",
			"password" 			=> "Nouveau mot de passe",
			"confirm-password"	=> "Confirmer le nouveau mot de passe",
			"submit"          	=> "Mettre à jour le mot de passe",
			"forgot-password" 	=> "Mot de passe perdu ?"
		),

		# views/frontend/account/change-email
		"change-email" => array (
			"section-title" 	=> "Changer d'email ::",
			"page-title"		=> "Changer d'email",
			"email"  			=> "Email",
			"confirm-email"		=> "Confirmation Email",
			"password"			=> "Mot de passe",
			"submit"          	=> "Mettre à jour l'email",
			"forgot-password" 	=> "Mot de passe perdu ?"			
		)

	) 


);