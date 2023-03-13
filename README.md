# vente_en_ligne

## Table of contents

- [Aperçu](#Aperçu)
  - [Données](#Conception de bases de données)
  - [Création](#Création du projet)
  - [Générer_un_contrôleur](#Générer un contrôleur)
  - [Custom_queries](#Custom queries)
  - [Affichage_les_produits](#Affichage les produits)
  - [Links](#Links)
  - [Les_bundles_utilisée](#Les bundles utilisée)
- [Author](#author)

## Aperçu

C'est une entreprise de vente en ligne et il a reçu une demande d'un client pour connaître tous les produits qu'il a commandés au cours des six derniers mois en plus récupérer les 3 articles les plus chers acheté par un

### Conception de bases de données:

Insérer des données qui nomme (vent_en_ligne) dans les tables. La table "clients" doit contenir les champs "id", "nom" et "email". La table "commandes" doit contenir les champs "id", "date_commande", "id_client" et "id_produit". La table "produits" doit contenir les champs "id", "nom", "description" et "prix"
![My Image](public/assets/img/database.jpg)

### Création du projet:

Les étapes à suivre:

1- Ouvrez le terminal de console et exécutez cette commande pour créer une nouvelle application Symfony :
`symfony new my_project_directory --webapp`
L'option --webapp installe tous les packages dont vous avez généralement besoin pour créer des applications Web.
2-Exécution du projet:
`symfony server:start`
3- configuration base de donne:
Les paramètres de la connexion à la base de donne sont stockées dans la variable DATABASE_URL qui existe dans la fichier .env.
Exemple:
DATABASE_URL=‘mysql://db_user:db_password@127.0.0.1:3306/db_name’
db_user: root
db_password: par défaut vide
db_name: nom de votre base 'vent_en_ligne'

4- création base de données :
`php bin/console doctrine:database:create`
5-Création d’entités:
`symfony console make:entity`
nom de classe/entite.
6- Migrations:
Création des tables / schémas de la base de données
`php bin/console make:migration `
`php bin/console doctrine:migrations:migrate`
nous avons créé trois entities commandes, produits et clients dans le répertoire src/Entity/

7- pour tester ou pour nous aider à obtenir des données intéressantes pendant que vous développez votre application, les fixtures,faker et foundary sont utilisés pour charger un "faux" ensemble de données dans une base de données qui peut ensuite être utilisée.
`composer require --dev orm-fixtures`
`composer require fzaninotto/faker --dev`
`composer require zenstruck/foundry --dev`
Recharger fixtures:
`symfony console doctrine:fixtures:load`

### Générer un contrôleur

Créez votre premier Controller avec la commande:
`symfony console make:controller ClientController`
La commande crée une classe ClientController dans le répertoire src/Controller/
L'attribut #[Route('/client', name: 'client_products')] est ce qui fait de la méthode index() un contrôleur.
Lorsque vous visitez la page /client dans un navigateur, le contrôleur est exécuté et une réponse est renvoyée.

### Custom queries

Symfony crée un repository pour chaque Entité dans le répertoire src/Repository/.
Pour définir une nouvelle custom query définissez une nouvelle méthode dans votre fichier repository ( ClientsRepository.php)
pour trouver touts les produits commandés par un client spécifique au cours des six derniers mois.
aussi on définit une nouvelle custom query définissez une nouvelle méthode dans votre fichier repository ( CommandesRepository.php) pour récupérer les 3 articles les plus chers acheté par un client exemple : 'tstrosin' .vous pouvez le remplacer par n'importe quel nom dans data base.Vous pouvez désormais les utiliser dans votre code de fichier controller de Client.

### Affichage les produits

Twig est un moteur de templates qui permet de rendre les pages web plus lisibles, plus claires. dans le répertoire src/Template/product/ vous trouvez le ficher qui est responcable de affichage les produits où On peut lui appliquer un traitement logique avant de l'afficher .

### Links

- Github URL: [https://github.com/naglaa77/vente_en_ligne]

### Les bundles utilisée

- doctrine/doctrine-fixtures-bundle
- fakerphp/faker
- zenstruck/foundry
- MakerBundle
- TwigBundle

## Author

- Linkedin - [https://www.linkedin.com/feed/]

```

```
