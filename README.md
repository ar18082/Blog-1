"# Blog-1" 
# Blog
Exo 1 
voir :  controller/ TableauController
        templates/tableau/index.html.twig


Creer un projet symfony full nommé blog
●Créer une base de donnée : nommée blog
●Modifier la chaîne de connexion du .env de votre projet
– DATABASE_URL="mysql://username:password@127.0.0.1:3306/blog?serverVersion=5.7"
– Nous verrons plus tard les détails de cette partie, sachez qu’en installant la version full de symfony nous avons la connexion vers la base de donnée qui nous est demandée 

par un package nommé doctrine

    ●Créer un contrôlleur ArticleController et afficher le titre de la page
    ●Gérer l’héritage entre votre base et votre vue
    ●Créer une route qui retourne plusieurs tableaux a votre vue :
            – Un tableau de nombre aléatoires, ceux-ci seront affiché de manière à séparer les nombres paires des nombres impaires
            – Afficher le premier élément d’un tableau de string
            – Afficher chaque élement de votre tableau de string avec la première lettre en majuscules
            – Afficher le plus grand nombre de votre tableau de nombre
            – Afficher aléatoirement une des valeurs de votre tableau
            – Envoyer une date et faire un affichage différent si la date est supérieure ou inférieure a celle d’aujourd’hui
    ●Créer votre fichier global css et lier le a votre template de base
    ●Créer une navigation basique et un footer qui seront dans le template parent

Exo 2 
voir : Controller/ArticleController et Controller/HomeController
        templates/article/index.html.twig et detail_article.html.twig et home/index.html.twig

Dans le même projet Blog :
●Ajouter un onglet de navigation vers votre page article
●Ajouter un lien depuis cette page vers une nouvelle page qui 
affichera l’article passé en paramètre
●Cette nouvelle page doit hériter de votre style de base
●Gérer le contenu, l’url et le nom de l’onglet


exo 3 


Dans le même projet Blog :
    ●Ajouter une route qui permet de gérer les votes pour un article
        – Retourne du JSON
    ●Cette route sera appelée depuis votre page article via une requête Ajax 
    ●Un + et – permettrons de voter, ceci via la requête Ajax
        – Le javascript sera stocké dans un fichier du répertoire public
        – Dans un premier temps vous pouvez retourner des valeurs aléatoires
