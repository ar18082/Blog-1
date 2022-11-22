"# Blog-1" 
# Blog
Exo 1  ok fait 

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

Exo 2  ok fait 
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


exo 4  ok fait 

● Créer une classe Article
– Utiliser le maker bundle (make:entity)
– Créer les attributs pour :
● Le titre
● Le contenu de l’article
● La date de création de l’article

exo 5  ok fait

Effectuer la migration de votre entité Article
– Vérifier le fichier de migration
– Ajouter une description
– Lister en console les migrations


exo 6 

 Créer une nouvelle route pour sauver un article
– Créer un objet Article que vous persistez en base de données
– A chaque appel de cette route un nouvel article devra être sauvegardé en base de données.
– Créez des articles dont les dates de création sont 2015, 2018 et 2021 avec des titres et 
contenus différents
– Créez au moins un article dont le contenu contient le mot « magique »


exo 7 

Créer une page qui listera tous les titres de tous vos articles dans un tableau
– Celle-ci sera liée a votre barre de navigation 
● Utiliser le titre des articles comme lien vers une nouvelle page qui affiche l’article choisis en détail
● Créer une page qui affiche tous les articles dont le mot « magique » est présent dans le contenu
– Pour cela il vous faudra créer une fonction dans votre ArticleRepository dans laquelle une condition SQL du type 
« where content like ‘%magique %’ »
● Ajouter a votre page d’accueil des liens vers les articles par années.
– Pour gérer la page d’accueil créer un nouveau controler (par ex : HomeController) 
– L’on pourra cliquer sur 2015, 2018 ou 2021
– Créer une page qui affiche les articles (sous forme d’un tableau avec titre lien vers le détail) sur base de l’année de la 
page d’accueil.
● La page affichant le détail d’un article sera construite de manière à faire un affichage spécifique si le contenu de l’article 
est vide (par exemple une image de work in progress)
● Toutes vos pages doivent suivre votre design général et si possible avoir un affichage moderne (simple c’est ok mais 
bleu souligné pour un <a> c’est pas top ;) ) 
● Rappel : 
– Un controlleur est lié a une thématique, l’on gerera toutes les routes concernant les articles dans ArticleController
– Regrouper vos vues par sous répertoire : ex pour les vues des articles, elles seront toutes dans templates/article


