Notice d'information:

Dans ce fichier se trouve les différents points sur lesquels j'ai eu quelques problèmes.

O. INTRO & EXPLICATIONS

J'ai codé ici avec le langage PHP pour la parti back. Le frontend est en HTML5/CSS3. Une petite dose de jQuery. Et une base de donnée MySQL.
J'ai codé en MVC et en PHP Objet. Pour ce faire, j'ai repris un modèle MVC que j'ai déjà utilisé auparavant quand j'étais en formation à la 3WA.

1. IMAGES

Voici les images disponibles sur ce projet.
Je n'ai pas réussi l'upload d'image pour la création et la modification dans la partie backOffice.
Néanmoins, il est possible d'ajouter tout de même une image (Uniquement pour la création) avec celle qui sont disponibles.
Il suffit pour ça d'écrire dans le champ "image" ce qui suit:

/images/le_nom_de_l'image


Liste disponible d'image:

AhriDefault.jpg
AhriSG.jpg
FiddlesticksSP.jpg
GalioDefault.jpg
KataDefault.jpg
KatarinaDS.jpg
RengarDefault.jpg
SionDefault.jpg
SorakaDefault.jpg
YasuoDefault.jpg


2. FILTRE TAG

Je n'ai pas utilisé d'AJAX pour le rafraichissement de la page.
J'ai séparé les deux sections de filtre. Il y a donc un seul tri possible à la fois.


3. SEARCH BAR

Je n'ai pas utilisé d'AJAX pour faire de refresh sur la liste quand on recherche un nom de produit. Pour la recherche, il faut entrer en entier le nom du produit pour le faire apparaître en terme voulue.


4. EN SAVOIR PLUS

Pour ce faire, j'ai créer une popup (modal) qui s'ouvre sur la même page quand on clique sur le bouton prévu à cet effet.
J'ai insérer un slider avec 'slick' si il y a deux images pour un produit.
A la première ouverture, il y a un petit bug (dont je n'ai pas trouvé la source). Quand il y a deux images, l'image qui apparaît s'affiche à moitié alors qu'elle devrait s'afficher entièrement. En slidant avec les flèches prévues à cet effet, on peut naviguer entre les deux images. Un autorun est en place ce qui fait que les images défilent normalement quand on enlève la souris de l'écran. En fermant et en réouvrant le même produit, l'affichage se fait normalement.


