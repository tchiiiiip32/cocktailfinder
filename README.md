Installation du projet :

1er etape :
installer wamp
cloner le project dans www

2nd etape
aller à localhost/phpmyadmin
crée une nouvelle base de donné
choisir le format UTF8mb4_unicode_ci
nommé la base "cocktailfinder"
puis cliquer sur importer et coller le script SQL de samuelle
une fois ci fait retourner dans le projet et renomer le fichier .env.example en .env 
et le remplir avec les information de la base de donner 

3nd etape
a la racine du projet /www/cocktailfinder
modifier le composer.json et supprimer la ligne : "laravelcollective/html": "5.1.*"
si le dossier vendor existe le supprimer
executer la commande dans le terminal : composer require "laravelcollective/html":"^5.4.0"
une fois installer lancer la commande : composer update
une fois fini tout devrait fonctionner ! 

4eme etape
faire la commande php artisan key:generate et l'ajouter au .env
mettre a jour le gitignore 
composer.lock
.env.example
