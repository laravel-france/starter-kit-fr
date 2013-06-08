<?php

# Traduction Laravel-france
# Maj:7/06/2013 - error.php

return array(

	'403' => array(
		'title' 	=> 'Erreur 403 - Accès refusé',
		'description'  	=> 'Accès refusé',
		'error'			=> 'Erreur de serveur: 403 (Interdit)',
		'meaning'    	=> 'Qu\'est-ce que cela signifie ?',
		'reason'		=> 'Vous n\'avez pas les permissions nécessaires pour accéder à cette page.',
		'redirect'     	=> 'Peut-être souhaitez consulter notre <a href="'.URL::route('home').'"> page d\'accueil </a> ?'
	),

	'404' => array(
		'title' 	=> 'Erreur 404 - Page introuvable.',
		'description'  	=> 'Page introuvable',
		'error'			=> 'Erreur de serveur: 404 (Page non trouvée)',
		'meaning'    	=> 'Qu\'est-ce que cela signifie ?',
		'reason'		=> 'Nous n\'avons pas pu trouver la page que vous avez demandée sur nos serveurs. Nous en sommes vraiment désolés.<br>'.
							'Nous faisons tout notre possible afin que cette page soit prochainement disponible.',
		'redirect'     	=> 'Peut-être souhaitez vous consulter notre <a href="'.URL::route('home').'"> page d\'accueil </a> ?'
	),

	'500' => array(
		'title' 	=> 'Erreur 500 - Erreur serveur',
		'description'  	=> 'Erreur serveur',
		'error'			=> 'Erreur de serveur: 500 (Erreur) ',
		'meaning'    	=> 'Qu\'est-ce que cela signifie ?',
		'reason'		=> 'Quelque chose s\'est mal passé sur nos serveurs pendant que nous traitions votre demande.<br>'.
							'Nous sommes vraiment désolés à ce sujet, nous faisons tout notre possible pour résoudre cela au plus vite.',
		'redirect'     	=> 'Peut-être souhaitez vous consulter notre <a href="'.URL::route('home').'3> page d\'accueil </a> ?'
	),

	'503' => array(
		'title' 	=> 'Erreur 503 - Maintenance',
		'description'  	=> 'Maintenance prévue',
		'error'			=> 'Erreur de serveur: 503 (Maintenance) ',
		'meaning'    	=> 'Qu\'est-ce que cela signifie ?',
		'reason'		=> 'Nous sommes sous une maintenance programmée et nous serons de retour bientôt !'
	)

);
