
<?php

# Traduction Laravel-france
# Maj:6/05/2013 - messages.php


return array(

	#app/controllers/AuthController.php
	"auth" 	=> array (

		"account_already_exists" => "Ce compte existe déjà.",
		"account_not_found"      => "L'utilistateur n'a pas été trouvé.",
		"account_not_activated"  => "Cet utilisateur n'est pas activé.",
		"account_suspended"      => "Ce compte est suspendu.",
		"account_banned"         => "Cet utilisateur est banni.",

		"login" => array(
			"error"   => "Connexion impossible pour le moment, veuillez réessayer plus tard.",
			"success" => "Vous êtes connecté."
		),

		"register" => array(
			"error"   => "Création du compte impossible pour le moment, veuillez réessayer plus tard.",
			"success" => "Compte créé."
		),

		"reset-password" => array(
			"error"   => "Réinitialisation du compte impossible pour le moment, veuillez réessayer plus tard.",
			"success" => "L'email pour la réinitialisation de mot de passe a été envoyé."
		),

		"activate" => array(
			"error"   => "Activation du compte impossible pour le moment, veuillez réessayer plus tard.",
			"success" => "Votre compte est activé."
		),

		"logout" => array(
			"success" => "Vous êtes déconnecté."
		)
	),

	
	"account" 	=> array (

		"change-email" 	=> array (	
			"error"	=> "L'email est incorrect",
			"success"	=> "L'email a été mis à jour."
		),

		#controllers/account/ChangePasswordController.php
		"change-password" 	=> array (			
			"error"  => "Le mot de passe est incorrect",
			"success"  => "Le mot de passe a été mis à jour."
		),

		#controllers/account/ProfileController.php
		"profile" 	=> array (			
			"success"	=> "Le compte a été mis à jour."
		)

	),			
	
	"admin" => array (

		#app/controllers/admin/Userontroller.php
		"users" => array(

			'user_exists'              => "L'utilisateur existe déjà !",
			'user_not_found'           => "L'utilisateur [:id] n'existe pas.",
			'user_login_required'      => "Le nom de l'utilisateur est requis.",
			'user_password_required'   => 'Le mot de passe est requis.',
			'insufficient_permissions' => 'Permissions insuffisantes.',

			'success' => array(
				'create'    => "L'utilisateur a été créé.",
				'update'    => "L'utilisateur a été mis à jour.",
				'delete'    => "L'utilisateur a été supprimé.",
				'ban'       => "L'utilisateur a été banni.",
				'unban'     => "L'utilisateur n'est plus banni",
				'suspend'   => "L'utilisateur a été suspendu.",
				'unsuspend' => "L'utilisateur n'est plus suspendu.",
				'restored'  => "L'utilisateur a été réinitialisé."
			),

			'error' => array(
				'create' =>  "L'utilisateur n'a pu être créé. Merci d'essayer de nouveau.",
				'update' => "L'utilisateur n'a pu être mis à jour. Merci d'essayer de nouveau.",
				'delete' => "L'utilisateur n'a pu être supprimé. Merci d'essayer de nouveau.",
			)

		),

		#app/controllers/admin/Userontroller.php
		"groups" => array(

			'group_exists'        => 'Le groupe existe déjà !',
			'group_not_found'     => "Le groupe [:id] n'existe pas.",
			'group_name_required' => "Le nom du champ est requis",

			'success' => array(
				'create' => 'Le groupe a été créé.',
				'update' => 'Le groupe a été mis à jour.',
				'delete' => 'Le groupe a été supprimé.',
			),

			'delete' => array(
				'create' => "Le groupe n'a pu être créé. Merci d'essayer de nouveau.",
				'update' => "Le groupe n'a pu être mis à jour. Merci d'essayer de nouveau.",
				'delete' => "Le groupe n'a pu être supprimé. Merci d'essayer de nouveau.",
			)

		)

	)

);