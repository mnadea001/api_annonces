# README: 
Pour installer dependances : composer install (a chaque "installation")

Demarrer projet : symfony server:start

## Description :
Ce projet GitHub contient un code écrit en utilisant le framework Symfony pour gérer les annonces dans une base de données. Il fournit des fonctionnalités pour créer, lire, mettre à jour et supprimer des annonces.

## Fonctionnalités principales :
- Création d'une nouvelle annonce avec un nom, une description, un prix et l’identifiant de son utilisateur.

- Récupération de tous les annonces de la base de données.

- Affichage des détails d'une annonce spécifique.

- Modification des informations d'une annonce existante.

- Suppression d'une annonce de la base de données.

## Pour récupérer la listes des annonces:
Endpoint: /annonces

Méthode: GET

Description: Cet endpoint renvoie une liste contenant tous les annonces présents en base de données. Chaque annonce est représentée par un objet JSON qui contient les champs suivants : id, name, description, price et user_id.

## Pour récupérer une annonce par son id:
Endpoint: /annonces/{annonce_id}

Méthode: GET

Description: Cet endpoint renvoie les détails d'une annonce spécifique présent en base de données, en utilisant l'identifiant de l'annonce (annonce_id) passé en tant que paramètre dans l'URL. Les détails d'une annonce sont représentés par un objet JSON qui contient les champs suivants : id, name, description, price et user_id.

## Pour modifier une annonce par son id:
Endpoint: /annonces/{annonce_id}

Méthode : PUT

Description : Cet endpoint permet de modifier les informations d'une annonce spécifique présent dans la base de données. L'identifiant d'une annonce (annonce_id) doit être passé en tant que paramètre dans l'URL. Les modifications des champs d'une annonce doivent être envoyées dans le corps de la requête au format JSON.

## Pour supprimer une annonce par son id:
Endpoint : /annonces/{annonce_id}

Méthode : DELETE

Description : Cet endpoint permet de supprimer une annonce spécifique de la base de données en utilisant l'identifiant d'une annonces (annonce_id) passé en tant que paramètre dans l'URL.

## Exemple JSON du format d’une annonce: 
`{
  "id": {annonce_id},
  "name": {annonce_name},
  "description": {Description},
  "price": 50.99,
  "user_id": 1,
}`

## Détail des champs:
id: Identifiant unique pour chaque annonce

name: Le nom du produit ou de l'article

description: La description du produit ou de l'article

price:  Le prix du produit ou de l'article

user_id: Identifiant de l’utilisateur qui a créé l'annonce

created_date: date de la création de l'annonce

