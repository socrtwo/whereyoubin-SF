Redir.be v0.2

Script fourni sous licence GNU/GPL
par Feuillois Julien

contact : admin@altmail.org
pour toute demande d'information ou de support, n'hésitez pas !

_______

Configuration :

Pour fonctionner, ce script nécessite apache pour la redirection d'url ou tout autre équivalent capable de gerer le
fichier .htaccess et d'une base de donnée MySQL.
Il peut également nécessiter le module PHP APC ( Alternative PHP Cache ) si vous configurez le compteur en mode 2.

Installation :

- Creez une base de donnée et appliquez y le dump install.sql
- Modifiez le fichier includes/config.php avec vos identifiants de connexion à la base de donnée et en fonction de vos besoins.

Voilà, c'est terminé !
Le script doit etre fonctionnel.

_______

Changelog :

8/03/2010

- Création des classes pour gerer les URL
- Ajout d'une fonction Sanitize
- Creation du fichier de configuration
- Mise en place d'un choix pour le type de redirection ( simple, 301, html )
- Mise en place d'un choix pour le compteur ( desactivé, simple, cache )
- Modification de le fonction de verification des URL
- Modification de l'affichage URL et ainsi que d'autres marques en dur renvoyant directement vers redir.be
pour s'adapter à l'environnement où le script a été installé.
- Modification de la structure de la base de donnée
