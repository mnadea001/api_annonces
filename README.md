# README: 
Pour installer dependances : composer install (a chaque "installation")

Demarrer projet : symfony server:start

## Description :
Ce projet GitHub contient un code écrit en utilisant le framework Symfony pour gérer les catalogues dans une base de données. Il fournit des fonctionnalités pour créer, lire, mettre à jour et supprimer des catalogues.

## Fonctionnalités principales :
- Création d'un nouveau catalogue avec un nom, une description, un prix et l’identifiant de son utilisateur.

- Récupération de tous les catalogues de la base de données.

- Affichage des détails d'un catalogue spécifique.

- Modification des informations d'un catalogue existant.

- Suppression d'un catalogue de la base de données.

## Pour récupérer la listes de catalogues:
Endpoint: /catalogues

Méthode: GET

Description: Cet endpoint renvoie une liste contenant tous les catalogues présents en base de données. Chaque annonce est représentée par un objet JSON qui contient les champs suivants : id, name, description, price et user_id.

## Pour récupérer une annonce par son id:
Endpoint: /catalogue/{catalogue_id}

Méthode: GET

Description: Cet endpoint renvoie les détails d'un catalogue spécifique présent en base de données, en utilisant l'identifiant de l'annonce (catalogue_id) passé en tant que paramètre dans l'URL. Les détails du catalogue sont représentés par un objet JSON qui contient les champs suivants : id, name, description, price et user_id.

## Pour modifier un catalogue par son id:
Endpoint: /updateCatalogue/{catalogue_id}

Méthode : PUT

Description : Cet endpoint permet de modifier les informations d'un catalogue spécifique présent dans la base de données. L'identifiant du catalogue (catalogue_id) doit être passé en tant que paramètre dans l'URL. Les modifications des champs du catalogue doivent être envoyées dans le corps de la requête au format JSON.

## Pour modifier un catalogue par son id:
Endpoint : /catalogue/{catalogue_id}

Méthode : DELETE

Description : Cet endpoint permet de supprimer un catalogue spécifique de la base de données en utilisant l'identifiant du catalogue (catalogue_id) passé en tant que paramètre dans l'URL.

## Exemple JSON du format d’un catalogue: 
`{
  "id": {catalogue_id},
  "name": {Catalogue_name},
  "description": {Description},
  "price": 50.99,
  "user_id": 1,
  "created_date": “2023-05-16:14:17” ,
}`

## Détail des champs:
id: Identifiant unique pour chaque catalogue

name: Le nom du produit ou de l'article

description: La description du produit ou de l'article

price:  Le prix du produit ou de l'article

user_id: Identifiant de l’utilisateur qui a créé le catalogue

created_date: date de la création du catalogue

