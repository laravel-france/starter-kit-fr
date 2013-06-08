#Laravel-france - kit de démarrage français

Le kit de démarrage laravel-france vous aidera à débuter avec Laravel 4, 
avec les bases d'une application en français.

-----

##Inclus

* commande d'installation personnalisée
* Twitter Bootstrap 2.3.2
* JQuery 1.10.
* Fichiers de traduction laravel (https://github.com/laravel-france/laravel-lang-fr)
* Pages d'erreur : 403, 404, 500 et 503
* Back-end : Gestion des utilisateurs et des groupes
* Front-end : Connexion , inscription et activation de l'utilisateur
* Pages du site : accueil, à propos et contactez-nous
* Le package [Cartalyst Sentry 2] pour l'authentification et la gestion des autorisations (https://github.com/cartalyst/sentry)

-----

##Exigences
- PHP 5.4

-----

##Installation

###1) Téléchargement

Deux choix s'offrent à vous :

####1.1) cloner le référentiel

    git clone https://github.com/laravel-france/starter-kit-fr votreDossier

####1.2) Télécharger le référentiel

    https://github.com/laravel-france/starter-kit-fr/archive/master.zip

-----

###2) installer les dépendances via Composer
####2.1) Si vous n'avez pas installé Composer

    cd votreDossier
    curl http://getcomposer.org/installer | php
    php composer.phar install

####2.2) si Composer est installé

    cd votreDossier
    composer install

-----

###3) Configuration de la base de données 

Une fois le kit de démarrage cloné et toutes les dépendances installées, vous devez créer une base de données et mettre à jour le fichier `app/config/database.php`.

-----

###4) Paramètres de configuration de messagerie

Maintenant, vous devez configurer vos paramètres de messagerie en modifiant le fichier suivant `app/config/mail.php`.

Ces paramètres seront utilisés pour envoyer des emails à vos utilisateurs lors de leur inscription et afin qu'ils puissent demander la réinitialisation de leur mot de passe.

-----

###5) Utilisez la commande d'installation personnalisée

Maintenant, vous devez créer vous-même un utilisateur et terminer l'installation.

Utilisez la commande suivante pour créer vos utilisateurs, groupes d'utilisateurs et exécuter automatiquement toutes les migrations nécessaires.

    php artisan app:install

-----

##LICENCE

The MIT License (MIT)

Copyright (c) 2013 - laravel.fr

Ce programme est un logiciel libre ; 

Vous pouvez le redistribuer ou le modifier suivant les termes de la licence MIT - 
http://opensource.org/licenses/MIT

Ce programme est distribué dans l'espoir qu'il sera utile, mais SANS AUCUNE GARANTIE ;

-----

##CONTRIBUTEURS
* Carpentier-Christophe
* AoSix
* Bestmomo
* Tamplan
