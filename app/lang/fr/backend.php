<?php

# Traduction Laravel-france
# Maj: 6/06/2013 - backend.php

return array(

	# views/layouts/default.blade.php
	"site-title" => "Titre du site",
	"copyright"  => "@ Société - 2013",

	"button" => array (
		'edit'    => 'Edition',
		'delete'  => 'Suppression',
		'restore' => 'Restauration',
	),

	"general" => array(
		'yes' => 'Oui',
		'no'  => 'Non',
		'allow' => 'Autorisé',
		'deny'  => 'Refusé',
		'inherit' => 'Hérité'
	),

	"menu" 	=> array(
		"home"     	=> "Accueil",
		"user-menu" => array(
			"title" 		=> "Utilisateurs",
			"users"			=> "Utilisateurs",
			"groups"		=> "Groupes",
		),
		"view-homepage"	=> "Voir l'accueil du site",
		"logout"		=> "Déconnexion"
	),

	"users"  	=> array(

		#views/backend/users/index.php
		"index"  	=> array(
			"section-title" => "Gestion des utilisateurs ::",
			"page-title" 	=> "Gestion des utilisateurs",
			"buttons"       => array (
				"create-user" 		 => "Ajouter", 
				"users-with-trashed" => "Tous les utilisateurs",
				"users-only-trashed" => "Utilisateurs supprimés"
			),
			"table" => array(
				'id'         => 'Id',
				'first_name' => 'Prénom',
				'last_name'  => 'Nom',
				'email'      => 'Email',
				'activated'  => 'Activé',
				'created_at' => 'Créé',
				'actions'	 => 'Actions'
			),
		),

		#views/backend/users/create.php
		"create"  	=> array(
			"section-title" => "Nouvel utilisateur ::",
			"page-title" 	=> "Nouvel utilisateur",
			"buttons"       => array (
				"back" 		 => "Annuler",
				"cancel" 		 => "Annuler",
				"reset" 		 => "Vider le formulaire",
				"submit" 		 => "Créer l'utilisateur"
			),
			"tabs"       => array (
				"general" 	 => "Général", 
				"permissions" => "Permissions"
			),
			'first_name' 		=> 'Prénom',
			'last_name'  		=> 'Nom',
			'email'      		=> 'Email',
			"password"        	=> "Mot de passe",
			"confirm-password" 	=> "Confirmation mot de passe",
			'activated'  		=> 'Utilisateur activé',
			'groups'  			=> 'Groupes',
			'help'              => "Sélectionnez un groupe à affecter à l'utilisateur, rappelez-vous que l'utilisateur prend les autorisations du groupe auxquelles elles sont affectées."
		),

		#views/backend/users/edit.php
		"edit"  	=> array(
			"section-title" => "Modification d'utilisateur ::",
			"page-title" 	=> "Modification d'utilisateur",
			"buttons"    => array (
				"back"		=> "Annuler",
				"cancel" 	=> "Annuler",
				"reset" 	=> "Vider le formulaire",
				"submit" 	=> "Modifier l'utilisateur"
			),
			"tabs"       => array (
				"general" 	 => "Général", 
				"permissions" => "Permissions"
			),
			'first_name' 		=> 'Prénom',
			'last_name'  		=> 'Nom',
			'email'      		=> 'Email',
			"password"        	=> "Mot de passe",
			"confirm-password" 	=> "Confirmation mot de passe",
			'activated'  		=> 'Utilisateur activé',
			'groups'  			=> 'Groupes',
			'help'              => "Sélectionnez un groupe à affecter à l'utilisateur, rappelez-vous que l'utilisateur prend les autorisations du groupe auxquelles elles sont affectées."
		),

	),

	#views/backend/groups
	"groups" 	=> array(

		#views/backend/groups/index.php
		"index"  	=> array(
			"section-title" => "Gestion des groupes ::",
			"page-title" 	=> "Gestion des groupes",
			"buttons"       => array (
				"create-group" 	 => "Ajouter"
			),
			"table" => array(
				'id'         => 'Id',
				'name'       => 'Nom',
				'users'      => 'Nombre d\'utilisateurs',
				'created_at' => 'Créé',
				'actions'	 => 'Actions'
			),
			'no-results'	=> 'Aucun groupe'
		),

		#views/backend/groups/create.php
		"create"  	=> array(
			"section-title" => "Nouveau groupe ::",
			"page-title" 	=> "Nouveau groupe",
			"buttons"    => array (
				"back"		=> "Fermer",
				"cancel" 	=> "Annuler",
				"reset" 	=> "Vider le formulaire",
				"submit" 	=> "Créer le groupe"
			),
			"tabs"       => array (
				"general" 	 => "Général", 
				"permissions" => "Permissions"
			),
			'name' 		=> 'Nom'
		),

		#views/backend/groups/edit.php
		"edit"  	=> array(
			"section-title" => "Modification du groupe ::",
			"page-title" 	=> "Modification du groupe",
			"buttons"    => array (
				"back"		=> "Fermer",
				"cancel" 	=> "Annuler",
				"reset" 	=> "Vider le formulaire",
				"submit" 	=> "Modifier le groupe"
			),
			"tabs"       => array (
				"general" 	 => "Général", 
				"permissions" => "Permissions"
			),
			'name' 		=> 'Nom'

		)
		
	)	

);